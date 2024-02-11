<?php
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/core/init.php';
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/includes/overall/header.php';
?>

<script>
	document.body.style.backgroundImage = "url('./vendor/img/refs/<?php
																	mysql_data_seek($result, 6);
																	$row = mysql_fetch_row($result);
																	echo $row[3];
																	?>')";
	document.body.style.backgroundSize = "100%";
	document.body.style.backgroundRepeat = "no-repeat";
	document.getElementById("menu").style.display = "none";
</script>


<div class = "w3-container w3-animate-bottom w3-display-middle">
	<div class="bs-component" style="top: 50px;  left: 20%; width: 25%;  
									height: 60; position: fixed; right: 20%"> 

		<form class="form-horizontal well" action="loginact.php" style = "top: 55%; background-color: black; width: 130%; " method="POST">
			<legend><h2>Passenger Log In</h2></legend>
			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Username</label>
				<div class="col-lg-12">
					<input type="text" name="f_uname" class="form-control" required placeholder="Username">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-lg-2 control-label">Password</label>
				<div class="col-lg-12">
					<input type="password" name="f_password" class="form-control" required placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<center>
					<button type="submit" id="submit" value="submit" name="submit" class="btn btn-success" style="background-color: rgb(207, 1, 6); border: rgb(207, 1, 6); opacity: 200%">Login</button>
				</center>
			</div>
		</form>

		<strong><a href="http://localhost/IWP_project/register.php" style="color:white">Register Here</a></strong><br><br>
		<strong><a href="http://localhost/IWP_project/recover.php?mode=f_uname" style="color:white">Forgot Username?</a></strong><br />
		<strong><a href="http://localhost/IWP_project/recover.php?mode=f_password" style="color:white">Forgot Password?</a></strong><br />
	</div>
</div>




