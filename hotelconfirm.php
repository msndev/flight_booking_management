<?php
	include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/core/init.php';
    include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/includes/overall/header.php';
    ?>


<script>
    document.body.style.backgroundImage = "url('./vendor/img/refs/<?php
                                                                    mysql_data_seek($result, 24);
                                                                    $row = mysql_fetch_row($result);
                                                                    echo $row[3];
                                                                    ?>')";
    document.body.style.backgroundSize = "100%";
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundAttachment = "fixed";
    document.body.style.backgroundPosition = "center";
    document.getElementById("menu").style.display = "none";
</script>

<div class=" w3-animate-bottom w3-display-middle">
	<div style="  position: fixed; align: center; width: 100%; opacity: 1; margin-bottom: 30px;">

		<?php
		
		if ((isset($_GET['name']))) {
			
			$hotel_name = $_GET['name'];
			$to = $_GET['to'];
		}

		echo '<form action = "saved.php" method = "POST">';
		echo '<img src = "">';


		echo '<div class = "well" style = "width: 100%;float: right;">';
		$query = "SELECT * FROM `hotels` WHERE `hotel_name` = '$hotel_name' AND `hotel_city` = '$to'";
		$result = mysql_query($query);

		if ($result) {
			while ($row = mysql_fetch_assoc($result)) {
				$hotel_name = $row['hotel_name'];
				$hotel_address = $row['hotel_address'];
				$hotel_review = $row['hotel_review'];
				$price = $row['price'];
				$hotel_rating = $row['hotel_rating'];
				$rooms_available = $row['rooms_available'];
				$review_count = $row['review_count'];
				echo '<h1>' . $row['hotel_name'] . '</h1><br><br>';
				echo '<div>';
				echo '<img src = "vendor/img/refs/hotel' . $hotel_rating . '.jpg" style = "width:60%; height : 40%; float: right; border: none;">';
				echo '<div style = "width: 40%; float: left; padding-right: 10%; margin-bottom: 10px; margin-top: 10px;"><h3 style = "color: green;"><b>Hotel Address:</b></h3>' . $hotel_address . '</div><br>';
				echo '<div style = "width: 40%; float: left; padding-right: 10%; margin-bottom: 10px; margin-top: 10px;"><h3 style = "color: green;">Hotel Reviews:</h3>' . $hotel_review . '</div><br>';

				
				echo '<h4 style = "color: green;"><b>Rating: ' . $hotel_rating . '</b></h4>';
				echo '<h4 style = "color: green;"><b>Review Count: ' . $review_count . '</b></h4>';
				echo '<h4 style = "color: green;"><b>Rooms available: ' . $rooms_available . '</b></h4><br><br>';
				echo '</div>';
				// echo '<div style = "float: left;">';
?>
					<div  style = "width: 100%; margin-top: 50px; float: right;">
					<table align = "center" width = "100%">
						<th>
							<tr>
							<td>Check-in Date</td>
							<td>Check-out Date</td>
							<td>Number of Rooms</td>
							</tr>
						</th>
						<tb>
							<tr>
								<td><input type = "text" name = "checkin" class = "form-control" style = "background-color: rgb(220, 220, 220); width: 80%; align: center;"></td>
								<td><input type = "text" name = "checkout" class = "form-control" style = "background-color: rgb(220, 220, 220); width: 80%; align: center;"></td>
								<td><input type = "number" name = "rooms" class = "form-control" style = "background-color: rgb(220, 220, 220); width: 80%; align: center;"></td>
							</tr>
						</tb>
					</table>
					<br>Any special requests
					<textarea title = "Needs" class = "form-control" style = "opacity: 0.9"></textarea>
					<input type="hidden" name="hotel_name" value="<?php echo $hotel_name; ?>" />	
				</div>
			

<?php
				echo '<h2 style = "color: green; float: right; margin-top: 10%;"><b>Price: ' . $price . ' per day' .'</b></h2><br><br><br><br>';
				echo 'Contact Number: +91 9876543210<br><br>';
				echo '<button type="submit" value="cancel" name="cancel" class="btn btn-success" style = "background-color: #b41515; ">Skip to booking cabs</button>';
		
				echo '<button type = "submit" value = "hotelconfirm" name = "hotelconfirm" class = "btn success" style = "background-color: green; float: right; margin-top: 10%;">Book Hotel!</button>';
				echo '<br>';
				echo '</form>';
				echo '</div>';


			}
		}
		?>
	</div>
</div>