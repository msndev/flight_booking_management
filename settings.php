<?php 
    $title = 'Fly High Airlines : Settings';
	include $_SERVER["DOCUMENT_ROOT"].'/IWP_project/core/init.php';
	include $_SERVER["DOCUMENT_ROOT"].'/IWP_project/includes/overall/header.php';

	if(empty($_POST)===false) {
		$required_fields = array('f_fname','f_lname','f_mailid');
		foreach($_POST as $key=>$value) {
			if(empty($value) && in_array($key, $required_fields) === true ) {
				$errors[] = 'All the fields are required';
				break 1;
			}
		}

		if(empty($errors) === true ) {
			if(filter_var($_POST['f_mailid'], FILTER_VALIDATE_EMAIL) === false) {
				$errors[] = 'Please enter a valid email address';
			}
			if(f_email_exists($_POST['f_mailid']) === true && $f_data['f_mailid'] !== $_POST['f_mailid']){
				$errors[] ='Sorry, the email is already in use';
			}
			if(!preg_match('/^[a-z]{2,30}$/i', $_POST['f_fname'])) {
				$errors[] = 'Your first name can contain only alphabets';
			}
			if(!preg_match('/^[a-z]{2,30}$/i', $_POST['f_lname'])) {
				$errors[] = 'Your last name can contain only alphabets';
			}
		}
	}
?>

	<h3>Settings</h3>

<?php

	if(isset($_GET['success']) ===true && empty($_GET['success'])===true) {
		echo 'Updated!';
		header("refresh:2; url=main.php");
	}
	else {
		if(empty($_POST) ===false && empty($errors)===true) {
			$update_data = array('f_fname' 	=> $_POST['f_fname'],'f_lname' 	=> $_POST['f_lname'],'f_mailid'	=> $_POST['f_mailid'],);
			update_f($session_f_id, $update_data);
			header('Location: settings.php?success');
			exit();
	}
	else if(empty($errors) === false ) {
		echo output_errors($errors);
	}

?>
<div class = " w3-animate-bottom w3-display-middle">
	<div  style="top: 50px;  opacity: 0.85;  position: fixed; align: center; width: 100%; margin-bottom: 10%"> 
<form action="" method="POST" class = "well" style = "width: 30%">
	<br/>
	First Name: <br/>
	<input class = "form-control" type="text" name="f_fname" value="<?php echo $f_data['f_fname']; ?>"/><br/>
	Last Name: <br/>
	<input class = "form-control" type="text" name="f_lname" value="<?php echo $f_data['f_lname']; ?>"/><br/>
	Email ID: <br/>
	<input class = "form-control" type="text" name="f_mailid" value="<?php echo $f_data['f_mailid']; ?>"/><br/><br/>
	<input type="submit" class="btn btn-success" value="Update" /><br/><br/>

</form>
	</div>
</div>

<?php
}
	
?>