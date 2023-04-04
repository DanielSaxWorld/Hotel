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
    <title><?php echo $session_business_name; ?> || Add New Customer</title>

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
        <div class="pageTitle">
       Add New Customer
        </div>
        <div class="right">

                    <a href="#" class="headerButton toggle-searchbox">
                    <ion-icon name="search-outline"></ion-icon>
                    </a>
                </div>

    </div>
    <!-- * App Header -->

     <!-- Search Component -->
     <div id="search" class="appHeader">
        <form class="search-form" method="POST" action="search.php" role="search">
            <div class="form-group searchbox">
                <input type="text" name="search" class="form-control" title="Customer's Name" placeholder="Search Customer..." required>
                <i class="input-icon icon ion-ios-search"></i>
                <a href="#" class="ms-1 close toggle-searchbox"><i class="icon ion-ios-close-circle"></i></a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="p-1">

                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                            <?php
include("db_conn.php");


$rand = rand(1000,9999);
		$today = date("dmy");
		$time = date("His");
		$ID = $today.$rand;


	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){



		$uin=trim(addslashes($_REQUEST['uin']));
        $type=trim(addslashes($_REQUEST['type']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$gender=trim(addslashes($_REQUEST['gender']));
	$phone=trim(addslashes($_REQUEST['phone']));
		$raddress=trim(addslashes($_REQUEST['raddress']));
		$deposit=trim(addslashes($_REQUEST['deposit']));
		$total_savings="0.00";



		//Check for duplicate record in database before inserting New Record
    $check=mysqli_query($conn, "SELECT * FROM client WHERE fullname='$fullname'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
    echo "<script>alert('Customer already Exist in our Database')
    location.href='dashboard.php'</script>";
   } else {



    $email = "support@firstoctetmfi.com.ng";
    $password = "firstoctet@2022";

    $message= "Welcome to FIRST OCTET MFI ".$fullname.", your registration was successfully with account number ".$uin.".";

    $sender_name = "FIRST OCTET";
		$recipients = $phone;
		$forcednd = "1";
		$data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
		$data_string = json_encode($data);
		$ch = curl_init('https://api.bulksmslive.com/v2/app/sms'); curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string))); $result = curl_exec($ch); $res_array = json_decode($result); print_r($res_array);


$sql="INSERT INTO client (staff_id, station, staff_name, uin, `type`, fullname, gender, phone, raddress, deposit, total_savings) VALUES ('$staff_id','$session_station','$session_fullname','$uin','$type','$fullname','$gender','$phone','$raddress','$deposit','$total_savings')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

// echo "<script>alert('Customer $fullname record was successfully Added to Database.')
// 	location.href='client_profile2.php?uin=$_REQUEST[uin]'</script>";

echo "<script>alert('Customer $fullname record was successfully Added to Database.')
	location.href='client_profile.php?uin=".$_REQUEST['uin']."'</script>";
}
}

?>

<input type="hidden" value="<?php echo $ID; ?>" name="uin" required>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2d">Account Type</label>
                                        <select class="form-control custom-select" name="type" required id="account2d">
                                            <option value="Saving">Saving</option>
                                            <option value="Loan">Loan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Customer's Fullname</label>
                                        <input type="text" name="fullname" autofocus class="form-control" id="text11d" placeholder="Customer's Fullname" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2d">Gender</label>
                                        <select class="form-control custom-select" name="gender" required id="account2d">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Phone No</label>
                                        <input type="number" name="phone" class="form-control" id="text11d" placeholder="Phone No" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Shop Address</label>
                                        <input type="text" name="raddress" class="form-control" id="text11d" placeholder="Customer Address" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Frequent Deposit Amount</label>
                                        <input type="number" name="deposit" class="form-control" id="text11d" placeholder="Frequent Deposit" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>



                                <div class="form-group basic">
                                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal" onclick="return confirm('Are you sure to Register this Customer?')">Register Customer</button>
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