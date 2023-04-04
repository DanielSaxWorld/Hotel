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
<meta property="og:title" content="Contact || Imeprial Boni Hotels & Resorts">
<meta property="og:description" content="...Majestic Splendor">
<meta property="og:image" content="https://imperialbonihotel.com/icon.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://imperialbonihotel.com">
<meta property="twitter:title" content="Contact || Imeprial Boni Hotels & Resorts">
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
    <title>Contact || Imperial Boni Hotel & Resorts</title>
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
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="index.php">
								Home
							</a>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us:</h3>
                        <a href="mailto:hello@imperialbonihotel.com"><span class="__cf_email__" data-cfemail="533b363f3f3c1336303c213a387d303c3e">hello@imperialbonihotel.com</span></a>
                        <a href="booking@imperialbonihotel.com"><span class="__cf_email__" data-cfemail="98f1f6fef7d8fdfbf7eaf1f3b6fbf7f5">booking@imperialbonihotel.com</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-phone-call"></i>
                        <h3>Hotlines:</h3>
                        <a href="tel:+(123)1800-567-8990">Tel. +234 905 965 9790</a>
                        <a href="tel:+(124)1523-567-9874">Tel. +234 806 000 1601</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-location-plus"></i>
                        <h3>Location</h3>
                        <a href="#">Block 39, Plot 557, Ikere Street, Ijapo Estate, Akure, Ondo State - Nigeria</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bxl-whatsapp"></i>
                        <h3>WhatsApp Chat:</h3>
                        <a href="https://wa.me/+234 905 965 9790" target="_blank"> +234 905 965 9790</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="main-contact-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-wrap mb-0">
                        <div class="contact-form">
                            <div class="section-title">
                                <h2>Drop us a message for any query</h2>
                            </div>
                            <form method="POST">
                            <?php
if(isset($_REQUEST['submit'])){
$name =trim(addslashes($_REQUEST['name']));
$email =trim(addslashes($_REQUEST['email']));
$phone =trim(addslashes($_REQUEST['phone']));
$subject =trim(addslashes($_REQUEST['subject']));
$message =trim(addslashes($_REQUEST['message']));


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
	$mail->Username = "hello@imperialbonihotel.com";
//Set gmail password
	$mail->Password = "boni@2022";
//Email subject
	$mail->Subject = "Contact ($subject)";
//Set sender email
	$mail->setFrom('hello@imperialbonihotel.com');
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
                                    <h2 style='font-size: 18px; color: #F3C42B; font-weight: 600; margin: 0;'>Contact Us ($subject) </h2>
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 30px 20px;'>

									<p style='margin-bottom: 10px;'><b>Message from $name</b></p>
									<p style='margin-bottom: 10px;'>Email: <b>$email</b></p>
									<p style='margin-bottom: 10px;'>Phone No: <b>$phone</b></p>
									<p style='margin-bottom: 10px;'>Subject: <b>$subject</b></p>
									<p style='margin-bottom: 10px;'>Message: <b>$message</b></p>


                                    <p style='margin-bottom: 10px;'><em>Reply $name if necessary!</em><br><br>




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
	$mail->addAddress("hello@imperialbonihotel.com");
//Finally send email
	if ( $mail->send() ) {
echo "<script>alert('Hey $name, your Message was successfully sent, you will be replied if necessary!')
location.href='index.php'</script>";

}

}


?>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" required placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" required placeholder="Your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone_number" required data-error="Please enter your number" required class="form-control" placeholder="Your Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" required placeholder="Your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" name="submit" class="default-btn btn-two">
												Send Message
												<i class="flaticon-right"></i>
											</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Map Area -->
    <div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.16715399207!2d5.204903214436222!3d7.270609094752054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10478feabefac3bf%3A0x4a2ff67c6ddfc2ae!2sImperial%20Boni%20Hotels%20and%20Resorts!5e1!3m2!1sen!2sng!4v1662198234552!5m2!1sen!2sng" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- End Map Area -->

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