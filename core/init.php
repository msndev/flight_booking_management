<?php 
	ob_start();
	session_start();

	require $_SERVER["DOCUMENT_ROOT"].'/IWP_project/core/database/connect.php';
	require $_SERVER["DOCUMENT_ROOT"].'/IWP_project/core/functions/general.php';
	require $_SERVER["DOCUMENT_ROOT"].'/IWP_project/core/functions/functions.php';
	
	$current_file = $_SERVER['SCRIPT_NAME'];
	$current_file = explode('/',$current_file);
	$current_file = end($current_file);

	if(f_logged_in() === true) {
	      $session_f_id = $_SESSION['f_id'];
	      $f_data = f_data($session_f_id,'f_id','f_uname','f_password','f_fname','f_lname','f_address','f_phone','f_mailid','f_sex','f_regdate','f_passrec');
	      if(f_active($f_data['f_uname']) === false) {
			session_destroy();
			header('Location: http://localhost/IWP_project/main.php');
			exit();
		}
	}

	$errors = array();

?>