<?php

    $title = 'Fly High Airlines | Signup Error';
	include $_SERVER["DOCUMENT_ROOT"].'/IWP_project/core/init.php';

        $f_fname = $_GET['f_fname'];
        $f_lname = $_GET['f_lname'];
        $f_uname = $_GET['f_uname'];
        $f_password = md5($_GET['f_password']);

        $f_mailid = $_GET['f_mailid'];
        $f_phone = $_GET['f_phone'];
        $f_sex = $_GET['f_sex'];
        $f_address = $_GET['f_address'];
        
        $result = mysql_query("INSERT INTO flight_users (f_fname, f_lname, f_mailid, f_uname, f_phone, f_password, f_sex, f_address, f_active) VALUES ('$f_fname','$f_lname','$f_mailid','$f_uname','$f_phone','$f_password','$f_sex','$f_address', '1')");
        header('refresh: 1, url = main.php');


?>
