<?php

	session_start();
	session_destroy();
	header('Location: http://localhost/IWP_project/index.php');

?>