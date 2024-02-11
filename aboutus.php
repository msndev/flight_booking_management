<?php
include $_SERVER["DOCUMENT_ROOT"] . "./IWP_project/core/init.php";
include $_SERVER["DOCUMENT_ROOT"] . "./IWP_project/includes/overall/header.php";
?>
<div class=" w3-animate-bottom w3-display-middle">
    <div class="bs-component" style="top: 50px;  opacity: 0.85;  
									height: 60; position: fixed; ">
        <div class="well" style="text-align: justify;">
            <h3 align="center">About us - Background and History</h3><br>

            <div style="color: rgb(180, 180, 180);">
                <h6>FlyHigh is a joint venture of Tata Sons Limited and Singapore Airlines Limited (SIA), wherein Tata Sons holds 51% stake in partnership and
                    Singapore Airlines owns 49% stake. The company is registered as TATA SIA Airlines Limited.</h6>
                <h6>In 2013, two legendary brands, Tata Sons and Singapore Airlines, decided to fulfil a long-cherished shared dream to bring forth a distinguished
                    flying experience to air travellers in India. With its strong historical ties with aviation, the Tata group had long wished to re-enter the
                    aviation sector, after Tata Airlines was renamed Air India and eventually, nationalised. Both, the Tata group and Singapore Airlines were also
                    firm believers in the growth potential of the Indian aviation sector and hence tried to enter the market in the past; first, in 1994 by setting
                    up a joint venture to start an airline in India and then in 2000, teaming up to purchase stakes in Air India. However, after the lifting of
                    foreign investment restrictions in 2012, the partners once again sought approval for a tie-up, which it obtained in October 2013. On November 5,
                    2013, FlyHigh’s holding company, TATA SIA Airlines Limited, was incorporated.</h6><br>


                <img src="./vendor/img/refs/<?php
                                            mysql_data_seek($result, 1);
                                            $row = mysql_fetch_row($result);
                                            echo $row[3];
                                            ?>" width="100%" style="text-align: right;">

                <br><br>
                <h6>The common goal of the joint venture is to redefine air travel in India to provide Indian travellers a seamless and personalized
                    flying experience that blends Tata’s and SIA’s service excellence and legendary hospitality. The brand name ‘FlyHigh’ is derived from the
                    Sanskrit word ‘Vistaar’ that means ‘a limitless expanse’. The name FlyHigh draws inspiration from the world that FlyHigh inhabits, viz. the
                    ‘limitless’ sky. The brand also draws stimulus from the image that passengers most associate with a smooth and enjoyable flight – the endless,
                    blue horizon they see through the windows of an aircraft. As it aims to transform the flying experience of travellers in India, FlyHigh christens
                    its brand tagline as ‘fly the new feeling’.</h6>
                <h6>On January 9, 2015, FlyHigh started its operations with a maiden flight from Delhi to Mumbai. In a short span of time, FlyHigh has rapidly
                    expanded its footprint, both in terms of network and service proposition. FlyHigh now serves 26 destinations with over 1200 flights a week with a
                    fleet of 23 Airbus A320 and six Boeing 737-800NG aircraft.The airline connects destinations across the length and breadth of the country, namely,
                    Delhi, Mumbai, Bengaluru, Hyderabad, Chennai, Pune, Ahmedabad, Lucknow, Goa, Varanasi, Guwahati, Bagdogra, Bhubaneswar, Srinagar, Jammu, Kochi,
                    Chandigarh, Kolkata, Port Blair, Amritsar, Leh, Ranchi, Dibrugarh and Raipur. FlyHigh has already flown more than 15 million happy customers.</h6>
            </div>
            <div>
                <span style="width: 40%">
                    <img src="./vendor/img/refs/<?php
                                                mysql_data_seek($result, 8);
                                                $row = mysql_fetch_row($result);
                                                echo $row[3];
                                                ?>" style="width: 50%">
                </span>
                <span>
                    <span>
                        <center>
                            <img src="./vendor/img/refs/<?php
                                                        mysql_data_seek($result, 2);
                                                        $row = mysql_fetch_row($result);
                                                        echo $row[3];
                                                        ?>" style="width: 30%">
                        </center>
                        <img src="./vendor/img/refs/smallairplane.jpg" style="width: 30%">
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>
<br>