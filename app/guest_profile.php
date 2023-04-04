<?php
include('session2.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>

 <?php
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM guest WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['fullname']; ?> | <?php echo $session_business_name; ?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.fw.png" type="text/javascript">

</head>

<body class="">

    <?php include 'm_menus.php'; ?>


                             <div class="modal inmodal col-xs-12" id="validid" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <img src="client_id/<?php echo $row['valid_id']; ?>" height="350" class="img-shadow">
                                        </div>
                                    </div>
                                </div>
                            </div>


            <div class="wrapper wrapper-content">
                 <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><img src="img/hgl_logo.fw.png" height="30" style="margin-top:-5px"> <?php echo $row['fullname']; ?> | <?php echo $row['uin']; ?> | <?php echo $session_business_name; ?> | GUEST HISTORY</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    <h3>PERSONAL INFORMATION</h3>
                        <div class="row">
                           <table class="table table-striped table-bordered table-hover dataTables-example">
 <style>
th { text-align:right}
</style>

                           <tr>
                           <th>UIN:</th>
                           <td><?php echo $row['uin']; ?></td>
                           <th>FULLNAME:</th>
                           <td><?php echo $row['fullname']; ?></td>
                           <td rowspan="2"><a data-toggle="modal" data-target="#validid"><img src="client_id/<?php echo $row['valid_id']; ?>" height="80" class="img-shadow"></a></td>
                           </tr>

                           <tr>
                           <th>PHONE:</th>
                           <td><?php echo $row['phone']; ?></td>
                           <th>EMAIL ADDRESS:</th>
                           <td><?php echo $row['email']; ?></td>
                           </tr>

                           <tr>
                           <th>GENDER:</th>
                           <td><?php echo $row['gender']; ?></td>
                           <th>CIVIC STATUS:</th>
                           <td colspan="2"><?php echo $row['civic_status']; ?></td>
                           </tr>

                           <tr>
                           <th>VEHICLE TYPE:</th>
                           <td><?php echo $row['vehicle_type']; ?></td>
                           <th>VEHICLE PLATE NO:</th>
                           <td colspan="2"><?php echo $row['plate_no']; ?></td>
                           </tr>

                           <tr>
                           <th>VEHICLE COLOUR:</th>
                           <td><?php echo $row['vehicle_colour']; ?></td>
                            <th>NEXT OF KIN (NAME):</th>
                           <td colspan="2"><?php echo $row['nok_name']; ?></td>
                           </tr>


                            <tr>
                             <th>NEXT OF KIN (PHONE):</th>
                           <td><?php echo $row['nok_phone']; ?></td>
                           <th>MODE OF IDENTIFICATION:</th>
                           <td colspan="2"><?php echo $row['identification']; ?></td>

                           </tr>

                            <?php
						   }

						   ?>

                           </table>
                        </div>
                        <h3>CHECK-IN HISTORY</h3>
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th style="text-align:center">Lodge ID</th>
                        <th style="text-align:center">Arrival Date</th>
                        <th style="text-align:center">Checkout Date</th>
                        <th style="text-align:center">Room</th>
                         <th style="text-align:center">Price</th>
                         <th style="text-align:center">No of Night(s)</th>
                         <th style="text-align:center">Discount</th>
                         <th style="text-align:center">Payment Method</th>
                         <th style="text-align:right">Status</th>
                         <th style="text-align:right">Total Amount</th>
                    </tr>
                    </thead>

                    <tbody>
<?php
$sql = "SELECT *, DATE_FORMAT(arrival_date, '%a-%d-%b-%Y') as New_arrival_date FROM check_in WHERE uin='$_REQUEST[uin]' ORDER BY arrival_date ASC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {
?>


                    <tr class="gradeA">
                        <td align="center"><?php echo $row['lodge_id']; ?></td>
                        <td align="center"><?php echo date('d-M-Y h:i:s a', strtotime($row['arrival_date'])); ?></td>
                        <td align="center"><?php echo date('d-M-Y h:i:s a', strtotime($row['checkout'])); ?></td>
                        <td align="center"><?php echo $row['room_name']; ?></td>
                        <td align="center"><?php echo $row['room_price']; ?></td>
                        <td align="center"><?php echo $row['night']; ?></td>
                        <td align="center"><?php echo $row['discount']; ?></td>
                        <td align="center"><?php echo $row['payment_method']; ?></td>
                        <td align="center"><?php echo $row['status']; ?></td>
                        <td align="right">&#8358;<?php echo number_format($row['total_amount'], 2); ?></td>

                    </tr>
                    <?php
					$_REQUEST['lodge_id']= $row['lodge_id'];
					?>

<?php
}
}


?>
                    </tbody>
                    <tbody>
<?php
$sql2 = "SELECT sum(total_amount) as TOTALamount FROM check_in WHERE uin='$_REQUEST[uin]'";

$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	 while($row = mysqli_fetch_array($result2)) {
	$_REQUEST['TOTALamount'] = $row ['TOTALamount'];
?>

<tr>
<th colspan="9" style=" text-align:right">GRAND TOTAL ON CHECK-IN </th>
    <th style="text-align:right">&#8358;<?php echo number_format($row['TOTALamount'], 2);
	}
}
 ?></th>
</tr>
                </tbody>

                    </table>


                        </div>
                        <h3>CHECK-OUT HISTORY</h3>
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                         <th style="text-align:left">Lodge ID</th>
                         <th style="text-align:left">Arrval Date</th>
                        <th style="text-align:left">Checkout Date</th>
                        <th style="text-align:left">Room</th>
                        <th style="text-align:left">Amount</th>
                    </tr>
                    </thead>

                    <tbody>
<?php
$sql = "SELECT *, DATE_FORMAT(checkout_date, '%a-%d-%b-%Y') as New_checkout_date FROM check_out WHERE uin='$_REQUEST[uin]' ORDER BY checkout_date ASC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {
?>


                    <tr class="gradeA">
                        <td><?php echo $row['lodge_id']; ?></td>
                        <td align="center"><?php echo date('d-M-Y h:i:s a', strtotime($row['arrival_date'])); ?></td>
                        <td><?php echo date('d-M-Y h:i:s a', strtotime($row['checkout_date'])); ?></td>
                        <td><?php echo $row['room_name']; ?></td>
                        <td>&#8358;<?php echo number_format($row['amount'], 2); ?></td>
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
           <?php include 'footer.php'; ?>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>


</body>

</html>
