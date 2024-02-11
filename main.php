<?php
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/core/init.php';
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/includes/overall/header.php'; ?>


<marquee>Now get upto 10% off on student offers and make the best out of this super deal! Other amazing deals on
	round trips to Goa, Chennai and Bangalore during the Festive time, for more information, head on to <em>OFFERS.</em></marquee>
<div style = "z-index: 100; position: absolute; right: 15%; top: 50%; bottom:0px; text-align: right;">
	<h3>Welcome to Fly High Airlines!</h3><br><br>
	<h6>Find the cheapest and best flights for you</h6>
	<h6>Free 3 course meals for every passenger</h6>
	<h6>Free Wi-Fi services offered during your flight</h6>
	<h6>Upto 25 Kg Baggage limit for every passenger</h6>
	<h6>Unlimited Food and Alcohol in Business Class</h6>
	<h6>Book hotels via Fly High Airlines and avail 10% discount per room</h6>
	<h6>Discounted travel coupons for every city</h6>
	<h6>Hire cabs or bus via Fly High Airlines and avail 10% discount per ticket</h6>
	<h6>Avail wheelchairs and emergency services for disabled at free of cost</h6>
</div>


<div width = "120%">
	<div class = "slideshow-container">
		<div class = "mySlides fade">
			<img src = "vendor/img/refs/<?php 
											mysql_data_seek($result, 3);
											$row = mysql_fetch_row($result);
											echo $row[3];
											 ?>" style = "width:100%" height = "100%">
		</div>
		<div class = "mySlides fade">
			<img src = "vendor/img/refs/<?php 
											mysql_data_seek($result, 4);
											$row = mysql_fetch_row($result);
											echo $row[3];
											 ?>" style = "width:100%" height = "100%">
		</div>
		<div class = "mySlides fade">
			<img src = "vendor/img/refs/<?php 
											mysql_data_seek($result, 15);
											$row = mysql_fetch_row($result);
											echo $row[3];
											 ?>" style = "width:100%" height = "100%">
		</div>
		<div class = "mySlides fade">
			<img src = "vendor/img/refs/<?php 
											mysql_data_seek($result, 0);
											$row = mysql_fetch_row($result);
											echo $row[3];
											 ?>" style = "width:100%" height = "100%">
		</div>
	</div>
	<br>

	<div style = "text-align: center">
		<span class = "dot"></span>
		<span class = "dot"></span>
		<span class = "dot"></span>
		<span class = "dot"></span>
	</div>
	<br>

	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slideIndex++;
			if (slideIndex > slides.length) {
				slideIndex = 1
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
			setTimeout(showSlides, 4000); 
		}
	</script>
</div>




<div class = "row" style = "position: relative;">
	<div class = "col-lg-4">
		<div class = "well bs-component">
			<form class = "form-horizontal" action = "main.php" method = "GET">
				One click to everything
				<legend>Search Flights</legend>
				<div class = "form-group">
					<div class = "col-lg-12">
						<div class = "radio">
							<label>
								<input type = "radio" name = "path" value = "oneway" onclick = "setReadOnly(this)">
								One Way
							</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<label>
								<input type = "radio" name = "path" value = "return" checked onclick = "setReadOnly(this)">
								Return
							</label>
						</div>
					</div>
				</div>
				<div class = "form-group">
					<div class = "col-lg-12">
						<label class = "control-label" for = "focusedInput">From</label>
						<input class = "form-control" name = "from_city" id = "from_city" value = "<?php if (isset($_GET['from_city'])) {
																								echo htmlentities($_GET['from_city']);
																							} else echo ''; ?>" required type = "text">
					</div>
				</div>
				<div class = "form-group">
					<div class = "col-lg-12">
						<label class = "control-label" for = "focusedInput">To</label>
						<input class = "form-control" name = "to_city" id = "to_city" value = "<?php if (isset($_GET['to_city'])) {
																							echo htmlentities($_GET['to_city']);
																						} else echo ''; ?>" required type = "text">
					</div>
				</div>
				<div class = "form-group">
					<div class = "col-lg-12">
						<label class = "control-label" for = "focusedInput">Departure Date</label>
						<input class = "form-control" name = "departure_date" id = "departure_date" value = "<?php if (isset($_GET['departure_date'])) {
																											echo htmlentities($_GET['departure_date']);
																										} else echo ''; ?>" required type = "text">
					</div>
				</div>
				<div class = "form-group">
					<div class = "col-lg-12">
						<label class = "control-label" for = "focusedInput">Arrival Date</label>
						<input class = "form-control" name = "return_date" id = "return_date" value = "<?php if (isset($_GET['return_date'])) {
																									echo htmlentities($_GET['return_date']);
																								} else echo ''; ?>" required type = "text">
					</div>
				</div>
				<div class = "form-group">
					<div class = "col-lg-12">
						<label for = "select" class = "control-label">Number of Adults</label>
						<select class = "form-control" name = "count_a" id = "select">
							<option value = "1">1</option>
						</select>
					</div>
				</div>
				<div class = "form-group">
					<div class = "col-lg-12">
						<label for = "select" class = "control-label">Number of Children</label>
						<select class = "form-control" name = "count_c" id = "select">
							<option value = "0">0</option>
							<option value = "1">1</option>
						</select>
					</div>
				</div>
				<div class = "form-group">
					<div class = "col-lg-12">
						<label for = "select" class = "control-label">Class</label>
						<select class = "form-control" name = "class" id = "select">
							<option name = "economy" value = "Economy">Economy</option>
							<option name = "business" value = "Business">Business</option>
						</select>
						<br>
					</div>
				</div>
				<div class = "form-group">
					<center>
						<button type = "submit" id = "submit" value = "submit" name = "submit"  style = "background-color: #b41515" class = "btn btn-success">Submit</button>
					</center>
				</div>
			</form>
		</div>
	</div>





	<div class = "col-lg-8">
		<div class = "well bs-component">
			<form class = "form-horizontal" action = "book.php" method = "GET">
				<?php

				if (
					isset($_GET['path']) === true && isset($_GET['from_city']) === true && isset($_GET['to_city']) === true
					&& isset($_GET['departure_date']) === true
					&& isset($_GET['count_a']) === true && isset($_GET['count_c']) === true && isset($_GET['class']) === true
				) {

					$from = $_GET['from_city'];
					$to = $_GET['to_city'];
					$departdate = $_GET['departure_date'];
					$class = $_GET['class'];
					$path = $_GET['path'];
					$counta = $_GET['count_a'];
					$countc = $_GET['count_c'];

					if ($path === 'oneway') {
						echo '<legend>Flights from ' . $from . ' to ' . $to . '</legend>';
						$query = "SELECT * FROM `flights_table` WHERE `from_city`= '$from' AND `to_city` = '$to' AND `departure_date` = '$departdate'";
						$result = mysql_query($query);
						if ($result) {
							if (mysql_num_rows($result) > 0) {
								while ($row = mysql_fetch_assoc($result)) {
									?>
									<table class = "table">
										<thead>
											<tr>
												<th>Flight No</th>
												<th>Departure Time</th>
												<th>Arrival Time</th>
												<th>Seats Left</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<?php if ($class === 'Economy') {  ?>
													<td><input type = "radio" name = "chose_to" value = "<?php echo $row['fno']; ?>" /><?php echo $row['fno']; ?></td>
													<td><?php echo $row['departure_time']; ?></td>
													<td><?php echo $row['arrival_time']; ?></td>
													<td><?php echo $row['e_seats_left']; ?></td>
													<td><?php echo $row['e_price']; ?></td>
												<?php } else if ($class === 'Business') { ?>
													<td><input type = "radio" name = "chose_to" value = "<?php echo $row['fno']; ?>" /><?php echo $row['fno']; ?></td>
													<td><?php echo $row['departure_time']; ?></td>
													<td><?php echo $row['arrival_time']; ?></td>
													<td><?php echo $row['b_seats_left']; ?></td>
													<td><?php echo $row['b_price']; ?></td>
												<?php } else {
													'Not enough seats left, please search again!';
												}
											} ?>
										</tr>
									</tbody>
								</table>
								<input type = "hidden" name = "count_a" value = "<?php echo $counta; ?>" />
								<input type = "hidden" name = "count_c" value = "<?php echo $countc; ?>" />
								<center><button type = "submit" id = "class" style = "background-color: #b41515" name = "class" value = "<?php echo $class; ?>" class = "btn btn-primary btn-success" style = "background-color: #b41515">Choose Flights</button></center><br>
							<?php
							} else {
								echo 'No flights found';
							}
						} else {
							die(mysql_error());
						}
					} else if ($path === 'return') {
						echo '<legend>Flights from ' . $from . ' to ' . $to . '</legend>';
						$_SESSION['to_city'] = $to;
						// echo $_SESSION['to_city'];
						// echo "HI";
						$query1 = "SELECT * FROM `flights_table` WHERE `from_city`= '$from' AND `to_city` = '$to' AND `departure_date` = '$departdate'";
						$result1 = mysql_query($query1);
						if ($result1) {
							if (mysql_num_rows($result1) > 0) {
								while ($row1 = mysql_fetch_assoc($result1)) {
									?>
									<table class = "table">
										<thead>
											<tr>
												<th>Flight No</th>
												<th>Departure Time</th>
												<th>Arrival Time</th>
												<th>Seats Left</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<?php if ($class === 'Economy') {  ?>

													<td><input type = "radio" required name = "chose_to" value = "<?php echo $row1['fno']; ?>" /><?php echo $row1['fno']; ?></td>
													<td><?php echo $row1['departure_time']; ?></td>
													<td><?php echo $row1['arrival_time']; ?></td>
													<td><?php echo $row1['e_seats_left']; ?></td>
													<td><?php echo $row1['e_price']; ?></td>
												</tr>
											</tbody>
										</table> <?php } else { ?>
										<td><input type = "radio" required name = "chose_fro" value = "<?php echo $row2['fno']; ?>" /><?php echo $row2['fno']; ?></td>
										<td><?php echo $row2['departure_time']; ?></td>
										<td><?php echo $row2['arrival_time']; ?></td>
										<td><?php echo $row2['b_seats_left']; ?></td>
										<td><?php echo $row2['b_price']; ?></td>
									<?php }
								}
							} else {
								echo 'No flights found';
							}
						} else {
							die(mysql_error());
						}
						echo '<legend>Flights from ' . $to . ' to ' . $from . '</legend>';
						if (isset($_GET['return_date']) === true) {
							$returndate = $_GET['return_date'];
							$query2 = "SELECT * FROM `flights_table` WHERE `from_city`= '$to' AND `to_city` = '$from' AND `departure_date` = '$returndate'";
							$result2 = mysql_query($query2);
							if ($result2) {
								if (mysql_num_rows($result2) > 0) {
									while ($row2 = mysql_fetch_assoc($result2)) {
										?>
										<table class = "table">
											<thead>
												<tr>
													<th>Flight No</th>
													<th>Departure Time</th>
													<th>Arrival Time</th>
													<th>Seats Left</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<?php if ($class === 'Economy') {  ?>
														<td><input type = "radio" required name = "chose_fro" value = "<?php echo $row2['fno']; ?>" /><?php echo $row2['fno']; ?></td>
														<td><?php echo $row2['departure_time']; ?></td>
														<td><?php echo $row2['arrival_time']; ?></td>
														<td><?php echo $row2['e_seats_left']; ?></td>
														<td><?php echo $row2['e_price']; ?></td>
													</tr>
												</tbody>
											</table> <?php } else { ?>
											<td><input type = "radio" required name = "chose_fro" value = "<?php echo $row2['fno']; ?>" /><?php echo $row2['fno']; ?></td>
											<td><?php echo $row2['departure_time']; ?></td>
											<td><?php echo $row2['arrival_time']; ?></td>
											<td><?php echo $row2['b_seats_left']; ?></td>
											<td><?php echo $row2['b_price']; ?></td>
										<?php }
									} ?>
									<input type = "hidden" name = "count_a" value = "<?php echo $counta; ?>" />
									<input type = "hidden" name = "count_c" value = "<?php echo $countc; ?>" />
									<center><button type = "submit" id = "class" value = "<?php echo $class; ?>" name = "class" class = "btn btn-primary btn-success" style = "background-color: #b41515" onclick="book.php">Choose Flights</button></center><br>
								<?php
								} else {
									echo 'No flights found';
								}
							} else {
								die(mysql_error());
							}
						}
					}
				} else { ?>


<?php } ?>

				<img src = "./vendor/img/refs/main.jpg" width = "100%" style = "text-align: right; ">
				<div>
					<h4>About FlyHigh</h4><br>
					<h5 style = "text-align: justify; color: rgb(170, 170, 170);">The Flyhigh team brings together the great hospitality and customer service experience of its parent brands to create 
					excellence in the field of air travel. The unique name of the airline is derived from the Sanskrit word “flihiya”, which 
					means limitless expanse, and signifies that the brand aspires to push all boundaries in its quest to be the best airline 
					in the skies.</h5>
					<h5 style = "text-align: justify; color: rgb(170, 170, 170);">The brand palette of aubergine and gold is reflected in the strikingly patterned tails of its aircraft and in the uniforms 
					of the crew and staff as well. The airline's logo of an eight-pointed star is made of interconnected lines to indicate 
					the seamless experience they hope to deliver to their customers.</h5>
				</div>
				</form>
			</div>
		</div>
	</div>


</div> 


















	



<h3 style = "margin-left: 10%">Book your nearest Hotels!</h3>

<div id="googleMap" style="width:96%;height:500px; margin-left:2%; margin-right: 2%; margin-bottom: 5%"></div>

<script>
	function myMap() {
		var mapProp= {
			center:new google.maps.LatLng(51.508742,-0.120850),
			zoom:5,
		};
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYIB-6d9aGquzFWOCBfMEKlza1Qm4P1mw&callback=myMap"></script>


<?php 
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/includes/overall/footer.php'; ?>