<?php
require('db_conn.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['phone'])) {

	$phone = stripslashes($_REQUEST['phone']); // removes backslashes
	$phone = mysqli_real_escape_string($conn, $phone); //escapes special characters in a string
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);




	//Checking is user existing in the database or not
	$query = "SELECT * FROM `staff_id` WHERE phone='$phone' AND password=PASSWORD('$password') AND designation='Super Admin' AND `status`='Active'";
	$result = mysqli_query($conn, $query) or die(mysqli_error());
	$rows = mysqli_num_rows($result);
	if ($rows == 1) {
		$_SESSION['phone'] = $phone;
		echo '<script type="text/javascript"> window.open("dashboard.php","_self");</script>'; // Redirect user to index.php
	} {
		echo "<script>alert('Invalid Login Credentials ')
	location.href='index.php'</script>";
	}
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Login || Imperial Boni Hotels & Resorts</title>
    <meta name="description" content="Imperial Boni Hotels & Resorts Mobile">
    <meta name="keywords" content="Hotels, Resorts, Relaxation, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <img src="assets/img/logo2.png" height="80px" alt=""><br><br>
            <h4>Super Admin Login</h4>
        </div>
        <div class="section mb-5 p-2">

            <form method="POST">
                <div class="card">
                    <div class="card-body pb-1">

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="phone">Phone No</label>
                                <input type="number" autofocus name="phone" class="form-control" id="email1" placeholder="Phone No" required>
                                <i class="clear-input">
                                    <ion-icon name="close-phone"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password1" autocomplete="off" placeholder="Your password" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-links mt-2">
                    <!-- <div>
                        <a href="app-register.html">Register Now</a>
                    </div> -->
                    <div><a href="#" class="text-muted">Forgot Password?</a></div>
                </div>

                <div class="form-button-group  transparent">
                    <button type="submit" name="submit" class="btn btn-warning btn-block btn-lg">Log in</button>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->



    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>


</body>

</html>