<?php
include('session3.php');
include('db_conn.php');
$id = 1;
$sql = "SELECT * FROM staff_id WHERE id='$id'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$rows = mysqli_fetch_array($result);
?>

<?php
$sql = "SELECT * FROM loan WHERE loan_id='$_REQUEST[loan_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
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
    <title>Repay Loan || <?php echo $row['fullname']; ?></title>

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
        <div class="pageTitle" style="text-align: left;">
       Loan Repayment
        </div>

    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="p-1">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <?php
include("db_conn.php");



	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$loan_id=trim(addslashes($_REQUEST['loan_id']));
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$loan_type=trim(addslashes($_REQUEST['loan_type']));
		$loan_amount=$row['actual_loan_payable'];
		$loan_deductable=trim(addslashes($_REQUEST['loan_deductable']));
		$payment_date=trim(addslashes($_REQUEST['payment_date']));
		//$loan_balance=trim(addslashes($_REQUEST['loan_balance']));
		$payment_method = trim(addslashes($_REQUEST['payment_method']));
		$loan_amount_payment = trim(addslashes($_REQUEST['loan_amount_payment']));
		$bank = trim(addslashes($_REQUEST['bank']));
		$teller_no = trim(addslashes($_REQUEST['teller_no']));
		$previous_total_paid = trim(addslashes($_REQUEST['previous_total_paid']));

	$new_payment = $_REQUEST['previous_total_paid']+$_REQUEST['loan_amount_payment'];
	$loan_balance = trim(addslashes($_REQUEST['loan_balance']));

		$phone=$row['phone'];

		$email = "support@firstoctetmfi.com.ng";
		$password = "firstoctet@2022";

		$message= "Dear ".$fullname.", you paid N".number_format($loan_amount_payment, 2). " on your FIRST OCTET ".$loan_type." ID: ".$loan_id.". Loan Bal is: N".number_format($loan_balance, 2);

		$sender_name = "FIRST OCTET";
		$recipients = $phone;
		$forcednd = "1";
		$data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
		$data_string = json_encode($data);
		$ch = curl_init('https://api.bulksmslive.com/v2/app/sms'); curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string))); $result = curl_exec($ch); $res_array = json_decode($result); print_r($res_array);



$sql1="INSERT INTO loan_repayment (staff_id, station, staff_name, loan_id, uin, fullname, loan_type, loan_amount, loan_deductable, payment_method, bank, teller_no, payment_date, loan_balance) VALUES ('$staff_id','$session_station','$session_fullname','$loan_id','$uin','$fullname','$loan_type','$loan_amount','$loan_amount_payment','$payment_method','$bank','$teller_no','$payment_date','$loan_balance')";


$sql2 = "UPDATE loan SET total_paid ='$new_payment' WHERE loan_id='$_REQUEST[loan_id]'";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

$result = mysqli_query($conn, $sql2);
// if successfully update
if($result) {
	echo "<script>alert('$fullname Loan Repayment Successfully')
location.href='loan_receipt.php?loan_id=".$_REQUEST['loan_id']."'</script>";
	}
	}


?>

                         <input id="name" name="uin" value="<?php echo $row['uin']; ?>" placeholder="UIN" readonly type="hidden" class="form-control" required>

                         <input id="name" name="payment_date" value="<?php echo date("Y-m-d"); ?>" placeholder="Payment Date" readonly type="hidden" class="form-control" required>

                         <input readonly  name="loan_id" value="<?php echo $row['loan_id']; ?>" type="hidden" placeholder="Loan ID" class="form-control" required>

                         <input id="userName" readonly value="<?php echo $row['loan_type']; ?>" name="loan_type" type="hidden" placeholder="Loan ID" class="form-control" required>

                         <input name="actual_loan_payable" value="<?php echo $row['actual_loan_payable']; ?>" placeholder="Loan Payable" readonly  type="hidden" step="any" id="actual_loan_payable" onkeyup="sum()" class="form-control" required>

                         <input name="loan_deductable" value="<?php echo $row['loan_deductable']; ?>" placeholder="Bank" readonly type="hidden" class="form-control" required>

                         <input name="previous_total_paid" value="<?php echo $row['total_paid']; ?>" placeholder="Previous Repayment" readonly  type="hidden" step="any" id="previous_total_paid" onkeyup="sum()" class="form-control" required>


                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="name2">Your name</label>
                                    <input type="text" name="fullname" readonly value="<?php echo $row['fullname']; ?>" class="form-control" id="name2" placeholder="Your name" required>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <script type="text/javascript">

function sum()
{
var actual_loan_payable = parseInt(document.getElementById("actual_loan_payable").value);
var loan_amount_payment = parseInt(document.getElementById("loan_amount_payment").value);
var previous_total_paid = parseInt(document.getElementById("previous_total_paid").value);


if(actual_loan_payable.value=="")
{
actual_loan_payable.value = 0.00;
}
if(loan_amount_payment.value=="")
{
loan_amount_payment.value = 0.00;
}
if(previous_total_paid.value=="")
{
    previous_total_paid.value = 0.00;
}

var sum = (actual_loan_payable-previous_total_paid).toFixed(2);
var sum2 = (sum-loan_amount_payment).toFixed(2);
document.getElementById("loan_balance").value=sum2;
}
</script>


                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="email2">Amount Payment</label>
                                    <input name="loan_amount_payment" autofocus placeholder="Loan Amount Payment" type="number" step="any" id="loan_amount_payment" onkeyup="sum()" class="form-control" required>                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="email2">Payment Method</label>
                                    <select name="payment_method" id="" required class="form-control">
                                    <option value="">--Select Payment Method--</option>
                                    <option value="Cash">Cash</option>
                                    <option value="To Bank">To Bank</option>
                                    </select>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <input type="hidden" step="any" id="loan_balance" onkeyup="sum()" readonly placeholder="Loan Balance"   class="form-control" title="Loan Balance" name="loan_balance">




                            <div class="mt-2">
                                <button type="submit" name="submit" onclick="return confirm('ARE YOU SURE TO ADD LOAN REPAYMENT?');" class="btn btn-danger btn-lg btn-block">Repay Loan</button>
                            </div>

                        </form>
                    </div>
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