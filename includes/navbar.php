<div class="navbar navbar-default navbar-fixed-top"  id = "nav" style = "background-color: #b41515 ; display: block;">
  	<div class="container">
  		<div class="navbar-header">
  			<a href="main.php" class="navbar-brand">Fly High Airlines</a>
  			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
  		</div>
  		<div class="navbar-collapse collapse" id="navbar-main">
  			<ul class="nav navbar-nav">
  				<li><a href="aboutus.php">Airline Resources</a></li>
				<li><a href="policies.php">Policies</a></li>
			</ul>
  			<?php
				if (f_logged_in() === true) {
					include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/includes/widgets/f-logout.php';
				} else {
					include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/includes/widgets/w-login.php';
				} ?>