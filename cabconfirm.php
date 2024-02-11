<?php
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/core/init.php';
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/includes/overall/header.php';


    $uid = $f_data['f_id'];
    
    $query1 = "SELECT `p_artime` FROM `passenger_details` WHERE `p_fid` = '$uid'";
    $result = mysql_query($query1);
    
    $vehicle = $_POST['vehicle'];
    $cab_owner_name = $_POST['cab_owner_name'];
    $price = $_POST['price'];
    $vehicle_capacity = $_POST['vehicle_capacity'];

    $query = "INSERT INTO `cab_bookings` (`f_id`, `vehicle`, `cab_owner_name`, `pickup_time`, `vehicle_capacity`, `price`) VALUES ('$uid', '$vehicle', '$cab_owner_name', '17:00', '$vehicle_capacity', '$price')";
    $result = mysql_query($query);

    
    if($result) {
        // header('refresh: 3, url=main.php');
        echo '<center>';
        echo "<div class = \"w3-container w3-animate-bottom w3-display-middle\">";
        echo "<div class = \"bs-component\" style = \"opacity: 0.9; top: 50px;  left: 2%; height: 60; position: fixed; right: 20%\">"; 
        echo "<div class=\"form-horizontal well\"  style = \"top: 55%; background-color: black; width: 130%; \">";								
        echo "<img src = \"vendor/img/refs/successful.jpg\" style = \"width:10%\" height = \"20%\">";
        echo '<h2>SUCCESS!</h2>';
        echo 'Successfully made a payment for the Cab ' .$vehicle . '<br>';
        echo '<br>Redirecting to the main page!';
        header('refresh: 5, url=main.php'); 
        echo '</div>';
        echo '</center>';

    }