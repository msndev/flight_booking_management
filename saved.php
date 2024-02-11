<?php
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/core/init.php';
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/includes/overall/header.php';


    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $rooms = $_POST['rooms'];
    $hotel_name = $_POST['hotel_name']; 
    $f_id = $_SESSION['f_id'];
    $rooms = $_POST['rooms'];
    //echo $checkin;
    $query = "INSERT INTO `hotel_bookings` (`f_id`, `hotel_name`, `checkin`, `checkout`, `rooms`) VALUES ('$f_id', '$hotel_name', '$checkin', '$checkout', '$rooms')";
    $result = mysql_query($query);
    if($result) {
        // header('refresh: 3, url=main.php');
        echo '<center>';
        echo "<div class = \"w3-container w3-animate-bottom w3-display-middle\">";
        echo "<div class = \"bs-component\" style = \"opacity: 0.9; top: 50px;  left: 2%; height: 60; position: fixed; right: 20%\">"; 
        echo "<div class=\"form-horizontal well\"  style = \"top: 55%; background-color: black; width: 130%; \">";								
        echo "<img src = \"vendor/img/refs/successful.jpg\" style = \"width:10%\" height = \"20%\">";
        echo '<h2>SUCCESS!</h2>';
        echo 'Successfully made a payment for Hotel' .$hotel_name . '!<br>';
        echo '<br><br>Do you wish to proceed to book Cabs?<br><br><br><br><br>';
        echo "<button type = \"submit\" id = \"yes\" name = \"yes\" class = \"btn success\" onclick =\"location.href = 'cabbook.php';\">Yes, continue to Book Cabs!</button>&nbsp;&nbsp;&nbsp;&nbsp;";
        echo '<button type = "submit" id = "no" style = "opacity: 2;" name = "no" class = "btn btn-success" onclick ="location.href = \'main.php\';" >Nah, I\'m cool :)</button>';
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</center>';

    }
?>