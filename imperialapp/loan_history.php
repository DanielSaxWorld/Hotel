<?php
include('session3.php');
include('db_conn.php');
$id = 1;
$sql = "SELECT * FROM staff_id WHERE id='$id'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$rows = mysqli_fetch_array($result);
?>

<?php
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM client WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
}
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
    <title>Loan History || <?php echo $row['fullname']; ?></title>

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
        <div class="pageTitle">Loan History</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">


        <div class="section mt-2">
            <div class="section-title"><?php echo $row['fullname']; ?> | <?php echo $row['uin']; ?></div>
            <div class="card">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Loan ID</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
include('db_conn.php');
$sql = "SELECT *, DATE_FORMAT(loan_date, '%a-%d-%b-%Y') as New_loan_date FROM loan WHERE uin='$_REQUEST[uin]' ORDER BY loan_date ASC";

$sql2 = "SELECT *, DATE_FORMAT(payment_date, '%a-%d-%b-%Y') as New_payment_date FROM `loan_repayment` WHERE `uin`='$_REQUEST[uin]'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {

		 $balance = $row['actual_loan_payable'] - $row['total_paid'];

	?>
                            <tr>
                            <td><a <?php echo "href='loan_receipt.php?loan_id=".$row['loan_id']."' title='Repayment History'"; ?>><?php echo $row['loan_id']; ?></a></td>
                                <td>&#8358;<?php echo number_format($row['actual_loan_payable']); ?></td>
                        <td class="text-primary">&#8358;<?php echo number_format($balance); ?></td>

                        <td>
                        <a <?php echo "href='repay_loan.php?loan_id=".$row['loan_id']."' title='Repay Loan'"; ?>><button type="button" class="btn btn-danger btn-sm me-1">Repay</button></a>
                        </td>

                            </tr>
                            <?php
}
}
?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>





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