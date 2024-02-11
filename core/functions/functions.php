<?php

	function f_data($f_id){
		$data = array();
		$f_id = (int)$f_id;
		$func_num_args = func_num_args();
		$func_get_args = func_get_args();
		if($func_num_args > 1) {
			unset($func_get_args[0]);
			$fields = '`'. implode('`, `', $func_get_args) . '`'; 
			$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `flight_users` WHERE `f_id` = $f_id"));			
			return $data;
		}
	}

	function f_logged_in() {
		if (isset($_SESSION['f_id'])) {
			return true;
		} else {
			return false;
		}
	}

	function f_exists($f_uname) {
		$f_uname = sanitize($f_uname);
		$query = mysql_query("SELECT COUNT(`f_id`) FROM `flight_users` WHERE `f_uname`= '$f_uname'");
		return (mysql_result($query, 0) == 1) ? true : false; 
	}

	function f_email_exists($f_mailid) {
		$f_mailid = sanitize($f_mailid);
		$query = mysql_query("SELECT COUNT(`f_id`) FROM `flight_users` WHERE `f_mailid`= '$f_mailid'");
		return (mysql_result($query, 0) == 1) ? true : false; 
	}

	function f_active($f_uname) {
		$f_uname = sanitize($f_uname);
		$query = mysql_query("SELECT COUNT(`f_id`) FROM `flight_users` WHERE `f_uname`= '$f_uname' AND `f_active` = 1");
		return (mysql_result($query, 0) == 1) ? true : false; 
	}

	function f_id_from_username($f_uname) {
		$f_uname = sanitize($f_uname);
		$query = mysql_query("SELECT `f_id` FROM `flight_users` WHERE `f_uname` = '$f_uname'");
		return mysql_result($query, 0, 'f_id');
	} 
	
	function f_login($f_uname, $f_password) {
		$f_id = f_id_from_username($f_uname);
		$f_uname = sanitize($f_uname);
		$f_password = md5($f_password);
		$query = mysql_query("SELECT COUNT(`f_id`) FROM `flight_users` WHERE `f_uname`= '$f_uname' AND `f_password` = '$f_password'");
		return (mysql_result($query, 0) == 1) ? $f_id : false;
	}

	
	function update_f($f_id, $update_data) {
		$update = array();
		array_walk($update_data, 'array_sanitize');
		foreach ($update_data as $field => $data) {
			$update[] = '`' . $field . '` = \'' . $data . '\'';
		}		
		mysql_query("UPDATE `flight_users` SET " . implode(', ',$update) . "WHERE `f_id` = $f_id") or die(mysql_error());
	}

	function f_change_password($f_id, $f_password) {
		$f_id = (int)$f_id;
		$f_password = md5($f_password);
		mysql_query("UPDATE `flight_users` SET `f_password` = '$f_password', `f_passrec` = 0 WHERE `f_id` = $f_id");
	}

?>