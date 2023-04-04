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
    <title>History || <?php echo $session_business_name; ?></title>

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
    <!-- <div class="center">

<a href="#" class="headerButton toggle-searchbox">
<ion-icon name="search-outline"></ion-icon>
</a>
</div> -->

        <div class="pageTitle"><ul class="nav nav-tabs capsuled" role="tablist">

<li class="nav-item">
    <a class="nav-link active" data-bs-toggle="tab" href="#Checkin" role="tab">
        Checkin
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#Bar" role="tab">
Bar
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#Restuarant" role="tab">
    Restuarant
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#Expenses" role="tab">
        Expenses
    </a>
</li>

</ul>
</div>




    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">


        <div class="section mt-3">
            <div class="card">
                <div class="card-body">

 <!-- Search Component -->
 <div id="search" class="appHeader">
        <form class="search-form" method="POST" action="transaction_search.php" role="search">
            <div class="form-group searchbox">
                <input type="text" name="search_transaction" class="form-control" title="Search Transactions" placeholder="Search Transaction..." required>
                <i class="input-icon icon ion-ios-search"></i>
                <a href="#" class="ms-1 close toggle-searchbox"><i class="icon ion-ios-close-circle"></i></a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

                    <div class="tab-content mt-1">
                        <div class="tab-pane fade show active" id="Checkin" role="tabpanel">
                        <ul class="listview image-listview">
                        <?php
include('db_conn.php');
$today2 = date("Y-m-d");

$sql = "SELECT * FROM `check_in` WHERE `date` = '$today2' ORDER by id DESC";

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_array($result))
                    {

?>
            <li>
                <a href="receipt.php?lodge_id=<?php echo $rows['lodge_id'] ?>" class="item">
                    <div class="in">
                        <div>
                        <?php echo $rows['room_name']; ?>
                            <footer><?php echo $rows['fullname']; ?> | <?php echo $rows['payment_method']; ?></footer>
                        </div>
                        <span class="text-success text-small">&#8358;<?php echo number_format($rows['total_amount']); ?></span>
                    </div>
                </a>
            </li>
<?php }} ?>


        </ul>
                        </div>
                        <div class="tab-pane fade" id="Restuarant" role="tabpanel">
                        <ul class="listview image-listview">

                        <?php
include('db_conn.php');
$today2 = date("Y-m-d");

$sql = "SELECT * FROM `dsales_order` WHERE `date`='$today2'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($rows = mysqli_fetch_array($result)) {


?>

            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>
                        <?php echo $rows['product_code']; ?>
                        <footer><?php echo date('d-M-y', strtotime($rows['date'])); ?> | <?php echo $rows['name']; ?> | &#8358;<?php echo $rows['price']; ?> | <?php echo $rows['qty']; ?></footer>
                        </div>
                        <span class="text-success text-small">&#8358;<?php echo number_format($rows['amount']); ?></span>
                    </div>
                </a>
            </li>
<?php }} ?>


        </ul>
                        </div>
                        <div class="tab-pane fade" id="Bar" role="tabpanel">
                        <ul class="listview image-listview">
                        <?php
include('db_conn.php');
$today2 = date("Y-m-d");

$sql = "SELECT * FROM `ssales_order` WHERE `date`='$today2'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($rows = mysqli_fetch_array($result)) {


?>

            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>
                        <?php echo $rows['product_code']; ?>
                            <footer><?php echo date('d-M-y', strtotime($rows['date'])); ?> | <?php echo $rows['name']; ?> | &#8358;<?php echo $rows['price']; ?> | <?php echo $rows['qty']; ?></footer>
                        </div>
                        <span class="text-success text-small">&#8358;<?php echo number_format($rows['amount']); ?></span>
                    </div>
                </a>
            </li>
<?php }} ?>



        </ul>
                        </div>
                        <div class="tab-pane fade" id="Expenses" role="tabpanel">
                        <ul class="listview image-listview">
                        <?php
include('db_conn.php');
$today2 = date("Y-m-d");

$sql = "SELECT * FROM `opex` WHERE `opex_date` = '$today2' ORDER by id DESC";

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_array($result))
                    {

?>
            <li>
                <a href="opex_receipt.php?id=<?php echo $rows['id']; ?>" class="item">
                    <div class="in">
                        <div>
                        <?php echo $rows['description']; ?>
                            <footer><?php echo $rows['purpose']; ?> | <?php echo date('d-M-Y', strtotime($rows['opex_date'])); ?> </footer>
                        </div>
                        <span class="text-danger text-small">&#8358;<?php echo number_format($rows['amount']); ?></span>
                    </div>
                </a>
            </li>
<?php }} ?>


        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>








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
        <a href="summary.php" class="item">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
                <strong>Summary</strong>
            </div>
        </a>
        <a href="history.php" class="item active">
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