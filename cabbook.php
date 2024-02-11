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
	echo '<h1>Cab Services&nbsp; around &nbsp;' . $to . ' Airport' . '<br></h1>';
?>


<script>
    document.body.style.backgroundImage = "url('./vendor/img/refs/cab.jpg')";
    document.body.style.backgroundSize = "100%";
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundAttachment = "fixed";
    document.body.style.backgroundPosition = "center";
    document.getElementById("menu").style.display = "none";
</script>

<legend style = "opacity: 0.9;">Book Cabs!</legend>
<div class=" w3-animate-bottom w3-display-middle">
	<div style="top: 50px;  position: fixed; align: center; width: 100%">

		<?php
		$str0 ="";
		// $to="";
		if(isset($_SESSION['to_city'])) {
			$to = $_SESSION['to_city'];
		}
		echo '<form action = "cabconfirm.php" method = "POST">';
		$query = "SELECT * FROM `cabs` WHERE `cab_city` = '$to'";
		$result = mysql_query($query);
        $count = 1;
		if ($result) {
			$temp = 0;
			while ($row = mysql_fetch_assoc($result)) {
                    $vehicle = $row['vehicle'];
                    $vehicle_capacity = $row['vehicle_capacity'];
					$cab_owner_name = $row['cab_owner_name'];
					$cab_review = $row['cab_review'];
					$price = $row['price'];
					$cab_rating = $row['cab_rating'];
                    $cab_details = $row['cab_details'];
                    
					
                    echo '<div class = "well" style = "width: 30%; float: left; margin-right: 38px; margin-bottom: 38px;"><h2>' . $row['vehicle'] . '<br><br></h2>';
					echo '<img src = "./vendor/img/refs/cabs/' . $count . '.jpg" style = "width: 100%; height: 35%;">';
                    echo '<br><br>Passenger Count: ' . $vehicle_capacity . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>';
                    echo 'Cab Driver Name: '.$cab_owner_name . '<br>';
					echo 'Cab Review: ' . $cab_review . "<br>";
					echo 'Price: ' . $price . ' per Kilometer' . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>';
					echo 'Rating: ' . $cab_rating . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . '<br>';
                    echo 'Cab Details: ' . $cab_details . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>';
                    
					echo '<input type="hidden" name="vehicle" value="' . $vehicle . '">';	
                    echo '<input type="hidden" name="cab_owner_name" value="' . $cab_owner_name . '">';	
                    echo '<input type="hidden" name="price" value="' . $price . '">';	
                    echo '<input type="hidden" name="vehicle_capacity" value="' . $vehicle_capacity . '">';	
					echo '<hr><button type="submit" value="bookcab" name="bookcab" class="btn btn-success" style = "background-color: #b41515; ">Book cab!</button>';
					echo '<br/></div>';
                    $count += 1;

			}
        }

        			

        
        echo '</form>';

		echo '</div>';
		function name($hotel_name1,$str1,$to) {
			if (isset($_POST["$str1"])) {
			$str0 = "hotelconfirm.php?name=" . $hotel_name1."&to=".$to;
			echo $str0;
			echo '<script> window.location.href="'.$str0.'";</script>';
			exit;

		}
			
        echo '<hr><button type="submit" value="cancel" name="cancel" class="btn btn-success" style = "background-color: #b41515; ">Skip booking cabs</button>';
		
			

		}
		?>
	</div>
</div>