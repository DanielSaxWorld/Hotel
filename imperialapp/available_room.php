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
    <title><?php echo $session_business_name; ?> || View All Rooms</title>

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
        <div class="pageTitle">Available Rooms </div>
        <div class="right">
                    <a href="#" class="headerButton">
                    <ion-icon name="home"></ion-icon>
                    </a>
                    <!-- <a href="#" class="headerButton toggle-searchbox">
                    <ion-icon name="search-outline"></ion-icon>
                    </a> -->
                </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">






        <div class="listview-title mt-2">Available Rooms || <?php echo $session_business_name; ?></div>
        <ul class="listview image-listview inset">
        <?php
include('db_conn.php');
$sql = "SELECT * FROM `room` WHERE room_status='Available' ORDER by id ASC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {


?>

<?php

if($row['room_status'] == "Occupied"){

echo "
            <li>
                <a href='receipt.php?lodge_id=$row[lodge_id]' class='item'>
                    <img src='assets/img/icon/72x72.png' alt='image' class='image'>
                    <div class='in'>
                        <div>
                        $row[room_name]
                            <footer class='value text-danger'>$row[room_status] by $row[fullname]</footer>
                        </div>
                    </div>
                </a>
            </li>";

}
else{
    echo "
    <li>
        <a href='#' class='item'>
            <img src='assets/img/icon/72x72.png' alt='image' class='image'>
            <div class='in'>
                <div>
                $row[room_name]
                    <footer class='value text-success'>$row[room_status]</footer>
                </div>
            </div>
        </a>
    </li>";
}

            ?>
            <?php }} ?>
        </ul>

    </div>
    <!-- * App Capsule -->

     <!-- Search Component -->
     <div id="search" class="appHeader">
        <form class="search-form" method="POST" action="search.php" role="search">
            <div class="form-group searchbox">
                <input type="text" name="search" class="form-control" title="Customer's Name" placeholder="Search Customer..." required>
                <i class="input-icon icon ion-ios-search"></i>
                <a href="#" class="ms-1 close toggle-searchbox"><i class="icon ion-ios-close-circle"></i></a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <?php include('menu.php'); ?>




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