<?php
include('session2.php');
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM guest WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
}

if(isset($_REQUEST['lodge_id'])){
$sql = "SELECT * FROM check_in WHERE lodge_id='$_REQUEST[lodge_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$discount =$row['room_price'] * $row['night'] * $row['discount']/100;
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['lodge_id'];?> | Receipt Print</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="white-bg" style="font-size:8px; text-align:left">


<div class="row" style="margin-top:0">
                                <div class="col-sm-4" align="center">
                               <img src="img/print.fw.png" height="70">
                                <p><strong>
                                <?php echo $session_business_address; ?><br>
                                <?php echo $session_business_phone; ?></strong></p>
                                </div>

                                <div class="col-sm-4">
                                    <span><strong>CHECK-IN RECEIPT</strong></span>
                                    <span style="float:right"><strong><?php echo date('d-M-Y h:i:s a', strtotime($row['time'])); ?></strong></span>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                            <p align="center">
							<strong>Receipt No:</strong> <strong><?php echo $row['lodge_id'] ?></strong><br>
							<strong>Cashier:</strong> <strong><?php echo $session_fullname ?></strong>
							</p>





                            <div class="table-responsive m-t">
                                <table class="table table-striped">
                            <tr>
       <td><div style="float:right"><strong>Guest Name:</strong> </div></td>
       <td><strong><?php echo $row['fullname']; ?></strong></td>
       </tr>

       <tr>
       <td><div style="float:right"><strong>Guest UIN:</strong></div></td>
       <td><strong><?php echo $row['uin']; ?></strong></td>
       </tr>

        <tr>
       <td><div style="float:right"><strong>Arrival Date & Time:</strong></div></td>
       <td><strong><?php echo date('d-M-Y h:i:s a', strtotime($row['arrival_date'])); ?></strong></td>
       </tr>

        <tr>
       <td><div style="float:right"><strong>Checkout Date & Time:</strong></div></td>
       <td><strong><?php echo date('d-M-Y h:i:s a', strtotime($row['checkout'])); ?></strong></td>
       </tr>


       <tr>
       <td><div style="float:right"><strong>Room:</strong></div></td>
       <td><strong><?php echo $row['room_name']; ?></strong></td>
       </tr>

       <tr>
       <td><div style="float:right"><strong>Price:</strong></div></td>
       <td><strong>&#8358;<?php echo number_format($row['room_price'], 2); ?></strong></td>
       </tr>



       <tr>
       <td><div style="float:right"><strong>No of Night(s):</strong></div></td>
       <td><strong><?php echo $row['night']; ?></strong></td>
       </tr>

       <tr>
       <td><div style="float:right"><strong>Discount:</strong></div></td>
       <td><strong><?php echo $row['discount']; ?> (&#8358;<?php echo number_format($discount, 2); ?>)</strong></td>
       </tr>

       <tr>
       <td><div style="float:right"><strong>Payment Method:</strong></div></td>
       <td><strong><?php echo $row['payment_method']; ?></strong></td>
       </tr>

        <tr>
       <td><div style="float:right"><strong>TOTAL PAID:</strong></div></td>
       <td><strong>&#8358;<?php echo number_format($row['total_amount'], 2); ?></strong></td>
       </tr>

       <tr>
				<td colspan="2" style="text-align:center;">Thanks for your patronage, Please call again!</td>
				</tr>

       <tr>

				<td colspan="2" style="text-align:center; font-size:7px;">
				<?php

	echo "<center><img alt='testing' src='barcode.php?codetype=Code39&size=50&text=".$row['lodge_id']."&print=true'/></center>";

?>
</td>
				</tr>
                            </tbody>
                        </table>
                    </div>


    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>
