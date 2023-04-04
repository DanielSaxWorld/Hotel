<?php
	require('db_conn.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['phone'])){

		$phone = stripslashes($_REQUEST['phone']); // removes backslashes
		$phone = mysqli_real_escape_string($conn,$phone); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);



	//Checking is user existing in the database or not
	$query = "SELECT * FROM `staff_id` WHERE phone='$phone' AND password=PASSWORD('$password') AND designation='MainStore'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['phone'] = $phone;
			echo '<script type="text/javascript"> window.open("../app/mainstore.php","_self");</script>'; // Redirect user to index.php
            }{
    echo "<script>alert('Invalid Login Credentials ')
	location.href='index.php'</script>";
   }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Main Store Login | Imperial Boni Hotels & Resorts</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" href="images/favicon.fw.png">
<!--===============================================================================================-->
</head>
<body background="images/back1.jpg">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				<a href="../"><img src="images/img-01.png" alt="IMG" title="Go Back Home"></a>
				</div>

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
					Main Store Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Phone No is required">
						<input class="input100" type="text" name="phone" placeholder="Phone No">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<!--<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>-->
					</div>

					<div class="text-center p-t-136">
						<!--<a class="txt2" href="../register/">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>-->
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>