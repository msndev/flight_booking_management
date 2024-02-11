<?php
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/core/init.php';
include $_SERVER["DOCUMENT_ROOT"] . '/IWP_project/includes/overall/header.php';
?>

<script>
    document.body.style.backgroundImage = "url('./vendor/img/refs/<?php
                                                                    mysql_data_seek($result, 17);
                                                                    $row = mysql_fetch_row($result);
                                                                    echo $row[3];
                                                                    ?>')";
    document.body.style.backgroundSize = "100%";
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundAttachment = "fixed";
    document.body.style.backgroundPosition = "center";
    document.getElementById("menu").style.display = "none";
</script>

<div class="w3-container w3-animate-bottom w3-display-middle">


    <form class="form-horizontal" style="position: fixed; width: 100%; align: center" method="POST">
        <div class="row">
            <div class="col-lg-4">
                <div class="well bs-component" style="top: 35%; background-color: black; opacity: 0.7;left: 85%; width: 150%; 
                                            height: 50%; right: 20%">
                    <legend>Passenger Sign up</legend>
                    <div class="form-group">
                        <label for="inputFname" class="col-lg-2 control-label" style="width: 30%; text-align: left; margin-left: 20px;">First Name</label>
                        <div class="col-lg-12">
                            <input type="text" name="f_fname" id="f_fname" class="form-control" placeholder="Ex. Jungkook">
                            <div id="f_fname_error" style="color: red">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLname" class="col-lg-2 control-label" style="width: 30%; text-align: left; margin-left: 20px;">Last Name</label>
                        <div class="col-lg-12">
                            <input type="text" name="f_lname" id="f_lname" class="form-control" placeholder="Ex. Jeon">
                            <div id="f_lname_error" style="color: red">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputUname" class="col-lg-2 control-label" style="width: 30%; text-align: left; margin-left: 20px;">UserName</label>
                        <div class="col-lg-12">
                            <input type="text" name="f_uname" id="f_uname" class="form-control" placeholder="Ex. jungkook">
                            <div id="f_uname_error" style="color: red">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label" style="width: 30%; text-align: left; margin-left: 20px;">Email ID</label>
                        <div class="col-lg-12">
                            <input type="text" name="f_mailid" id="f_mailid" class="form-control" placeholder="Ex. jungkook123@gmail.com">
                            <div id="f_mailid_error" style="color: red">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label" style="width: 30%; text-align: left; margin-left: 20px;">Password</label>
                        <div class="col-lg-12">
                            <input type="password" name="f_password" id="f_password" class="form-control" placeholder="Password">
                            <div id="f_password_error" style="color: red">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputRetypePassword" class="col-lg-2 control-label" style="width: 30%; text-align: left; margin-left: 20px;">Retype Password</label>
                        <div class="col-lg-12">
                            <input type="password" name="f_retype_password" id="f_retype_password" class="form-control" placeholder="Retype Password">
                            <div id="f_retype_password_error" style="color: red">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="f_phone" class="col-lg-2 control-label" style="width: 30%; text-align: left; margin-left: 20px;">Phone Number</label>
                        <div class="col-lg-12">
                            <input type="text" name="f_uname" id="f_phone" class="form-control" placeholder="Ex. 9876543210">
                            <div id="f_phone_error" style="color: red">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">

                        <label for="gender" class="col-lg-2 control-label" style="width: 50%; text-align: left; margin-left: 20px;">Gender</label>
                        <div class="col-lg-12">
                            <div class="radioval" id="f_sex_value" style=" margin-left: 10%">
                                <label>
                                    <input type="radio" id="f_sex" name="f_sex" value="Male">
                                    Male
                                </label>&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="radio" id="f_sex" name="f_sex" value="Female">
                                    Female
                                </label>&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="radio" id="f_sex" name="f_sex" checked value="Others">
                                    Others
                                </label>
                            </div>
                        </div>
                        <div id="f_sex_error" style="color: red">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress" class="col-lg-2 control-label" style="width: 30%; text-align: left; margin-left: 20px;">Address</label>
                        <div class="col-lg-12">
                            <textarea id = "f_address" name="f_address" class="form-control" placeholder="Ex. Beach Blue Appts, New York"></textarea>
                        </div>
                        <br>
                        <div id="f_address_error" style="color: red">
                        </div>
                    </div>
                    </br>
                    </br>

                    <div class="form-group">
                        <center>
                            <button type="button" id="submit" value="submit" name="submit" class="btn btn-success" style="background-color: rgb(207, 1, 6); border: rgb(207, 1, 6); opacity: 200%" onclick="validatePage()">Sign Up!</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>

<script>

    function validatePage() {

        var is_valid_flu_name = check_fname_lname_uname_validity();
        var is_valid_phone_number = validate_phone_number();
        var is_valid_mailid = validate_mailid();
        var is_check_password = check_password();
        var is_retype_password = check_retype_password();
        var is_check_address = check_address();
        

        if (is_valid_flu_name && is_valid_phone_number && is_valid_mailid && is_check_password && f_retype_password && is_check_address) {
            alert("SUCCESS!");
            var str = "f_fname=" + f_fname.value + "&f_lname=" + f_lname.value + "&f_uname=" + f_uname.value + "&f_mailid=" + f_mailid.value + 
                "&f_password=" + f_password.value + "&f_phone=" + f_phone.value + "&f_sex=" + f_sex.value + 
                "&f_address=" + f_address.value;
            window.location.href = 'registeract.php' + '?' + str;   
        }
    }

    function validate_phone_number() {
        var error = 0;
        var phoneno = /^[5-9]{1}[0-9]{9}$/;
        if (!f_phone.value.match(phoneno)) {
            error = 1;
        }
        if (error == 1) {
            document.getElementById("f_phone_error").innerHTML = "*Invalid phone number!";
            return 0;
        } else {
            return 1;
        }
    }

    function validate_gender() {
        var x = document.getElementById("f_sex").value;
        // alert(x);
        return 1;
    }

    function check_fname_lname_uname_validity() {
        var error = 0;
        var regex = /^[a-zA-Z]+$/;
        if ((f_fname.value.length > 20) || (f_fname.value.length < 3) || (f_fname.value.match(regex) === false)) {
            document.getElementById("f_fname_error").innerHTML = "*First name should have 3-20 characters without any digit!";
            error = 1;
        }
        if ((f_lname.value.length > 20) || (f_lname.value.length < 3) || (f_lname.value.match(regex) === false)) {
            document.getElementById("f_lname_error").innerHTML = "*Last name should have 3-20 characters without any digit!";
            error = 1;
        }
        if ((f_uname.value.length > 30) || (f_uname.value.length < 3)) {
            document.getElementById("f_uname_error").innerHTML = "*Username should have 3-30 characters!";
            error = 1;
        }
        if (error == 1) {
            return 0;
        } else {
            return 1;
        }
    }

    function validate_mailid() {
        var error = 0;
        var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!f_mailid.value.match(regex)) {
            error = 1;
        }
        if (error == 1) {
            document.getElementById("f_mailid_error").innerHTML = "*Invalid email!";
            return 0;
        } else {
            return 1;
        }
    }

    function check_password() { 
        var regex = /^[A-Za-z]\w{7,14}$/;
        if (f_password.value.match(regex)) { 
            return 1;
        }
        else { 
            document.getElementById("f_password_error").innerHTML = "*Invalid Password!";
            return 0;
        }
    }

    function check_retype_password() {
        var is_valid_password = check_password();
        if ((is_valid_password) && (f_password.value == f_retype_password.value)) {
            return 1;
        } else {
            document.getElementById("f_retype_password_error").innerHTML = "*Passwords not matching!";
            return 0;
        }
    }

    function check_address() {  
        if ((f_address.value.length > 20) || (f_address.value.length <=3)) {
            document.getElementById("f_address_error").innerHTML = "&nbsp;&nbsp;&nbsp;*Enter a valid city";
            return 0;
        } 
        else {
            return 1;
        }
    }


</script>
</body>

</html>