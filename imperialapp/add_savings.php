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
    <title><?php echo $row['fullname']; ?> || Add Savings</title>

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
       Add Savings
        </div>
        <div class="right">
                    <a <?php echo "href='client_profile.php?uin=".$row['uin']."' title='Client Profile'"; ?> class="headerButton">
                        <span class="btn btn-primary btn-sm">Profile</span>
                    </a>
                </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="p-1">
                        <div class="text-center">
                            <h2 class="text-primary">Add Savings</h2>
                        </div>

                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <?php
include("db_conn.php");


$rand = rand(10000,99999);
		$today = date("dmy");
        $today2 = date("Y-m-d");
		$time = date("His");
		$ID = "S".$today.$time.$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$transaction_id=trim(addslashes($_REQUEST['transaction_id']));
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$total_savings=trim(addslashes($_REQUEST['total_savings']));
		$payment_date=trim(addslashes($_REQUEST['payment_date']));
		$payment_method=trim(addslashes($_REQUEST['payment_method']));
		$amount_paid=trim(addslashes($_REQUEST['amount']));
		$total_amount=trim(addslashes($_REQUEST['total_amount']));
		$phone=$row['phone'];
        $type ="Credit";
		//$email=$row['email'];

         //Check for duplicate record in database before inserting New Record
$check=mysqli_query($conn, "SELECT * FROM transactions WHERE transaction_id='$transaction_id'");
$checkrows=mysqli_num_rows($check);

if($checkrows>0) {
echo "<script>alert('Saving Transaction Already Captured in DB')
location.href='dashboard.php'</script>";
} else {

        $email = "support@firstoctetmfi.com.ng";
		$password = "firstoctet@2022";

		$message= "Credit Alert*** Dear ".$fullname.", your FIRST OCTET Savings was Credited with N".number_format($amount_paid, 2).". Total Bal: N".number_format($total_amount, 2);

		$sender_name = "FIRST OCTET";
		$recipients = $phone;
		$forcednd = "1";
		$data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
		$data_string = json_encode($data);
		$ch = curl_init('https://api.bulksmslive.com/v2/app/sms'); curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string))); $result = curl_exec($ch); $res_array = json_decode($result); print_r($res_array);


$sql1="INSERT INTO transactions (staff_id, station, staff_name, transaction_id, uin, fullname, date, type, method, amount) VALUES ('$staff_id','$session_station','$session_fullname','$transaction_id','$uin','$fullname','$payment_date','$type','$payment_method','$amount_paid')";



$sql2 = "UPDATE client SET total_savings='$total_amount' WHERE uin='$_REQUEST[uin]'";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

$result = mysqli_query($conn, $sql2);
// if successfully update
if($result) {
	echo "<script>alert('New Client Savings Added Successfully')
location.href='receipt.php?transaction_id=".$_REQUEST['transaction_id']."'</script>";
	}
}

	}


?>
                         <input id="userName" value="<?php  echo $ID; ?>" readonly name="transaction_id" type="hidden" placeholder="transaction_id" class="form-control required">

                         <input id="name" name="uin" value="<?php echo $row['uin']; ?>" placeholder="UIN" readonly type="hidden" class="form-control required">

                         <input id="name" name="payment_date" value="<?php echo $today2; ?>" placeholder="Payment Date" readonly type="hidden" class="form-control required">


                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="name2">Your name</label>
                                    <input type="text" name="fullname" readonly value="<?php echo $row['fullname']; ?>" class="form-control" id="name2" placeholder="Your name" required>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                            <input id="totalsavings" onkeyup="sum()" name="total_savings" value="<?php echo $row['total_savings']; ?>"  readonly type="hidden" class="form-control required">

                            <script type="text/javascript">
function sum()
{
var totalsavings = parseInt(document.getElementById("totalsavings").value);
var amountpaid = parseInt(document.getElementById("amountpaid").value);


if(totalsavings.value=="")
{
totalsavings.value = 0.00;
}
if(amountpaid.value=="")
{
amountpaid.value = 0.00;
}

var sum = (totalsavings+amountpaid).toFixed(2);
document.getElementById("total_amount").value=sum;
}
</script>


                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="email2">Deposit</label>
                                    <input type="number" step="any" id="amountpaid" onkeyup="sum()" name="amount" placeholder="Amount Deposit" autofocus  class="form-control" id="email2" required>
                                    <i class="clear-input">
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

                            <input id="total_amount" onkeyup="sum()" name="total_amount"  readonly type="hidden" class="form-control required">



                            <div class="mt-2">
                                <button type="submit" name="submit" onclick="return confirm('ARE YOU SURE TO ADD THIS SAVINGS');" class="btn btn-success btn-lg btn-block">Add Savings</button>
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