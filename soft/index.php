<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>Imperial Boni Hotels & Resorts || HOME</title>


	<meta name="author" content="Wetin Dey Inc." />
	<meta name="description" content="Imperial Boni Hotels & Resorts  || Home" />
    <meta property="og:title" content="Imperial Boni Hotels & Resorts || Home" />
    <meta property="og:site_name" content="imperialbonihotel.com">
    <meta property="og:description" content="...Majestic Splendor" />
    <meta property="og:image" content="https://imperialbonihotel.com/icon.png" />



    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.fw.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/img-01.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="cube-wrapper">
		  <div class="cube-folding">
			<span class="leaf1"></span>
			<span class="leaf2"></span>
			<span class="leaf3"></span>
			<span class="leaf4"></span>
		  </div>
		  <span class="loading" data-name="Loading">Imperial Boni Hotels & Resorts Loading</span>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">

        <!-- Sidebar-wrapper -->
        <div id="sidebar-wrapper">
			<div class="side-top">
				<div class="logo-sidebar">
					<a href="index.php"><img src="images/img-01.png" class="img-circle" alt="image" height="200"></a>
				</div>
				<ul class="sidebar-nav">
					<li><a class="active" href="index.php">Home</a></li>
					<li><a href="super/" >Super Admin Login</a></li>
					<!-- <li><a href="manager/" >Manager Login</a></li> -->
					<li><a href="reception/" >Receptionist Login</a></li>
                    <li><a href="restaurants/" >Restaurants Login</a></li>
                    <li><a href="bar/" >BAR Login</a></li>
                    <!-- <li><a href="mainstore/" >Main Store Login</a></li> -->

				</ul>
			</div>
        </div>
        <!-- End Sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div style="background-image:url(images/bg.jpg); background-size: cover;" id="home" class="parallax first-section" data-stellar-background-ratio="0.5">
                <div class="container-fluid">
                    <div class="row">
						<div id="full-width" class="owl-carousel owl-theme">
							<div class="text-center item">
								<div class="col-md-8 col-md-offset-2 col-sm-12">
									<div class="big-tagline text-center">
										<h2><strong>Imperial Boni Hotels & Resorts</strong><br>
                                        ...quality you can trust
                                        </h2>
										<a href="reception/"  class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Receptionist Login</a>
									</div>
								</div>
							</div>
                            <div class="text-center item">
								<div class="col-md-8 col-md-offset-2 col-sm-12">
									<div class="big-tagline text-center">
										<h2><strong>Imperial Boni Hotels & Resorts</strong><br>
                                        ...quality you can trust
                                        </h2>
										<a href="restaurants/"  class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Restaurants Login</a>
									</div>
								</div>
							</div>
							<div class="text-center item">
								<div class="col-md-8 col-md-offset-2 col-sm-12">
									<div class="big-tagline text-center">
										<h2><strong>Imperial Boni Hotels & Resorts</strong><br>
                                        ...quality you can trust
                                        </h2>
										<a href="bar/"  class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Bar Login</a>
									</div>
								</div>
							</div>
                            <!-- <div class="text-center item">
								<div class="col-md-8 col-md-offset-2 col-sm-12">
									<div class="big-tagline text-center">
										<h2><strong>Imperial Boni Hotels & Resorts</strong><br>
                                        ...quality you can trust
                                        </h2>
										<a href="mainstore/"  class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Main Store Login</a>
									</div>
								</div>
							</div> -->

						</div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->




        </div>
    </div><!-- end wrapper -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="js/responsive-tabs.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    (function($) {
        "use strict";
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        smoothScroll.init({
            selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
            selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
            speed: 500, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic', // Easing pattern to use
            offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
            callback: function ( anchor, toggle ) {} // Function to run after scrolling
        });
    })(jQuery);
    </script>

</body>
</html>