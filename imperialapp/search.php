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
    <title>Customer Search</title>

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
            <a href="dashboard.php" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Customer Search</div>
        <div class="right">
            <a href="#" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

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

       <!-- App Capsule -->
    <div id="appCapsule" class="extra-header-active full-height">


        <div class="section mt-1 mb-2">
            <div class="card">
                <ul class="listview image-listview media transparent flush">
                <?php
include('db_conn.php');
if($_POST){
$search = $_REQUEST["search"];
$error = "Record not found";



$sql = "SELECT * FROM `client` WHERE station='$session_station' AND staff_name='$session_fullname' AND `fullname` LIKE '%$search%' OR phone='$search' OR uin='$search' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
	  $today = date("Y-m-d");
$age = $today - $row['dob'];

?>
                <li>
                <a <?php echo "href='client_profile.php?uin=".$row['uin']."' title='Customer Profile'"; ?> class="item">
                    <img src="assets/img/icon/72x72.png" alt="image" class="image">
                    <div class="in">
                        <div>
                        <?php echo $row['fullname']; ?>
                            <footer><?php echo $row['uin']; ?> | <?php echo $row['type']; ?></footer>
                        </div>
                    </div>
                </a>
            </li>
            <?php
									 }
}else
 {
    echo "<script>alert('Opps! Customer Record not found')
	location.href='dashboard.php'</script>";
   }
}

 										mysqli_close($conn);
									 ?>
                </ul>
            </div>
        </div>

<!-- Customer Search -->
<div class="modal fade action-sheet" id="SearchForm" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><ion-icon name="search-outline"></ion-icon> Search Customer</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form method="POST" action="search.php" role="search">


                                <div class="form-group basic">
                                    <label class="label">Customer Search</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addona1"><ion-icon name="search-outline"></ion-icon></span>
                                        <input type="text" name="search" required class="form-control" placeholder="Enter Customer Name or Phone No" autofocus>
                                    </div>
                                </div>


                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">Search Customer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Customer Search -->




    </div>
    <!-- * App Capsule -->

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