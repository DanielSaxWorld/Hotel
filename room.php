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
<meta property="og:title" content="Rooms || Imeprial Boni Hotels & Resorts">
<meta property="og:description" content="...Majestic Splendor">
<meta property="og:image" content="https://imperialbonihotel.com/icon.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://imperialbonihotel.com">
<meta property="twitter:title" content="Rooms || Imeprial Boni Hotels & Resorts">
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
	   <title>Rooms || Imperial Boni Hotels & Resorts</title>
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
					<h2>Rooms</h2>
					<ul>
						<li>
							<a href="index.php">
								Home
							</a>
						</li>
						<li>Room</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Our Rooms Area -->
		<section class="our-rooms-area ptb-100">
			<div class="container">
				<div class="section-title">
					<span>Our Rooms</span>
					<h2>Fascinating rooms & suites</h2>
				</div>
				<div class="row">
                <?php
                include('db_conn.php');
            $sql = "SELECT * FROM `room`";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
					<div class="col-lg-4 col-sm-4">
						<div class="single-rooms-three-wrap">
							<div class="single-rooms-three">
								<img src="app/rooms/<?php echo $row['photos']; ?>" alt="Image">
								<div class="single-rooms-three-content">
									<h3><?php echo $row['room_name']; ?></h3>
                                    <span class="price">From &#8358;<?php echo number_format($row['price'], 2); ?>/night</span>
									<ul class="rating">
										<li>
											<i class="bx bxs-user"> Capacity: <?php echo $row['capacity']; ?></i>
										</li>

									</ul>
<p><?php echo $row['description']; ?></p>

									<a <?php echo "href='book_room.php?room_id=" . $row['room_id'] . "' "; ?> class="default-btn">
										Book Now
										<i class="flaticon-right"></i>
									</a>
									<span class="information" data-toggle="tooltip" data-placement="top" title="More Info about <?php echo $row['room_name']; ?> ">
										<i class='bx bx-info-circle'></i>
									</span>
								</div>
							</div>
						</div>
					</div>
<?php
                }}
?>

					<div class="col-lg-12">
						<div class="page-navigation-area">
							<nav aria-label="Page navigation example text-center">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link page-links" href="#">
											<i class='bx bx-chevrons-left'></i>
										</a>
									</li>
									<li class="page-item active">
										<a class="page-link" href="#">1</a>
									</li>

									<li class="page-item">
										<a class="page-link" href="#">
											<i class='bx bx-chevrons-right'></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Rooms Area -->

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