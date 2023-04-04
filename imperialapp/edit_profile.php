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
    <title><?php echo $row['fullname']; ?> || Edit Profile</title>

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
       Edit Customer Profile
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
		$dob=trim(addslashes($_REQUEST['dob']));
	    $phone=trim(addslashes($_REQUEST['phone']));
		$raddress=trim(addslashes($_REQUEST['raddress']));
		$deposit=trim(addslashes($_REQUEST['deposit']));
		$bvn=trim(addslashes($_REQUEST['bvn']));
		$business_description=trim(addslashes($_REQUEST['business_description']));
		$shop_worth=trim(addslashes($_REQUEST['shop_worth']));
		$bank=trim(addslashes($_REQUEST['bank']));
		$account_no=trim(addslashes($_REQUEST['account_no']));

        $sql2 = "UPDATE client SET  fullname='$fullname', gender='$gender',  dob='$dob', phone='$phone', raddress='$raddress', deposit='$deposit', bvn='$bvn', business_description='$business_description', shop_worth='$shop_worth', bank='$bank', account_no='$account_no' WHERE uin='$_REQUEST[uin]'";



        $result = mysqli_query($conn, $sql2);
        // if successfully update
        if($result) {



echo "<script>alert('Customer $fullname record was successfully UPDATED')
	location.href='client_profile.php?uin=".$row['uin']."'</script>";
}
    }

?>
                         <input id="name" name="uin" value="<?php echo $row['uin']; ?>" placeholder="UIN" readonly type="hidden" class="form-control required">


                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2d">Account Type</label>
                                        <select class="form-control custom-select" name="type" required id="account2d">
                                            <option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
                                            <option value="Saving">Saving</option>
                                            <option value="Loan">Loan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Customer's Fullname</label>
                                        <input type="text" value="<?php echo $row['fullname']; ?>" name="fullname" autofocus class="form-control" id="text11d" placeholder="Customer's Fullname" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2d">Gender</label>
                                        <select class="form-control custom-select" name="gender" required id="account2d">
                                            <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Date of Birth</label>
                                        <input type="date" name="dob" value="<?php echo $row['dob']; ?>" class="form-control" id="text11d" placeholder="dob" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Phone No</label>
                                        <input type="number" value="<?php echo $row['phone']; ?>" name="phone" class="form-control" id="text11d" placeholder="Phone No" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Shop Address</label>
                                        <input type="text" name="raddress" value="<?php echo $row['raddress']; ?>" class="form-control" id="text11d" placeholder="Customer Address" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Frequent Deposit Amount</label>
                                        <input type="number" title="Frequent Deposit" value="<?php echo $row['deposit']; ?>" name="deposit" class="form-control" id="text11d" placeholder="Frequent Deposit" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">BVN</label>
                                        <input type="number" title="BVN" value="<?php echo $row['bvn']; ?>" name="bvn" class="form-control" id="text11d" placeholder="Enter BVN" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Business Description</label>
                                        <input type="text" title="Business Description" value="<?php echo $row['business_description']; ?>" name="business_description" class="form-control" id="text11d" placeholder="Business Description" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Shop Worth</label>
                                        <input type="text" title="Shop Worth" value="<?php echo $row['shop_worth']; ?>" name="shop_worth" class="form-control" id="text11d" placeholder="Shop Worth" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Bank</label>
                                        <select class="form-control custom-select" title="Bank" name="bank" required id="account2d">
                                        <option value="<?php echo $row['bank']; ?>"><?php echo $row['bank']; ?></option>
							<option value="Access Bank">Access Bank</option>
                            <option value="Access Bank (Diamond)">Access Bank(Diamond)</option>
                            <option value="Aso Savings & Loans">Aso Savings & Loans</option>
                            <option value="Citibank">Citibank</option>
                            <option value="EcoBank">EcoBank</option>
                            <option value="Ekondo Microfinance Bank">Ekondo Microfinance Bank</option>
                            <option value="Fidelity Bank">Fidelity Bank</option>
                            <option value="First Bank">First Bank</option>
                            <option value="FCMB">FCMB</option>
                            <option value="GTBank">GTBank</option>
							<option value="Globus Bank Limited">Globus Bank Limited</option>
                            <option value="Heritage Bank">Heritage Bank</option>
                            <option value="Jaiz Bank">Jaiz Bank</option>
                            <option value="Keystone Bank">Keystone Bank</option>
                            <option value="Kuda Bank">Kuda Bank</option>
                            <option value="Parallex Bank">Parallex Bank</option>
                            <option value="Polaris Bank">Polaris Bank</option>
                            <option value="Providus Bank">Providus Bank</option>
                            <option value="Standbic IBTC">Standbic IBTC</option>
                            <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                            <option value="Sterling Bank">Sterling Bank</option>
                            <option value="Suntrust Bank">Suntrust Bank</option>
							<option value="Titan Trust Bank">Titan Trust Bank</option>
                            <option value="Union Bank">Union Bank</option>
                            <option value="UBA">UBA</option>
                            <option value="Unity Bank">Unity Bank</option>
                            <option value="WEMA Bank">WEMA Bank</option>
                            <option value="Zenith Bank">Zenith Bank</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Bank Account No</label>
                                        <input type="number" value="<?php echo $row['account_no']; ?>" name="account_no" class="form-control" id="text11d" placeholder="Account No" title="Account No" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>



                                <div class="form-group basic">
                                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal" onclick="return confirm('Are you sure to Update this Customer Record?')">Update Customer</button>
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