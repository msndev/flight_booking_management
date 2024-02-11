<?php

	$connection_error = 'Sorry, there was some connectivity issue!';
	$dbServername = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	@mysql_connect($dbServername, $dbUsername, $dbPassword) or die($connection_error);
	@mysql_select_db('flyhigh') or die($connection_error);

?>