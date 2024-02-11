<?php
	include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/core/init.php';
	include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/includes/overall/header.php';

	if(isset($_SESSION['to_city'])) {
		$to = $_SESSION['to_city'];
	}
	$place = 0;
	if ($to == 'Delhi') {
		$place = 20;
	}
	if ($to == 'Hyderabad') {
		$place = 21;
	} 
	if (($to == 'chennai') || ($to == 'Chennai')) {
		$place = 22;
	}
	if ($to == 'Mumbai') {
		$place = 23;
	}
	echo '<h1>Hotels&nbsp; in &nbsp;' . $to . '<br></h1>';
?>


<script>
    document.body.style.backgroundImage = "url('./vendor/img/refs/<?php
                                                                    mysql_data_seek($result, $place);
                                                                    $row = mysql_fetch_row($result);
                                                                    echo $row[3];
                                                                    ?>')";
    document.body.style.backgroundSize = "100%";
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundAttachment = "fixed";
    document.body.style.backgroundPosition = "center";
    document.getElementById("menu").style.display = "none";
</script>

<legend style = "opacity: 0.7;">Book hotels!</legend>
<div class=" w3-animate-bottom w3-display-middle">
	<div style="top: 50px;  position: fixed; align: center; width: 100%">

		<?php
		$str0 ="";
		// $to="";
		if(isset($_SESSION['to_city'])) {
			$to = $_SESSION['to_city'];
		}
		echo '<form action="" method="POST">';
		echo '<div class = "well">';
		$query = "SELECT * FROM `hotels` WHERE `hotel_city` = '$to'";
		$result = mysql_query($query);

		if ($result) {
			$temp = 0;
			while ($row = mysql_fetch_assoc($result)) {
					$hotel_name = $row['hotel_name'];
					$hotel_address = $row['hotel_address'];
					$hotel_review = $row['hotel_review'];
					$price = $row['price'];
					$hotel_rating = $row['hotel_rating'];
					$rooms_available = $row['rooms_available'];
					$review_count = $row['review_count'];
					

					echo '<h3>' . $row['hotel_name'] . '</h3><br><br>';
					echo 'Hotel Address:' . $hotel_address . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>';
					echo 'Hotel Review: ' . $hotel_review . "<br>";
					echo 'Price: ' . $price . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>';
					echo 'Rating: ' . $hotel_rating . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . '<br>';
					echo 'Rooms available: ' . $rooms_available . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>';
					echo 'Review Count: ' . $review_count . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>';

					echo "<input type='hidden' value='$hotel_name' id='hotel_name' name='hotel_name' />";
					
					//echo "<input type='hidden' value='$fno' id='p_fno' name='p_fno' />";
					$str = 'hotelnumber' . $temp;
					echo $str ;
					echo "<input type='hidden' value='$str' id='str' name='str' />";
					echo '<input type="submit" value=\'Book hotel!\' name="'. $str . '" class="btn success" style = "background-color: #b41515; float: right;" onclick ="'.name($hotel_name,$str,$to).'\" >Book Hotel!';
					echo '<br/><hr>';
					$temp += 1;
					echo '</form>';

			}
		}

		echo '</div>';
		function name($hotel_name1,$str1,$to) {
			if (isset($_POST["$str1"])) {
			$str0 = "hotelconfirm.php?name=" . $hotel_name1."&to=".$to;
			echo $str0;
			echo '<script> window.location.href="'.$str0.'";</script>';
			exit;

		}
			

			

		}
		?>
	</div>
</div>