<?php
 ini_set('display_errors', '1');
 require 'includes/PHPMailer.php';
 require 'includes/SMTP.php';
 require 'includes/Exception.php';
 //Define name spaces
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
session_start();
include('db_conn2.php');


$booking_id=$_SESSION['booking_id'];
$fullname=$_SESSION['fullname'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$noofguest=$_SESSION['noofguest'];
$checkin_date=$_SESSION['checkin_date'];
$checkout_date=$_SESSION['checkout_date'];
$room_name=$_SESSION['room_name'];
$room_price=$_SESSION['room_price'];
$room_id=$_SESSION['room_id'];
$amountpayable=$_SESSION['amountpayable'];
$nights=$_SESSION['nights'];
?>
<!doctype html>
<html lang="zxx">
    <head>
       <!-- Required meta tags -->
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   <meta name="keywords" content="Imeprial Boni Hotels & Resorts -  is a hospitality of splendor in an imperial serenity where blends of Eastern & Western are balanced. We offer a friendly, safe and supportive environment that suites your taste with excellent facilities." />
<meta name="author" content="Wetin Dey Code Academy">

	<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://imperialbonihotel.com">
<meta property="og:title" content="Checkout || Imeprial Boni Hotels & Resorts">
<meta property="og:description" content="...Majestic Splendor">
<meta property="og:image" content="https://imperialbonihotel.com/icon.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://imperialbonihotel.com">
<meta property="twitter:title" content="Checkout || Imeprial Boni Hotels & Resorts">
<meta name="twitter:site" content="@imperialbonihotel" />
<meta property="twitter:description" content="...Majestic Splendor">
<meta property="twitter:image" content="https://imperialbonihotel.com/icon.png">

	   	<!-- Bootstrap Min CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Owl Theme Default Min CSS -->
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<!-- Owl Carousel Min CSS -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<!-- Boxicons Min CSS -->
		<link rel="stylesheet" href="assets/css/boxicons.min.css">
		<!-- Flaticon CSS -->
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="assets/css/meanmenu.min.css">
		<!-- Animate Min CSS -->
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<!-- Nice Select Min CSS -->
		<link rel="stylesheet" href="assets/css/nice-select.min.css">
		<!-- Odometer Min CSS -->
		<link rel="stylesheet" href="assets/css/odometer.min.css">
		<!-- Date Picker CSS-->
		<link rel="stylesheet" href="assets/css/date-picker.min.css">
		<!-- Magnific Popup Min CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
		<!-- Beautiful Fonts CSS -->
		<link rel="stylesheet" href="assets/css/beautiful-fonts.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- Dark CSS -->
		<link rel="stylesheet" href="assets/css/dark.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">

	   <!-- Favicon -->
	   <link rel="icon" type="image/png" href="assets/img/favicon.png">

	   <!-- TITLE -->
	   <title>Checkout || Imperial Boni Hotels & Resorts</title>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- End Preloader Area -->

		<!-- Start Imperial Boni Hotels & Resorts Navbar Area -->
		<?php include('header.php'); ?>
		<!-- End Imperial Boni Hotels & Resorts Navbar Area -->

		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Checkout</h2>
					<ul>
						<li>
							<a href="index.php">
								Home
							</a>
						</li>
						<li>Room</li>
						<li>Checkout</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Checkout Area -->
		<section class="checkout-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="user-actions">
							<i class='bx bx-log-in-circle'></i>
							<span>Welcome Back <a href="#"><?php echo $fullname; ?></a></span>
						</div>
					</div>
				</div>

					<div class="row">

						<div class="col-lg-12 col-md-12">
							<div class="order-details">
								<div class="order-table table-responsive">
									<h3 class="title" align="center">Your Order</h3>
									<table class="table table-bordered">
<form method="POST">
<?php
if(isset($_REQUEST['submit'])){
$check =$_REQUEST['check'];

$sql="UPDATE booking SET status='$check' WHERE booking_id='$_SESSION[booking_id]'";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
    $num=mysqli_insert_id($conn);
                        if(mysqli_affected_rows($conn)!=1){
                            $message= "Error inserting the application information.";
                            }

//Create instance of PHPMailer
$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "mail.imperialbonihotel.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "booking@imperialbonihotel.com";
//Set gmail password
	$mail->Password = "boni@2022";
//Email subject
	$mail->Subject = "Room Booking (Imperial Boni Hotel)";
//Set sender email
	$mail->setFrom('booking@imperialbonihotel.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment

//Email body
	$mail->Body = "<style>

        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Roboto', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color: #8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
    </style>

    <center style='width: 100%; background-color: #f5f6fa;'>
        <table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f5f6fa'>
            <tr>
               <td style='padding: 40px 0;'>
                    <table style='width:100%;max-width:620px;margin:0 auto;'>
                        <tbody>
                            <tr>
                                <td style='text-align: center; padding-bottom:25px'>
                                    <a href='#'><img style='height: 100px' src='https://imperialbonihotel.com/logo.png' alt='logo'></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
                        <tbody align='center'>
                            <tr>
                                <td style='padding: 30px 30px 15px 30px;'>
                                    <h2 style='font-size: 18px; color: #F3C42B; font-weight: 600; margin: 0;'>New Room Booking  ($booking_id) </h2>
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 30px 20px;'>

									<p style='margin-bottom: 10px;'><b>Dear $fullname, your room booking at Imeprial Boni Hotels & Resorts has the following details </b></p>
									<p style='margin-bottom: 10px;'>Booking ID: <b>$booking_id</b></p>
									<p style='margin-bottom: 10px;'>Email Address: <b>$email</b></p>
									<p style='margin-bottom: 10px;'>Phone No: <b>$phone</b></p>
									<p style='margin-bottom: 10px;'>No of Guest: <b>$noofguest</b></p>
									<p style='margin-bottom: 10px;'>Check-in Date: <b>$checkin_date</b></p>
									<p style='margin-bottom: 10px;'>Check-out Date: <b>$checkout_date</b></p>
									<p style='margin-bottom: 10px;'>Room Name: <b>$room_name</b></p>
									<p style='margin-bottom: 10px;'>Room Price: <b>&#8358;". number_format($room_price, 2)."</b></p>
									<p style='margin-bottom: 10px;'>No of Night(s): <b>$nights</b></p>
									<p style='margin-bottom: 10px;'>Amount Payable: <b>&#8358;". number_format($amountpayable, 2)."</b></p>



                                    <p style='margin-bottom: 10px;'><em>Our Guest Relation Manager with contact you shortly!</em><br><br>




                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <table style='width:100%;max-width:620px;margin:0 auto;'>
                        <tbody>
                            <tr>
                                <td style='text-align: center; padding:25px 20px 0;'>
                                    <p style='font-size: 13px;'>Copyright © 2021 <strong>Imperial Boni Hotels & Resorts</strong>. All rights reserved. <br> </p>

                                    <p style='padding-top: 15px; font-size: 12px;'><a style='color: #F3C42B; text-decoration:none;' href='#'><strong>Imperial Boni Hotels & Resorts Portal</strong></a></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </td>
            </tr>
        </table>
    </center>";
//Add recipient
	$mail->addAddress("$email");
//Finally send email
	if ( $mail->send() ) {
echo "<script>alert('Hey $fullname, your Booking was successful, Please check your email for details!')
location.href='index.php'</script>";

}

}


?>


										<tbody>
											<tr>
												<td class="product-name" style="text-align:right;">Booking ID</td>
												<td class="product-name"><?php echo $booking_id; ?></td>
											</tr>
											<tr>
												<td class="product-name" style="text-align:right;">Fullname</td>
												<td class="product-name"><?php echo $fullname; ?></td>
											</tr>
											<tr>
												<td class="product-name" style="text-align:right;">Email</td>
												<td class="product-name"><?php echo $email; ?></td>
											</tr>
											<tr>
												<td class="product-name" style="text-align:right;">Phone No</td>
												<td class="product-name"><?php echo $phone; ?></td>
											</tr>
											<tr>
												<td class="product-name" style="text-align:right;">No of Guest</td>
												<td class="product-name"><?php echo $noofguest; ?></td>
											</tr>
											<tr>
												<td class="product-name" style="text-align:right;">Check-in Date</td>
												<td class="product-name"><?php echo $checkin_date; ?></td>
											</tr>
											<tr>
												<td class="product-name" style="text-align:right;">Check-out Date</td>
												<td class="product-name"><?php echo $checkout_date; ?></td>
											</tr>
											<tr>
												<td class="product-name" style="text-align:right;">Room Name</td>
												<td class="product-name"><?php echo $room_name; ?></td>
											</tr>
											<tr>
												<td class="product-name" style="text-align:right;">Room Price</td>
												<td class="product-name">&#8358;<?php echo number_format($room_price, 2); ?></td>
											</tr>
											<tr>
												<td class="product-name" style="text-align:right;">No of Night(s)</td>
												<td class="product-name"><?php echo $nights; ?></td>
											</tr>

											<tr>
												<td class="total-price" style="text-align:right;">
													<span>Booking Total</span>
												</td>

												<td class="product-subtotal">
													<span class="subtotal-amount">&#8358;<?php echo number_format($amountpayable, 2); ?></span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="payment-box">
									<div class="payment-method">
										<p>
											<input type="radio" id="direct-bank-transfer" name="radio-group" checked>
											<label for="direct-bank-transfer">Pay with cash upon arrival.

</label>

Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">privacy policy</a>.


<div class="modal fade" id="staticBackdrop">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Privacy Policy</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <p>Rate are inclusive of 7.5% value added tax and 10% service charge</p>
										<p>An additional 50% on room rate will be charged for late check-out from 12:00pm and before 6:00pm</p>
										<p>10% credit charge shall be added to no-cash paying guest</p>
										<p>For group and long stay, please contact our hotel manager or guest relation manager.</p>
										<h5 class="modal-title">Children Policy</h5>
										<p>There is no charge for 2 children under the age of 12 years when sharing accommodation with parents</p>
<p>Rates are subject to change without prior notice</p>

                                    </div>


                                </div>
                            </div>
                        </div>

										</p>

									</div>
<input type="checkbox" name="check" value="Checked" required> I have read and agree to the website terms and conditions *
									<button class="default-btn" align="center" type="submit" name="submit" onclick="return confirm('Are you sure to complete Booking?')">
										Complete Order
										<i class="flaticon-right"></i></button>
									</a>
									</form>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- End Checkout Area -->

		<!-- Start Footer Area -->
		<?php include('footer.php'); ?>
		<!-- End Footer Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up bx-fade-up"></i>
		</div>
		<!-- End Go Top Area -->


        <!-- Jquery Min JS -->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu Min JS -->
		<script src="assets/js/meanmenu.min.js"></script>
		<!-- Owl Carousel Min JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Wow Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Nice Select Min JS -->
		<script src="assets/js/nice-select.min.js"></script>
        <!-- Magnific Popup Min JS -->
		<script src="assets/js/magnific-popup.min.js"></script>
		<!-- Mixitup JS -->
		<script src="assets/js/jquery.mixitup.min.js"></script>
		<!-- Appear Min JS -->
		<script src="assets/js/appear.min.js"></script>
		<!-- Odometer Min JS -->
		<script src="assets/js/odometer.min.js"></script>
		<!-- Datepicker Min JS -->
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<!-- Ofi Min JS -->
		<script src="assets/js/ofi.min.js"></script>
		<!-- jarallax Min JS -->
		<script src="assets/js/jarallax.min.js"></script>
		<!-- Form Validator Min JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact-form-script.js"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="assets/js/ajaxchimp.min.js"></script>
        <!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
		<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+2349059659790", // WhatsApp number
            call_to_action: "Sent us a Message", // Call to action
            button_color: "#F3C42B", // Color of button
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
    </body>
</html>