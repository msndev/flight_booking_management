<?php 
        $title = 'FLy High Airlines | Change Password';
	include $_SERVER["DOCUMENT_ROOT"].'/IWP_project/core/init.php';
	check_if_logged_in();

	if(empty($_POST)===false) {
		$required_fields = array('current_password','password','password_again');
		foreach($_POST as $key=>$value) {
			if(empty($value) && in_array($key, $required_fields) === true ) {
				$errors[] = 'Fields marked with * are required!';
				break 1;
			}
		}

		if(md5($_POST['current_password']) === $f_data['f_password']) {
			if(trim($_POST['password']) !== trim($_POST['password_again'])) {
				$errors[] = 'Your new passwords do not match';
			}
			else if(strlen($_POST['password']) < 6 ) {
				$errors[] = 'Your passwords must be atleast 6 characters!';
			}
		}
		else {
			$errors[] ='Your current password is incorrect!';
		}
	}

	include $_SERVER["DOCUMENT_ROOT"].'/IWP_project/includes/overall/header.php';
?>
            
			<h3>Change Password</h3>
			<div class = " w3-animate-bottom w3-display-middle">
	<div  style="top: 50px;  opacity: 0.85;  position: fixed; align: center; width: 30%; margin-bottom: 10%"> 
			<div id = "hide" style = "display: block;">
            <form action="" method="POST" class = "well">
            	Current Password: <br/>
            	<input type="password" class = "form-control" name="current_password"><br/><br/>
            	New Password: <br/>
            	<input type="password" class = "form-control" name="password"><br/><br/>
            	New Password Again: <br/>
            	<input type="password" class = "form-control" name="password_again"><br/><br/>
            	<input type="submit" class="btn btn-success" value = "Update" /><br/><br/>
			</form>
</div>
	</div>
			</div>
<?php 

if(isset($_GET['success']) === true && empty($_GET['success']) === true ) {
	echo 'Your password has been changed successfully!';
	header('refresh: 2, url = main.php');
}  else {
	if (isset($_GET['force']) === true && empty($_GET['force']) === true ) {
?>
	<p>You must change your password to continue using the site!</p>	
<?php
	}
	if(empty($_POST)===false && empty($errors)===true) {
		f_change_password($session_f_id, $_POST['password']);
		header('Location: http://localhost/IWP_project/changepass.php?success');
	}
	else if(empty($errors) === false) {
		echo "<script>
			document.getElementById(\"hide\").style.display = \"none\";
			</script>";

		echo "<h4 style = \"color: white\">";
		echo output_errors($errors);
		header("refresh:2; url=changepass.php");
}

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php } ?>