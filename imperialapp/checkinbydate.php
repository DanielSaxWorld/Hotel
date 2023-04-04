<?php
include('session3.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
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
    <title>Check-In by Date</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

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
        Check-In Report by Date
        </div>
        <!-- <div class="right">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#DialogBasic">
                <ion-icon name="print"></ion-icon>
            </a>
        </div> -->
    </div>
    <!-- * App Header -->

    <!-- Dialog Basic -->
    <div class="modal fade dialogbox" id="DialogBasic" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Print</h5>
                </div>
                <div class="modal-body">
                    Are you sure to Print?
                </div>
                <div class="modal-footer">
                    <div class="btn-inline">
                        <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</a>
                        <a href="#" class="btn btn-text-primary" data-bs-dismiss="modal">PRINT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Dialog Basic -->

    <!-- App Capsule -->
    <div id="appCapsule" class="full-height">

        <div class="section mt-2 mb-2">


        <div class="listed-detail mt-3">

                <h4 class="text-center mt-2">Report from <?php echo date('d/M/Y', strtotime($_REQUEST ["datefrom"])); ?> - <?php echo date('d/M/Y', strtotime($_REQUEST ["dateto"])); ?> </h4>
            </div>

            <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Guest</th>

                        <th>Room</th>
                        <th>Price</th>

                    </tr>
                    </thead>

                    <tbody>
                    <?php
include('db_conn.php');
if($_POST){
$datefrom = $_REQUEST ["datefrom"];
$dateto = $_REQUEST ["dateto"];

$sql = "SELECT * FROM `check_in` WHERE `date` BETWEEN '$datefrom' AND '$dateto'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {
        $discount =$row['room_price'] * $row['night'] * $row['discount']/100;

?>


                    <tr class="gradeA">
                        <td><?php echo $row['fullname']; ?></td>

                        <td><?php echo $row['room_name']; ?></td>
                        <td>&#8358;<?php echo number_format($row['total_amount'], 2); ?></td>


                    </tr>
                     <?php

}
}

}
					?>

                    </tbody>
                    <tbody>
<?php
$sql2 = "SELECT *, sum(total_amount) as TOTALROOMPrice FROM check_in WHERE `date` BETWEEN '$datefrom' AND '$dateto'";

$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
	 while($row = mysqli_fetch_array($result2)) {


	$_REQUEST['TOTALROOMPrice'] = $row ['TOTALROOMPrice'];
?>

<tr>
<th colspan="2" style=" text-align:right">GRAND TOTAL</th>
    <th colspan="2">&#8358;<?php echo number_format($_REQUEST['TOTALROOMPrice'], 2);

}
}
mysqli_close($conn);
 ?></th>
</tr>




                </tbody>



                    </table>
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