<?php
include('session.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>

 <?php
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM client WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['fullname']; ?> | HGL GUEST HOUSE</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/faan favicon.fw.png" type="text/javascript">

</head>

<body class="">

    <?php include 'm_menus.php'; ?>
        
            <div class="wrapper wrapper-content">
                 <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><img src="img/faan favicon.fw.png" height="30" style="margin-top:-5px"> <?php echo $row['fullname']; ?> | <?php echo $row['uin']; ?> | CLIENT PROFILE HISTORY</h5>
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
                           <th>STAFF NO:</th>
                           <td><?php echo $row['staff_no']; ?></td>
                           <td rowspan="2"><img src="client_id/<?php echo $row['passport']; ?>" height="80" class="img-shadow"></td>
                           </tr>
                           
                           <tr>
                           <th>FULLNAME:</th>
                           <td><?php echo $row['title']." ".$row['fullname']; ?></td>
                           <th>EMAIL ADDRESS:</th>
                           <td><?php echo $row['email']; ?></td>
                           </tr>
                           
                           <tr>
                           <th>PHONE NO:</th>
                           <td><?php echo $row['phone']; ?></td>
                           <th>GENDER:</th>
                           <td colspan="2"><?php echo $row['gender']; ?></td>
                           </tr>
                           
                           <tr>
                           <th>CIVIC STATUS:</th>
                           <td><?php echo $row['civic_status']; ?></td>
                           <th>DEPARTMENT:</th>
                           <td colspan="2"><?php echo $row['department']."/".$row['station']; ?></td>
                           </tr>
                           
                           <tr>
                           <th>NEXT OF KIN (NAME):</th>
                           <td><?php echo $row['nok_name']; ?></td>
                            <th>NEXT OF KIN (PHONE):</th>
                           <td colspan="2"><?php echo $row['nok_phone']; ?></td>
                           </tr>
                           
                        
                            <tr>
                           <th>BANK:</th>
                           <td><?php echo $row['bank']; ?></td>
                           <th>ACCOUNT NO:</th>
                           <td colspan="2"><?php echo $row['account_no']; ?></td>
                           </tr>
                           
                           
                           <?php
						   }

						   ?>
                           </table>
                        </div>
                        <h3>SAVINGS HISTORY</h3>
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th style="text-align:left">Transaction ID</th>
                        <th style="text-align:left">Fullname</th>
                        <th style="text-align:left">Method</th>
                        <th style="text-align:left">Bank</th>
                        <th style="text-align:left">Teller No</th>
                        <th style="text-align:left">Payment Date</th>
                         <th style="text-align:left">Amount Paid</th>
                    </tr>
                    </thead>
                    
                    <tbody>
<?php  
$sql = "SELECT *, DATE_FORMAT(payment_date, '%a-%d-%b-%Y') as New_payment_date FROM savings WHERE uin='$_REQUEST[uin]' ORDER BY payment_date ASC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {
?>                    
                    
                                   
                    <tr class="gradeA">
                        <td><?php echo $row['transaction_id']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['payment_method']; ?></td>
                        <td><?php echo $row['bank']; ?></td>
                        <td><?php echo $row['teller_no']; ?></td>
                        <td><?php echo $row['New_payment_date']; ?></td>
                        <td>N<?php echo number_format($row['amount_paid'], 2); ?></td>
                    </tr>
                    
<?php  
}
}


?>
                    </tbody>
                    <tbody>
<?php 
$sql2 = "SELECT sum(amount_paid) as TOTALamount FROM savings WHERE uin='$_REQUEST[uin]'";

$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	 while($row = mysqli_fetch_array($result2)) {
	$_REQUEST['TOTALamount'] = $row ['TOTALamount'];
?>               
                
<tr>
<th colspan="6" style=" text-align:right">TOTAL SAVINGS</th>
    <th colspan="2" style="text-align:left">N<?php echo number_format($row['TOTALamount'], 2); 
	}
}
 ?></th>
</tr>
                </tbody>
                    
                    </table>
                    
                     
                        </div>
                        <h3>LOAN HISTORY</h3>
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                         <th>Loan ID</th>
                        <th>Fullname</th>
                        <th>Bank Account</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Percentage</th>
                         <th>Amount</th>
                         <th>Period</th>
                         <th>Interest</th>
                         <th>Amount Payable</th>
                         <th>Deductable</th>
                    </tr>
                    </thead>
                    
                    <tbody>
<?php  
$sql = "SELECT *, DATE_FORMAT(loan_date, '%a-%d-%b-%Y') as New_loan_date FROM loan WHERE uin='$_REQUEST[uin]' ORDER BY loan_date ASC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {
?>                    
                    
                                   
                    <tr class="gradeA">
                        <td><?php echo $row['loan_id']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['bank']; ?></td>
                        <td><?php echo $row['New_loan_date']; ?></td>
                        <td><?php echo $row['loan_type']; ?></td>
                        <td><?php echo $row['loan_percentage']; ?></td>
                        <td>N<?php echo number_format($row['loan_amount'], 2); ?></td>
                        <td><?php echo $row['loan_period']; ?> Months</td>
                        <td>N<?php echo number_format($row['loan_interest'], 2); ?></td>
                        <td>N<?php echo number_format($row['actual_loan_payable'], 2); ?></td>
                        <td>N<?php echo number_format($row['loan_deductable'], 2); ?></td>
                        
                        
                    </tr>
                    
<?php  
}
}

?>
                    </tbody>
                    <tbody>
<?php 
$sql2 = "SELECT sum(loan_amount) as TOTALloan FROM loan WHERE uin='$_REQUEST[uin]'";

$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	 while($row = mysqli_fetch_array($result2)) {
	$_REQUEST['TOTALloan'] = $row ['TOTALloan'];
?>               
                
<tr>
<th colspan="9" style=" text-align:right">TOTAL LOAN COLLECTED</th>
    <th colspan="2" style="text-align:left">N<?php echo number_format($row['TOTALloan'], 2); 
	}
}
mysqli_close($conn);

 ?></th>
</tr>
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
