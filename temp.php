<?php 
    include $_SERVER["DOCUMENT_ROOT"].'/IWP_project/core/init.php';
    include $_SERVER["DOCUMENT_ROOT"].'/IWP_project/includes/overall/header.php';

    echo '<center>';
    echo "<div class = \"w3-container w3-animate-bottom w3-display-middle\">";
    echo "<div class = \"bs-component\" style = \"opacity: 0.8; top: 50px;  left: 2%; height: 60; position: fixed; right: 20%\">"; 
    echo "<form class=\"form-horizontal well\" action=\"\" style = \"top: 55%; background-color: black; width: 130%; \" method=\"POST\">";								
    echo "<img src = \"vendor/img/refs/successful.jpg\" style = \"width:10%\" height = \"20%\">";
    echo '<h2>SUCCESS!</h2>';
    echo 'Successfully made a payment';
    echo 'of Rs. ' . $etotr;

    // header('refresh: 5, url=main.php');
    echo 'Do you wish to proceed to book Hotels?<br><br><br><br><br>';
    echo "<button type = \"submit\" id = \"yes\" name = \"yes\" class = \"btn btn-success\">Yes, continue to Book Hotels</button>&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<button type = \"submit\" id = \"no\" name = \"no\" class = \"btn btn-success\">No, return to the main page</button>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>";
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</center>';

?>
