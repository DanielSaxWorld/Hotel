<?php
// ini_set('display_errors', '1');
// 	require 'includes/PHPMailer.php';
// 	require 'includes/SMTP.php';
// 	require 'includes/Exception.php';
// //Define name spaces
// 	use PHPMailer\PHPMailer\PHPMailer;
// 	use PHPMailer\PHPMailer\SMTP;
// 	use PHPMailer\PHPMailer\Exception;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Super Admin Register | Imperial Boni Hotels & Resorts</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" href="images/favicon.fw.png">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url(images/bg.jpg);"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data">
                 <?php
include("db_conn.php");


$rand = rand(0000,9999);
		$today = date("dmy");
		$time = date("His");
		$ID = "IMHR".$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$staff_id=trim(addslashes($_REQUEST['staff_id']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$email=trim(addslashes($_REQUEST['email']));
		$phone=trim(addslashes($_REQUEST['phone']));
		$password2=trim(addslashes($_REQUEST['password']));
		$station=trim(addslashes($_REQUEST['station']));
		$designation=trim(addslashes($_REQUEST['designation']));
		$business_name=trim(addslashes($_REQUEST['business_name']));
		$business_phone=trim(addslashes($_REQUEST['business_phone']));
		$business_address=trim(addslashes($_REQUEST['business_address']));

		$passport = $_FILES["data"]['name'];
		$target="../app/staff/";
		$target=$target.$_FILES["data"]['name'];




		/*	  $yyy = $_FILES['data']['name'];
			  $_SESSION['pic']=$yyy;*/

if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){

		  //Check for duplicate record in database before inserting New Record
		  $check=mysqli_query($conn, "SELECT * FROM staff_id WHERE fullname='$fullname' AND phone='$phone' AND email='$email'");
		  $checkrows=mysqli_num_rows($check);

		 if($checkrows>0) {
		  echo "<script>alert('User Already Exist in our Database')
		  location.href='index.php'</script>";
		 } else {


$sql="INSERT INTO staff_id (staff_id, fullname, email, phone, password, station, designation, business_name, business_phone, business_address, passport) VALUES ('$staff_id','$fullname','$email','$phone',PASSWORD('$password2'),'$station','$designation','$business_name','$business_phone','$business_address','$passport')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
// //Create instance of PHPMailer
// $mail = new PHPMailer();
// //Set mailer to use smtp
// 	$mail->isSMTP();
// //Define smtp host
// 	$mail->Host = "mail.imperialbonihotel.com";
// //Enable smtp authentication
// 	$mail->SMTPAuth = true;
// //Set smtp encryption type (ssl/tls)
// 	$mail->SMTPSecure = "tls";
// //Port to connect smtp
// 	$mail->Port = "587";
// //Set gmail username
// 	$mail->Username = "imperialbonihotel@imperialbonihotel.com";
// //Set gmail password
// 	$mail->Password = "boni@2022";
// //Email subject
// 	$mail->Subject = "Login Account Creation";
// //Set sender email
// 	$mail->setFrom('ImperialBoniHotel@imperialbonihotel.com');
// //Enable HTML
// 	$mail->isHTML(true);
// //Attachment

// //Email body
// 	$mail->Body = "<style>

//         html,
//         body {
//             margin: 0 auto !important;
//             padding: 0 !important;
//             height: 100% !important;
//             width: 100% !important;
//             font-family: 'Roboto', sans-serif !important;
//             font-size: 14px;
//             margin-bottom: 10px;
//             line-height: 24px;
//             color: #8094ae;
//             font-weight: 400;
//         }
//         * {
//             -ms-text-size-adjust: 100%;
//             -webkit-text-size-adjust: 100%;
//             margin: 0;
//             padding: 0;
//         }
//         table,
//         td {
//             mso-table-lspace: 0pt !important;
//             mso-table-rspace: 0pt !important;
//         }
//         table {
//             border-spacing: 0 !important;
//             border-collapse: collapse !important;
//             table-layout: fixed !important;
//             margin: 0 auto !important;
//         }
//         table table table {
//             table-layout: auto;
//         }
//         a {
//             text-decoration: none;
//         }
//         img {
//             -ms-interpolation-mode:bicubic;
//         }
//     </style>

//     <center style='width: 100%; background-color: #f5f6fa;'>
//         <table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f5f6fa'>
//             <tr>
//                <td style='padding: 40px 0;'>
//                     <table style='width:100%;max-width:620px;margin:0 auto;'>
//                         <tbody>
//                             <tr>
//                                 <td style='text-align: center; padding-bottom:25px'>
//                                     <a href='#'><img style='height: 100px' src='https://imperialbonihotel.com/logo.png' alt='logo'></a>
//                                 </td>
//                             </tr>
//                         </tbody>
//                     </table>
//                     <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
//                         <tbody align='center'>
//                             <tr>
//                                 <td style='padding: 30px 30px 15px 30px;'>
//                                     <h2 style='font-size: 18px; color: #F3C42B; font-weight: 600; margin: 0;'>Imperial Boni Hotels & Resorts Login Account Creation </h2>
//                                 </td>
//                             </tr>
//                             <tr>
//                                 <td style='padding: 0 30px 20px;'>

// 									<p style='margin-bottom: 10px;'><b>Dear $fullname,</b></p>




// 									<p style='margin-bottom: 10px;'>Your registration on Imperial Boni Hotels & Resorts Portal as a $designation was successful.</p>

// 									<p style='margin-bottom: 10px;'> Your Login Details are shown below:</p>


// 									<p style='margin-bottom: 10px;'><b>Email: $email</b></p>

// 									<p style='margin-bottom: 10px;'><b>Password: $password2</b></p>



//                                     <p style='margin-bottom: 10px;'><em>Please don't share this detail with anyone.</em><br><br>




//                                 </td>
//                             </tr>

//                         </tbody>
//                     </table>
//                     <table style='width:100%;max-width:620px;margin:0 auto;'>
//                         <tbody>
//                             <tr>
//                                 <td style='text-align: center; padding:25px 20px 0;'>
//                                     <p style='font-size: 13px;'>Copyright © 2021 <strong>Imperial Boni Hotels & Resorts</strong>. All rights reserved. <br> </p>

//                                     <p style='padding-top: 15px; font-size: 12px;'>This email was sent to you as a registered $designation on <a style='color: #F3C42B; text-decoration:none;' href='#'><strong>Imperial Boni Hotels & Resorts Portal</strong></a>.</p>
//                                 </td>
//                             </tr>
//                         </tbody>
//                     </table>
//                </td>
//             </tr>
//         </table>
//     </center>";
// //Add recipient
// 	$mail->addAddress("$email");
// //Finally send email
// 	if ( $mail->send() ) {
	    echo "<script>alert('$fullname SUPER ADMIN Successfully Created')
location.href='../super/'</script>";

	//}

}
}
	mysqli_close($conn);
	}


?>
					<span class="login100-form-title p-b-59">
						<img src="images/img-01.png" height="100"> Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Staff ID is required">
						<span class="label-input100">Staff ID</span>
						<input class="input100" name="staff_id" value="<?php echo $ID; ?>" readonly>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Fullname is required">
						<span class="label-input100">Fullname</span>
						<input class="input100" type="text" name="fullname" placeholder="Enter Fullname...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Phone No is required">
						<span class="label-input100">Phone No</span>
						<input class="input100" type="text" name="phone" placeholder="080744.....">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Choose Password">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Select Station">
						<span class="label-input100">Location</span>
						<select class="input100" name="station">
                   		<option value="Akure">Akure</option>
                        </select>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Business Name Required">
						<span class="label-input100">Business Name</span>
						<input class="input100" type="text" value="Imperial Boni Hotels & Resorts" readonly name="business_name" placeholder="Enter Business Name">
						<span class="focus-input100"></span>
					</div>

						<input  type="hidden" value="+2349059659790" readonly name="business_phone" placeholder="Enter Business Phone No">

						<input  type="hidden" value="Block 39, Plot 557, Ikere Street, Ijapo Estate, Akure, Ondo State - Nigeria" readonly name="business_address" placeholder="Enter Business Address">


 		<div class="wrap-input100 validate-input" data-validate = "Select Station">
						<span class="label-input100">Designation</span>
						<select class="input100" name="designation">
                   		<option value="Super Admin">Super Admin</option>
                        </select>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Upload a Passport">
						<span class="label-input100">Passport</span>
						<input class="input100" type="file" onChange="readURL(this);" name="data"  accept=".jpg,.jpeg,.png,.PNG,.JPG,.JPEG.ico">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<style>
img{
max-width:80px; max-height:80px;
}
input[type=file]{
padding:10px;}
</style>

<script>
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result);
};

reader.readAsDataURL(input.files[0]);
}
}
</script>

<img id="blah" class="img-circle" />
					</div>



					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>


					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>


							<button name="submit" class="login100-form-btn">
                            Register
                            </button>

						</div>

						<a href="../super/" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>