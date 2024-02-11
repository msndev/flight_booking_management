<?php
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/core/init.php';
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/includes/overall/header.php';
?>

<legend>Bookings so far</legend>
<div class=" w3-animate-bottom w3-display-middle">
	<div style="top: 50px; position: fixed; align: center; width: 100%">

		<?php
		$uid = $f_data['f_id'];
		$query1 = "SELECT * FROM `passenger_details` WHERE `p_fid` = '$uid'";
		$result1 = mysql_query($query1);

		if ($result1) {
			echo '<h1>FLIGHTS</h1><br><br>';
			while ($row = mysql_fetch_assoc($result1)) {
				if ($uid === $row['p_fid']) {
					$pnr = $row['p_pnr'];
					$fno = $row['p_fno'];
					echo '<form action="cancel.php" method="POST">';
					echo '<div class = "well">Flight No: ' . $row['p_fno'] . '<br><br>';
					echo '<h3>From: ' . $row['p_from'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					echo 'To: ' . $row['p_to'] . "</h3>";
					echo 'Class: ' . $row['p_class'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					echo 'PNR Number: ' . $row['p_pnr'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . '<br>';
					echo 'Departure Date: ' . $row['p_dedate'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					echo '<h2>BOARDING TIME: &nbsp;&nbsp;' . $row['p_detime'] . "</h2>";
					echo 'Arrival Date: ' . $row['p_ardate'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					echo 'Arrival Time: ' . $row['p_artime'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . '<br/>';
					echo 'Passenger Name: ' . $row['p_name'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . '<br>';
					echo 'Passenger Age: ' . $row['p_age'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . '<br>';
					echo 'Passenger Sex: ' . $row['p_sex'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . '<br>';
					echo 'Passenger Type: ' . $row['p_passtype'] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					echo '<h5 style = "float: right;"> STATUS: CONFIRMED' . "</h5>";
					echo "<input type='hidden' value='$pnr' id='p_pnr' name='p_pnr' />";
					echo "<input type='hidden' value='$fno' id='p_fno' name='p_fno' /></div>";

					if ($row['p_status'] === 'Booked') {
						echo '<button type="submit" value="cancel" name="cancel" class="btn btn-success" style = "background-color: #b41515; float: right;">Cancel Flight</button>';
						echo '<br/><hr>';
						echo '</form>';
					} else {
						echo '<br/><hr>';
						echo '</form>';
					}
				}
			}
		}

		$query2 = "SELECT * FROM `booked_hotels` WHERE `f_id` = '$uid'";
		$result2 = mysql_query($query2);

		if (isset($result2)) {
			echo '<h1>HOTELS</h1><br><br>';
			while ($row = mysql_fetch_assoc($result2)) {

				$hotel_name = $row['hotel_name'];
				$hotel_address = $row['hotel_address'];
				$hotel_review = $row['hotel_review'];
				$price = $row['price'];
				$hotel_rating = $row['hotel_rating'];
				$rooms_available = $row['rooms_available'];
				$review_count = $row['review_count'];
					echo '<form action="cancel.php" method="POST">';
					
					echo '<div class = "well" style = "width: 30%; float: left; margin-right: 38px; margin-bottom: 38px;"><h2>' . $row['hotel_name'] . '<br><br></h2>';
					echo '<img src = "./vendor/img/refs/hdmac.jpg" style = "width: 100%; height: 35%;">';
					echo 'Hotel Address:' . $hotel_address . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>';
					echo 'Hotel Review: ' . $hotel_review . "<br>";
					echo 'Price: ' . $price . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>';
					echo 'Rating: ' . $hotel_rating . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . '<br>';
					echo 'Rooms available: ' . $rooms_available . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>';
					echo 'Review Count: ' . $review_count . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>';

					echo '<hr><button type="submit" value="cancel" name="cancel" class="btn btn-success" style = "background-color: #b41515; ">Cancel Hotel Prebooking</button>';
					echo '<br/></div>';
					echo '</form>';
					
				
			}
		}
					


		?>
	</div>
</div>