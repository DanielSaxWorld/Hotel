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
    <title><?php echo $row['fullname']; ?> || Make Withdrawal</title>

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
       Make Withdrawal
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
                            <h2 class="text-primary">Make Withdrawal</h2>
                        </div>

                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <?php
include("db_conn.php");


$rand = rand(10000,99999);
		$today = date("dmy");
        $today2 = date("Y-m-d");
		$time = date("His");
		$ID = "W".$today.$time.$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$transaction_id=trim(addslashes($_REQUEST['transaction_id']));
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$total_savings=trim(addslashes($_REQUEST['total_savings']));
		$withdrawal_date=trim(addslashes($_REQUEST['withdrawal_date']));
		$withdrawal_method=trim(addslashes($_REQUEST['withdrawal_method']));
		$amountwithdrawn=trim(addslashes($_REQUEST['amountwithdrawn']));
		$total_amount=trim(addslashes($_REQUEST['total_amount']));
		$reason=trim(addslashes($_REQUEST['reason']));
		$phone=$row['phone'];
		//$email=$row['email'];
        $type ="Debit";

        if($amountwithdrawn > $total_savings) {
            echo "<script>alert('Cannot Withdraw, Insuficient Balance')
            location.href='client_profile.php?uin=".$row['uin']."'</script>";
            } else {

                	 //Check for duplicate record in database before inserting New Record
$check=mysqli_query($conn, "SELECT * FROM transactions WHERE transaction_id='$transaction_id'");
$checkrows=mysqli_num_rows($check);

if($checkrows>0) {
echo "<script>alert('Withdrawal Transaction Already Captured in DB')
location.href='dashboard.php'</script>";
} else {

        $email = "support@firstoctetmfi.com.ng";
		$password = "firstoctet@2022";


		$message= "Debit Alert*** Dear ".$fullname.", your FIRST OCTET account was debited with N".number_format($amountwithdrawn, 2).". Savings Bal is now: N".number_format($total_amount, 2);

		$sender_name = "FIRST OCTET";
		$recipients = $phone;
		$forcednd = "1";
		$data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
		$data_string = json_encode($data);
		$ch = curl_init('https://api.bulksmslive.com/v2/app/sms'); curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string))); $result = curl_exec($ch); $res_array = json_decode($result); print_r($res_array);



$sql1="INSERT INTO transactions (staff_id, station, staff_name, transaction_id, uin, fullname, date, method, amount, type, reason) VALUES ('$staff_id','$session_station','$session_fullname','$transaction_id','$uin','$fullname','$withdrawal_date','$withdrawal_method','$amountwithdrawn','$type','$reason')";



$sql2 = "UPDATE client SET total_savings='$total_amount' WHERE uin='$_REQUEST[uin]'";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

$result = mysqli_query($conn, $sql2);
// if successfully update
if($result) {
	echo "<script>alert('$fullname Withdrawal Successfully')
location.href='receipt2.php?transaction_id=".$_REQUEST['transaction_id']."'</script>";
	}
}
            }

	}


?>
                         <input id="userName" value="<?php  echo $ID; ?>" readonly name="transaction_id" type="hidden" placeholder="transaction_id" class="form-control required">

                         <input id="name" name="uin" value="<?php echo $row['uin']; ?>" placeholder="UIN" readonly type="hidden" class="form-control required">

                         <input id="name" name="withdrawal_date" value="<?php echo $today2; ?>" placeholder="Withdrawal Date" readonly type="hidden" class="form-control required">


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
var amountwithdrawn = parseInt(document.getElementById("amountwithdrawn").value);


if(totalsavings.value=="")
{
totalsavings.value = 0.00;
}
if(amountwithdrawn.value=="")
{
amountwithdrawn.value = 0.00;
}

var sum = (totalsavings-amountwithdrawn).toFixed(2);
document.getElementById("total_amount").value=sum;
}
</script>


                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="email2">Amount </label>
                                    <input type="number" step="any" id="amountwithdrawn" onkeyup="sum()" name="amountwithdrawn" placeholder="Withdrawn Amount" autofocus  class="form-control" id="email2" required>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="email2">Withdrawal Method</label>
                                    <select id="name" name="withdrawal_method" class="form-control" required>
                                                <option value="">--Select Withdrawal Method--</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Tranfer">Transfer</option>
                                                </select>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="name2">Reason for Withdrawal</label>
                                    <input type="text" name="reason" class="form-control" id="name2" placeholder="Reason for Withdrawal" required>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <input id="total_amount" onkeyup="sum()" name="total_amount"  readonly type="hidden" class="form-control required">



                            <div class="mt-2">
                                <button type="submit" name="submit" onclick="return confirm('ARE YOU SURE TO MAKE THIS WITHDRAWAL');" class="btn btn-danger btn-lg btn-block">Make Withdrawal</button>
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