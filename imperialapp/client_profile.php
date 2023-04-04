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
$today = date("Y-m-d");
$age = $today - $row['dob'];
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
    <title><?php echo $row['fullname']; ?> || <?php echo $session_business_name; ?></title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
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
            Customer Profile
        </div>
        <div class="right">
                    <a <?php echo "href='edit_profile.php?uin=".$row['uin']."' title='Edit Profile'"; ?> class="headerButton">
                        <span class="btn btn-primary btn-sm">Edit</span>
                    </a>
                </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-3 text-center">
            <div class="avatar-section">
                <a href="#">
                    <img src="assets/img/icon/72x72.png" alt="avatar" class="imaged w100 squared">
                </a>
            </div>
        </div>
        <div class="section  mt-2 text-center">
                        <h2><?php echo $row['fullname']; ?></h2>
                        <p><?php echo $row['uin']; ?></p>
        </div>

        <!-- Stats -->
        <div class="section">
            <div class="row mt-2">
                <div class="col-6">

                    <div class="stat-box">

                        <div class="title text-center">Balance</div>

                        <div class="value text-primary text-center" ><ion-icon name="wallet-outline"></ion-icon> *****</div>

                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title text-center">Account Type</div>

                        <div class="value text-danger text-center" style="font-size: 22px ;"><ion-icon name="cash-outline"></ion-icon> <?php echo $row['type']; ?></div>

                    </div>
                </div>
            </div>

        </div>
        <!-- * Stats -->

        <div class="section mt-1 text-center">
                <div class="card-body">
                    <!-- do not forget to delete me-1 and mb-1 when copy / paste codes -->
                    <a <?php echo "href='make_withdrawal.php?uin=".$row['uin']."' title='Make Withdrawal'"; ?>><button type="button" class="btn btn-danger shadowed btn-sm me-1 mb-1">Withdraw</button></a>
                    <a <?php echo "href='add_savings.php?uin=".$row['uin']."' title='Add Savings'"; ?>><button type="button" class="btn btn-success shadowed btn-sm  me-1 mb-1">Add Savings</button></a>
                    <a <?php echo "href='loan_history.php?uin=".$row['uin']."' title='Loan History'"; ?>><button type="button" class="btn btn-primary shadowed btn-sm me-1 mb-1">Loan History</button></a>

                </div>
        </div>

        <div class="section mt-2">
            <div class="section-title">Customer Information</div>
            <div class="card">
                <div class="card-body">

                    <form>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="userid1">Address</label>
                                <input type="text" readonly class="form-control" id="userid1" value="<?php echo $row['raddress']; ?>">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="amount1">Phone No</label>
                                <input type="text" value="<?php echo $row['phone']; ?>" readonly class="form-control" id="amount1">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="amount1">Gender</label>
                                <input type="text" value="<?php echo $row['gender']; ?>" readonly class="form-control" id="amount1">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="amount1">Bank Details</label>
                                <input type="text" value="<?php echo $row['account_no']."-".$row['bank']; ?>" readonly class="form-control" id="amount1">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="amount1">BVN</label>
                                <input type="text" value="<?php echo $row['bvn']; ?>" readonly class="form-control" id="amount1">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </form>

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