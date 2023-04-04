<?php
ini_set('display_errors', '1');
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
?>
<?php
session_start();
include('db_conn.php');
if(isset($_REQUEST['room_id'])){
$sql = "SELECT * FROM room WHERE room_id='$_REQUEST[room_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
}
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
<meta property="og:title" content="Booking || Imeprial Boni Hotels & Resorts">
<meta property="og:description" content="...Majestic Splendor">
<meta property="og:image" content="https://imperialbonihotel.com/icon.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://imperialbonihotel.com">
<meta property="twitter:title" content="Booking || Imeprial Boni Hotels & Resorts">
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
    <title>Book Room || Imperial Boni Hotels & Resorts</title>
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


    <!-- Start Imperial Boni Hotel Navbar Area -->
<?php include('header.php'); ?>
    <!-- End Imperial Boni Hotel Navbar Area -->

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Book Room</h2>
                <ul>
                    <li>
                        <a href="index.php">
								Home
							</a>
                    </li>
                    <li>Book Room</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->



    <!-- Start Book Table Area -->
    <section class="book-table-area-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 p-0">
                    <div class="books-froms-wrap">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="book-from books-froms">
                                    <h3>Book Room</h3>
                                    <form method="post">
                                    <?php
include("db_conn2.php");


$rand = rand(1000,9999);
		$today = date("dmy");
		$time = date("His");
		$ID = "IBHR".$today.$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$booking_id=trim(addslashes($_REQUEST['booking_id']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$email=trim(addslashes($_REQUEST['email']));
		$phone=trim(addslashes($_REQUEST['phone']));
		$noofguest=trim(addslashes($_REQUEST['noofguest']));
		$checkin_date=trim(addslashes($_REQUEST['checkin_date']));
		$checkout_date=trim(addslashes($_REQUEST['checkout_date']));
		$room_name=trim(addslashes($_REQUEST['room_name']));
		$room_price=trim(addslashes($_REQUEST['room_price']));
		$room_id=trim(addslashes($_REQUEST['room_id']));
		$amountpayable=trim(addslashes($_REQUEST['amountpayable']));
		$nights=trim(addslashes($_REQUEST['nights']));

        $_SESSION['booking_id']=$booking_id;
        $_SESSION['fullname']=$fullname;
        $_SESSION['email']=$email;
        $_SESSION['phone']=$phone;
        $_SESSION['noofguest']=$noofguest;
        $_SESSION['checkin_date']=$checkin_date;
        $_SESSION['checkout_date']=$checkout_date;
        $_SESSION['room_name']=$room_name;
        $_SESSION['room_price']=$room_price;
        $_SESSION['room_id']=$room_id;
        $_SESSION['amountpayable']=$amountpayable;
        $_SESSION['nights']=$nights;


		//   //Check for duplicate record in database before inserting New Record
		//   $check=mysqli_query($conn, "SELECT * FROM room WHERE booking_id='$booking_id' AND fullname='$fullname' AND email='$email'");
		//   $checkrows=mysqli_num_rows($check);

		//  if($checkrows>0) {
		//   echo "<script>alert('Booking has already been captured in our Database')
		//   location.href='index.php'</script>";
		//  } else {


$sql="INSERT INTO booking (booking_id, uin, fullname, email, phone, noofguest, checkin_date, checkout_date, room_name, room_price, room_id, total_amount, nights) VALUES ('$booking_id','$booking_id','$fullname','$email','$phone','$noofguest','$checkin_date','$checkout_date','$room_name','$room_price','$room_id','$amountpayable','$nights')";

$sql2="INSERT INTO guest (uin, fullname, email, phone) VALUES ('$booking_id','$fullname','$email','$phone')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

                        $result = mysqli_query($conn, $sql2);

                        if($result){
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
	$mail->Subject = "New Room Booking ($booking_id)";
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
                                    <h2 style='font-size: 18px; color: #F3C42B; font-weight: 600; margin: 0;'>New Room Booking ($booking_id) </h2>
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 30px 20px;'>

									<p style='margin-bottom: 10px;'>Guest Name: <b>$fullname</b></p>
									<p style='margin-bottom: 10px;'>Email Address: <b>$email</b></p>
									<p style='margin-bottom: 10px;'>Phone No: <b>$phone</b></p>
									<p style='margin-bottom: 10px;'>No of Guest: <b>$noofguest</b></p>
									<p style='margin-bottom: 10px;'>Check-in Date: <b>$checkin_date</b></p>
									<p style='margin-bottom: 10px;'>Check-out Date: <b>$checkout_date</b></p>
									<p style='margin-bottom: 10px;'>Room Name: <b>$room_name</b></p>
									<p style='margin-bottom: 10px;'>Room Price: <b>&#8358;". number_format($room_price, 2)."</b></p>
									<p style='margin-bottom: 10px;'>No of Night(s): <b>$nights</b></p>
									<p style='margin-bottom: 10px;'>Amount Payable: <b>&#8358;". number_format($amountpayable, 2)."</b></p>



                                    <p style='margin-bottom: 10px;'><em>Please don't forget to reach out to the guest to re-confirm booking.</em><br><br>




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
	$mail->addAddress("booking@imperialbonihotel.com");
//Finally send email
	if ( $mail->send() ) {
	    echo "<script>alert('Hey $fullname, transfering you to checkout!')
location.href='checkout.php'</script>";

	}
}

}

	mysqli_close($conn);



?>

<input type="hidden" name="booking_id" value="<?php echo $ID; ?>" required placeholder="Your Fullname" class="form-control" >

                                    <div class="form-group">
                                            <div class="select-box">
                                                <i class='bx bx-user'></i>
                                                <input type="text" name="fullname" autofocus required placeholder="Your Fullname" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="select-box">
                                                <i class='bx bx-envelope'></i>
                                                <input type="text" name="email" required placeholder="Email Address" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="select-box">
                                                <i class='bx bx-phone-call'></i>
                                                <input type="tel" name="phone" required placeholder="Your Phone No" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="select-box">
                                                <i class='bx bx-user'></i>
                                                <select class="form-control" name="noofguest" required>
														<option value="">Number of Guest</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
													</select>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
function sum(){
//var nights = parseInt(document.getElementById("nights").value);
var date1 = new Date(document.getElementById("checkin_date").value);
var date2 = new Date(document.getElementById("checkout_date").value);
var room_price = document.getElementById("room_price").value;


// To calculate the time difference of two dates
var Difference_In_Time = date2.getTime() - date1.getTime();


// To calculate the no. of days between two dates
var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

var nights=parseInt(Difference_In_Days);
var totalamount = (room_price*nights).toFixed(2);

document.getElementById("nights").value=nights;
document.getElementById("amountpayable").value=totalamount;
}

</script>

                                        <div class="form-group">
                                            <div class="select-box">
                                                <i class='bx bx-calendar'></i>
                                                <div class="input-group date" >
                                                    <input type="date" name="checkin_date" id="checkin_date" onchange="sum()" class="form-control" placeholder="Check-In Date" required>
                                                    <span class="input-group-addon">
															<i class="glyphicon glyphicon-th"></i>
														</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="select-box">
                                                <i class='bx bx-calendar'></i>
                                                <div class="input-group date" >
                                                    <input type="date" name="checkout_date" id="checkout_date" onchange="sum()" class="form-control" placeholder="Check-Out Date" required>
                                                    <span class="input-group-addon">
															<i class="glyphicon glyphicon-th"></i>
														</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="select-box">
                                                <i class='bx bx-group'></i>
                                                <input type="text" name="nights" id="nights" onkeyup="sum()" required readonly class="form-control" >
                                            </div>
                                        </div>

                                    <div class="form-group">
                                            <div class="select-box">
                                                <i class='bx bx-group'></i>
                                                <input type="text" name="room_name" required readonly class="form-control" value="<?php echo $row['room_name']; ?>">
                                            </div>
                                        </div>

                                                <input type="hidden" name="room_price" id="room_price" onkeyup="sum()" required readonly class="form-control" value="<?php echo $row['price']; ?>">

                                        <div class="form-group">
                                            <div class="select-box">
                                                <i class='bx bx-money'></i>
                                                <input type="text" name="amountpayable" id="amountpayable" onkeyup="sum()" required readonly class="form-control">
                                            </div>
                                        </div>




                                        <button type="submit" name="submit" class="default-btn">
<strong>Submit Booking</strong>
												<i class="flaticon-right"></i>
											</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 p-0">
                    <div class="contact-info-wrap">
                        <div class="contact-info">
                            <h3>Our Contact Info</h3>
                            <p>Please feel free to contact us for any enquiries</p>
                            <ul>
                                <li>
                                    <a href="tel:+800-987-65-43">
                                        <i class='bx bx-phone-call'></i> +234 905 965 9790
                                    </a>
                                </li>

                            </ul>
                            <ul>
                                <li>
                                    <a href="mailto:booking@imperialbonihotel.com">
                                        <i class='bx bx-envelope'></i>
                                        booking@imperialbonihotel.com
                                    </a>
                                </li>
                                                           </ul>
                            <span>
									<i class='bx bx-location-plus'></i>
									Block 39, Plot 557, Ikere Street, Ijapo Estate, Akure, Ondo State - Nigeria
								</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  Book Table Area -->

    <!-- Start Booking Area -->
    <section class="bokking-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Booking</span>
                <h2>Direct booking benefits</h2>
            </div>

            <div class="row">
                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="book-icon flaticon-online-booking"></i>
                            <span class="booking-title">Free cost</span>
                            <h3>No booking fee</h3>
                        </a>

                        <div class="modal fade" id="staticBackdrop">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">No booking fee</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod
                                            alias. Natus voluptate.</p>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
												Book Now
												<i class="flaticon-right"></i>
											</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">
                            <i class="book-icon flaticon-podium"></i>
                            <span class="booking-title">Free cost</span>
                            <h3>Best rate guarantee</h3>
                        </a>

                        <div class="modal fade" id="staticBackdrop-2">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Best rate guarantee</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod
                                            alias. Natus voluptate.</p>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
												Book Now
												<i class="flaticon-right"></i>
											</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-3">
                            <i class="book-icon flaticon-airport"></i>
                            <span class="booking-title">Free cost</span>
                            <h3>Reservations 24/7</h3>
                        </a>

                        <div class="modal fade" id="staticBackdrop-3">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Reservations 24/7</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod
                                            alias. Natus voluptate.</p>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
												Book Now
												<i class="flaticon-right"></i>
											</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-4">
                            <i class="book-icon flaticon-slow"></i>
                            <span class="booking-title">Free cost</span>
                            <h3>High-speed Wi-Fi</h3>
                        </a>

                        <div class="modal fade" id="staticBackdrop-4">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">High-speed Wi-Fi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod
                                            alias. Natus voluptate.</p>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
												Book Now
												<i class="flaticon-right"></i>
											</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="booking-col-2">
                    <div class="single-booking">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-5">
                            <i class="book-icon flaticon-coffee-cup-1"></i>
                            <span class="booking-title">Free cost</span>
                            <h3>Free breakfast</h3>
                        </a>

                        <div class="modal fade" id="staticBackdrop-5">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Free breakfast</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod
                                            alias. Natus voluptate.</p>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="book-table.html" class="default-btn">
												Book Now
												<i class="flaticon-right"></i>
											</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Booking Area -->

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
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
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