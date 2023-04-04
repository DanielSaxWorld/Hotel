
<?php
include('session3.php');
include('db_conn.php');
$id = 1;
$sql = "SELECT * FROM staff_id WHERE id='$id'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$rows = mysqli_fetch_array($result);
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
    <title>Summary || <?php echo $session_business_name; ?> </title>

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
    <div class="appHeader">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Daily Summary
        </div>
        <!-- <div class="right">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#addCardActionSheet">
                <ion-icon name="add-outline"></ion-icon>
            </a>
        </div> -->
    </div>
    <!-- * App Header -->




    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2">

            <!-- card block -->
            <div class="card-block mb-2">
                <div class="card-main">

                    <div class="balance">
                        <span class="label">TOTAL INCOME TODAY</span>
                        <?php $today2 = date("Y-m-d");



?>
                        <h1 class="title">&#8358;<?php echo number_format($_SESSION['CHECKIN_TOTAL_amount'] + $_SESSION['TOTAL_Eatery_Sales'] + $_SESSION['TOTAL_Bar_Sales'], 2); ?></h1>
                    </div>
                    <div class="in">
                        <div class="card-number">
                            <span class="label" style="color:white">Your expected Income today</span>

                        </div>
                        <div class="bottom">
                            <div class="card-expiry">
                                <span class="label">Date</span>
                                <?php echo date("jS/F/Y"); ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- * card block -->


        </div>

        <div class="listview-title mt-2">Today Brakedown</div>
        <ul class="listview image-listview">
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Check-In</div>

                        <div class="price text-success"> &#8358;<?php echo number_format($_SESSION['CHECKIN_TOTAL_amount'], 2); ?></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="card-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Restuarant</div>

                        <div class="price text-success"> <strong>&#8358;<?php echo number_format($_SESSION['TOTAL_Eatery_Sales'], 2); ?></strong></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                    <ion-icon name="wallet-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Bar</div>

                        <div class="price text-success"> <strong>&#8358;<?php echo number_format($_SESSION['TOTAL_Bar_Sales'], 2); ?></strong></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Expenses</div>

                        <div class="price text-danger"> <strong>&#8358;<?php echo number_format($_SESSION['OPEX_TOTAL_amount'], 2); ?></strong></div>
                    </div>
                </div>
            </li>

        </ul>




    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="dashboard.php" class="item">
            <div class="col">
                <ion-icon name="speedometer-outline"></ion-icon>
                <strong>Dashboard</strong>
            </div>
        </a>
        <a href="summary.php" class="item active">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
                <strong>Summary</strong>
            </div>
        </a>
        <a href="history.php" class="item">
            <div class="col">
                <ion-icon name="apps-outline"></ion-icon>
                <strong>History</strong>
            </div>
        </a>

        <a onClick="window.location.reload();" class="item">
            <div class="col">
            <ion-icon name="refresh-outline"></ion-icon>
                <strong>Refresh</strong>
            </div>
        </a>

        <a href="profile.php" class="item">
            <div class="col">
                <ion-icon name="settings-outline"></ion-icon>
                <strong>Settings</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->


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