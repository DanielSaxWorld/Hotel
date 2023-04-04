<?php
include('session.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $session_business_name; ?> | Services Receipt</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.fw.png">
    <link rel="stylesheet" href="css/bootstrap-select.css">


    <style>

        .wizard > .content > .body  position: relative; }

    </style>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<?php
$invoice=$_GET['invoice'];
include('connect.php');
$result = $db->prepare("SELECT * FROM sales WHERE invoice_number= :userid");
$result->bindParam(':userid', $invoice);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$cname=$row['name'];
$invoice=$row['invoice_number'];
$date=$row['date'];
$cash=$row['due_date'];
$cashier=$row['cashier'];
$imei=$row['imei'];

$pt=$row['type'];
$am=$row['amount'];
if($pt=='cash'){
$cash=$row['due_date'];
$amount=$cash-$am;
}
}
?>
</head>

<body class="white-bg" style="font-size:10px; padding:0px">


                                <div class="row" style="margin-top:0px">
                                <div class="col-sm-4" align="center">
                               <img src="img/print.fw.png" height="80"><br>
                                <p><strong><?php echo $session_business_name; ?><br>
                                <?php echo $session_business_address; ?><br>
                                <?php echo $session_business_phone; ?></strong></p>
                                    <p style="font-size:8px">
                                        <span><strong>Cashier:</strong> <strong><?php echo $cashier ?></strong> </span><br/>
                                    </p>
                                </div>

                                <div class="col-sm-4 text-right">
                                    <h6><strong>Receipt No: <?php echo $invoice ?></strong></h6>
                                    <h6 class="text-navy"></h6>
                                    <span><strong>Date: <?php echo $date ?></strong></span>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                            <h6 align="center"><strong>SERVICE RECEIPT</strong></h6>

                            <h6 style="padding-left:0px"><strong>NAME: <?php echo $cname; ?></strong></h6>
                <table class="table table-striped">
                             <thead>


                            <tr style="float:right" class="border-bottom">
								<th colspan="2"> <span>Product</span> </th>
                                <th> Qty </th>
                                <th> Amount </th>
							</tr>
                            </thead>

                            <tbody>
                            <?php
					$id=$_GET['invoice'];
					$result = $db->prepare("SELECT * FROM sales_order WHERE invoice= :userid");
					$result->bindParam(':userid', $id);
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
				?>
                            <tr style="float:right" class="border-bottom">
				<td style=" text-wrap:normal"><strong><?php echo $row['product_code']; ?></strong></td>
				<td><strong><?php echo $row['qty']; ?></strong></td>
				<td><strong><?php echo number_format($row['amount'], 2); ?></strong></td>
       </tr>
       <?php
					}
				?>

       <tr style="padding:0px; float:right; border-spacing:0px" class="border-bottom">
					<td style="text-align:right;"><strong>Total: &nbsp;</strong></td>
					<td style="text-align:right;"><strong>
					<?php
					$sdsd=$_GET['invoice'];
					$resultas = $db->prepare("SELECT sum(amount) FROM sales_order WHERE invoice= :a");
					$resultas->bindParam(':a', $sdsd);
					$resultas->execute();
					for($i=0; $rowas = $resultas->fetch(); $i++){
					$fgfg=$rowas['sum(amount)'];
					echo formatMoney($fgfg, true);
					}
					?>
					</strong></td>
				</tr><br>
				<?php if($pt=='cash'){
				?>
				<tr style="padding:0px; float:right; border-spacing:0px" class="border-bottom">
					<td style="text-align:right;"><strong style="color: #222222;">Cash Tendered:&nbsp;</strong></td>
					<td style="text-align:right"><strong style="color: #222222;">
					<?php
					echo formatMoney($cash, true);
					?>
					</strong></td>
				</tr><br><br>
				<?php
				}
				?>
				<tr style="padding:0px; float:right; border-spacing:0px" class="border-bottom">
					<td style=" text-align:right;"><strong style="color: #222222;">
					<font>
					<?php
					if($pt=='cash'){
					echo 'Change:';
					}
					if($pt=='credit'){
					echo 'Due Date:';
					}
					?>&nbsp;
					</strong></td>
					<td style="text-align:left"><strong style="color: #222222;">
					<?php
					function formatMoney($number, $fractional=false) {
						if ($fractional) {
							$number = sprintf('%.2f', $number);
						}
						while (true) {
							$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
							if ($replaced != $number) {
								$number = $replaced;
							} else {
								break;
							}
						}
						return $number;
					}
					if($pt=='credit'){
					echo $cash;
					}
					if($pt=='cash'){
					echo formatMoney($amount, true);
					}
					?>
					</strong></td>
                    				</tr>

                                    <tr align="center">
                                    <td colspan="4" align="center">Thanks for your patronage, Please call again!<br>
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
