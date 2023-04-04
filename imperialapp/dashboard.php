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
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Dashboard || <?php echo $session_business_name; ?></title>

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
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <img src="assets/img/logo.png" alt="logo" class="logo">
        </div>
        <div class="right">
            <!-- <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a> -->
            <a href="profile.php" class="headerButton">
                <img src="../soft/app/staff/<?php echo $session_passport; ?>" alt="image" class="imaged w32">
                <!-- <span class="badge badge-danger">6</span> -->
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">Welcome Back</span>
                        <h3 class="total"><?php echo $session_fullname; ?></h3>
                    </div>
                    <div class="right">
                        <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#">
                        <ion-icon name="finger-print"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <div class="wallet-footer">
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#checkinreport">
                            <div class="icon-wrapper bg-success">
                            <ion-icon name="calendar-sharp"></ion-icon>
                            </div>
                            <strong>Check-In Report</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#expensesreport">
                            <div class="icon-wrapper">
                            <ion-icon name="wallet-outline"></ion-icon>
                            </div>
                            <strong>Expenses Report</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="restuarant_inventory.php" class="headerButton toggle-searchbox">
                            <div class="icon-wrapper bg-warning">
                            <ion-icon name="restaurant"></ion-icon>
                            </div>
                            <strong>Restuarant Inventory</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="bar_inventory.php">
                            <div class="icon-wrapper bg-danger">
                            <ion-icon name="beer"></ion-icon>
                            </div>
                            <strong>Bar Inventory</strong>
                        </a>
                    </div>


                </div>
                <!-- * Wallet Footer -->
            </div>
        </div>
        <!-- Wallet Card -->

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

        <!-- Customer Search -->
        <div class="modal fade action-sheet" id="SearchForm" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><ion-icon name="search-outline"></ion-icon> Search Customer</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form method="POST" action="search.php" role="search">


                                <div class="form-group basic">
                                    <label class="label">Customer Search</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addona1"><ion-icon name="search-outline"></ion-icon></span>
                                        <input type="text" name="search" required class="form-control" placeholder="Enter Customer Name or Phone No" autofocus>
                                    </div>
                                </div>


                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">Search Customer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Customer Search -->

        <!-- Send Action Sheet -->
        <div class="modal fade action-sheet" id="netprofit" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Net Profit Report by Date</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form method="POST" action="netprofit.php">

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2">Date From</label>
                                        <input type="date" name="datefrom" required class="form-control">

                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2">Date To</label>
                                        <input type="date" name="dateto" required class="form-control">

                                    </div>
                                </div>





                                <div class="form-group basic">
                                    <button type="submit" name="netprofit" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">Generate Report</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Send Action Sheet -->

        <!-- Send Action Sheet -->
        <div class="modal fade action-sheet" id="checkinreport" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Check-In Report by Date</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form method="POST" action="checkinbydate.php">

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2">Date From</label>
                                        <input type="date" name="datefrom" required class="form-control">

                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2">Date To</label>
                                        <input type="date" name="dateto" required class="form-control">

                                    </div>
                                </div>





                                <div class="form-group basic">
                                    <button type="submit" name="checkinreport" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">Generate Report</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Send Action Sheet -->

        <!-- Send Action Sheet -->
        <div class="modal fade action-sheet" id="expensesreport" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Expenses Report by Date</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form method="POST" action="expensesreport.php">

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2">Date From</label>
                                        <input type="date" name="datefrom" required class="form-control">

                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2">Date To</label>
                                        <input type="date" name="dateto" required class="form-control">

                                    </div>
                                </div>





                                <div class="form-group basic">
                                    <button type="submit" name="expensesreport" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">Generate Report</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Send Action Sheet -->



        <!-- Send Action Sheet -->
        <div class="modal fade action-sheet" id="AddExpenses" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Expenses</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form method="POST">
                            <?php
                        include("db_conn.php");


                        $rand = rand(000, 999);
                        $today = date("dmy");
                        $time = date("His");
                        $ID = "OPEX" . $today . $time;
$todaydate = date("Y-m-d");

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addexpenses'])) {
                            $opex_id = trim(addslashes($_REQUEST['opex_id']));
                            $opex_date = trim(addslashes($_REQUEST['opex_date']));
                            $purpose = trim(addslashes($_REQUEST['purpose']));
                            $description = trim(addslashes($_REQUEST['description']));
                            $amount = trim(addslashes($_REQUEST['amount']));
                            //$c_o = trim(addslashes($_REQUEST['c_o']));


                            $sql1 = "INSERT INTO opex (station, staff_name, opex_id, opex_date, purpose, description, amount) VALUES ('$session_station','$session_fullname','$opex_id','$opex_date','$purpose','$description','$amount')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Expenses Successfully Added')
location.href='dashboard.php'</script>";
                        }

                        ?>

<input type="hidden" name="opex_id" value="<?php echo $ID; ?>" placeholder="Opex ID" readonly class="form-control" required="required">

<input type="hidden" name="opex_date" value="<?php echo $todaydate; ?>" placeholder="Opex Date" class="form-control" required required="required">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2">Amount</label>
                                        <input type="number" name="amount" placeholder="Enter Amount" required class="form-control">

                                    </div>
                                </div>

                                <div class="form-group basic">
                                            <div class="input-wrapper">
                                                <label class="label" for="currency1">Category</label>
                                                <select name="purpose" class="form-control custom-select" id="currency1">
                                                <option value="">--Select Category--</option>
                                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT category FROM opex_ctg ";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if (mysqli_num_rows($result2) > 0) {
                                        while ($row = mysqli_fetch_array($result2)) {
                                    ?>
                                            <option value="<?php echo $row['category'] ?>"> <?php echo $row['category'] ?> </option><?php }
                                                                                                                                    } ?>
                                                </select>
                                            </div>
                                        </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11">Description</label>
                                        <input type="text" name="description" class="form-control" id="text11" placeholder="Expenses Description" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>


                                <div class="form-group basic">
                                    <button type="submit" name="addexpenses" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal" onclick="return confirm('Are you sure to Add Expenses');">Add Expenses</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Send Action Sheet -->

        <!-- Change Password -->
        <div class="modal fade action-sheet" id="changepassword" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Password</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form method="POST">
                            <?php
                        include("db_conn.php");


                        error_reporting(E_ALL);
                        if (isset($_REQUEST['changepassword'])) {
                            $newpassword = trim(addslashes($_REQUEST['newpassword']));

                            $sql1 = "UPDATE staff_id SET password=PASSWORD('$newpassword') WHERE staff_id='$staff_id'";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Password Successfully Changed')
location.href='logsuper.php'</script>";
                        }

                        ?>

                                <div class="form-group basic">
                                    <label class="label">New Password</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon2"><i class="icon ion-ios-lock"></i></span>
                                        <input type="password" name="newpassword" placeholder="Enter New Password" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <button type="submit" name="changepassword" onclick="return confirm('Are you sure to change password?');" class="btn btn-danger btn-block btn-lg" data-bs-dismiss="modal">Change Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Change Password -->

        <!-- Stats -->
        <div class="section">
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Check-In Today</div>
                        <?php $today = date("Y-m-d");

$sql = "SELECT * , SUM( total_amount ) AS CHECKIN_TOTAL_amount FROM  `check_in` WHERE  `date` =  '$today'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

   $_SESSION['CHECKIN_TOTAL_amount'] = $row['CHECKIN_TOTAL_amount'] ;
?>
                        <div class="value text-success" style="font-size:16px">&#8358;<?php echo number_format($row['CHECKIN_TOTAL_amount'], 2); ?></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Expenses Today</div>
                        <?php
                        include('db_conn.php');
							$today2 = date("Y-m-d");

 $sql = "SELECT * , SUM( amount ) AS OPEX_TOTAL_amount FROM  `opex` WHERE  `opex_date` =  '$today2'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

    $_SESSION['OPEX_TOTAL_amount'] = $row['OPEX_TOTAL_amount'] ;

?>

                        <div class="value text-danger" style="font-size:16px">&#8358;<?php echo number_format($row['OPEX_TOTAL_amount'], 2); ?></div>
                        <?php } ?>
                    </div>
                </div>


            </div>

            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Restuarant Today</div>
                        <?php $today2 = date("Y-m-d");

 $sql = "SELECT * , SUM( amount ) AS TOTAL_Eatery_Sales FROM  `dsales` WHERE  `date` =  '$today2'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

    $_SESSION['TOTAL_Eatery_Sales'] = $row['TOTAL_Eatery_Sales'];

?>
                        <div class="value text-success" style="font-size:16px">&#8358;<?php echo number_format($row['TOTAL_Eatery_Sales'], 2); ?></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Bar Today</div>
                        <?php $today2 = date("Y-m-d");

$sql = "SELECT * , SUM( amount ) AS TOTAL_Bar_Sales FROM  `ssales` WHERE  `date` =  '$today2'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

   $_SESSION['TOTAL_Bar_Sales'] = $row['TOTAL_Bar_Sales'];

?>

                        <div class="value text-success" style="font-size:16px">&#8358;<?php echo number_format($row['TOTAL_Bar_Sales'], 2); ?></div>
                        <?php } ?>
                    </div>
                </div>


            </div>

            <div class="row mt-2">

                <div class="col-6">
                <a href="occupied_room.php"><div class="stat-box">
                        <div class="title">Occupied Rooms</div>

                        <?php
include('db_conn.php');
$today2 = date("Y-m-d");
$sql = "SELECT COUNT( * ) AS occupiedroom FROM room WHERE room_status='Occupied'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?>


                        <div class="value text-danger" style="font-size:16px"><?php echo $row['occupiedroom']; ?></div>
                        <?php } ?>
                    </div></a>
                </div>

                <div class="col-6">
                <a href="available_room.php"><div class="stat-box">
                        <div class="title">Available Rooms</div>
                        <?php
include('db_conn.php');
$today2 = date("Y-m-d");
$sql = "SELECT COUNT( * ) AS availableroom FROM room WHERE room_status='Available'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?>

                        <div class="value text-success" style="font-size:16px"><?php echo $row['availableroom']; ?></div>
                        <?php } ?>
                    </div></a>
                </div>


            </div>

        <!-- Transactions -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">Room Status</h2>
                <a href="view.php" class="link">View All</a>
            </div>
            <div class="transactions">
                <!-- item -->
                <?php
include('db_conn.php');
$sql = "SELECT * FROM `room` ORDER by id ASC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {


?>
<?php

if($row['room_status'] == "Occupied"){
echo "<a href='receipt.php?lodge_id=$row[lodge_id]' title='' class='item'>
<div class='detail'>
    <div>
        <strong> $row[room_name]</strong>
        <p class='value text-danger'>$row[room_status] by $row[fullname]</p>
    </div>
</div>
<div class='right'>
    <div class='price text-danger'> <img src='assets/img/icon/72x72.png' height='30px' width='30px' alt=''></div>
</div>
</a>";

}
else{
    echo "<a href='#' title='' class='item'>
<div class='detail'>
    <div>
        <strong> $row[room_name]</strong>
        <p class='value text-success'>$row[room_status]</p>
    </div>
</div>
<div class='right'>
    <div class='price text-danger'> <img src='assets/img/icon/72x72.png' height='30px' width='30px' alt=''></div>
</div>
</a>";
}
                ?>
<?php }} ?>
                <!-- * item -->




            </div>
        </div>
        <!-- * Transactions -->








        <!-- app footer -->
        <div class="appFooter">
            <div class="footer-title">
                Copyright &copy; Imperial Boni <?php include('copy.php') ?> || &hearts; by <a href="https://wetindey.space" target="_blank">Wetin Dey Inc.</a>
            </div>
        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="dashboard.php" class="item active">
            <div class="col">
                <ion-icon name="speedometer-outline"></ion-icon>
                <strong>Dashboard</strong>
            </div>
        </a>
        <a href="summary.php" class="item">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
                <strong>Summary</strong>
            </div>
        </a>
        <a href="history.php" class="item">
            <div class="col">
                <ion-icon name="apps-outline"></ion-icon>
                <strong>History</strong>
            </div>
        </a>

        <a onClick="window.location.reload();" class="item">
            <div class="col">
            <ion-icon name="refresh-outline"></ion-icon>
                <strong>Refresh</strong>
            </div>
        </a>

        <a href="profile.php" class="item">
            <div class="col">
                <ion-icon name="settings-outline"></ion-icon>
                <strong>Settings</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- profile box -->
                    <div class="profileBox pt-2 pb-2">
                        <div class="image-wrapper">
                            <img src="../app/staff/<?php echo $session_passport; ?>" alt="image" class="imaged  w36">
                        </div>
                        <div class="in">
                            <strong><?php echo $session_fullname; ?></strong>
                            <div class="text-muted"><?php echo $session_designation; ?></div>
                        </div>
                        <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                            <ion-icon name="close-outline"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->




                    <!-- others -->
                    <div class="listview-title mt-1">Others</div>
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a href="profile.php" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="settings-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Profile
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#changepassword" class="item">
                                <div class="icon-box bg-primary">
                                <i class="icon ion-ios-lock"></i>
                                </div>
                                <div class="in">
                                    Change Password
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php" onclick="return confirm('Are you sure to Log Out?');" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Log out
                                </div>
                            </a>
                        </li>


                    </ul>
                    <!-- * others -->

                </div>
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->



    <!-- iOS Add to Home Action Sheet -->
    <!-- <div class="modal inset fade action-sheet ios-add-to-home" id="ios-add-to-home-screen" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add to Home Screen</h5>
                    <a href="#" class="close-button" data-bs-dismiss="modal">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content text-center">
                        <div class="mb-1"><img src="assets/img/icon/192x192.png" alt="image" class="imaged w64 mb-2">
                        </div>
                        <div>
                            Install <strong>First Octet App</strong> on your iPhone's home screen.
                        </div>
                        <div>
                            Tap
                            <ion-icon name="share-outline"></ion-icon> and Add to homescreen.
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> -->
    <!-- * iOS Add to Home Action Sheet -->


    <!-- Android Add to Home Action Sheet -->
    <!-- <div class="modal inset fade action-sheet android-add-to-home" id="android-add-to-home-screen" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add to Home Screen</h5>
                    <a href="#" class="close-button" data-bs-dismiss="modal">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content text-center">
                        <div class="mb-1">
                            <img src="assets/img/icon/192x192.png" alt="image" class="imaged w64 mb-2">
                        </div>
                        <div>
                            Install <strong>First Octet App</strong> on your Android's home screen.
                        </div>
                        <div>
                            Tap
                            <ion-icon name="ellipsis-vertical"></ion-icon> and Add to homescreen.
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- * Android Add to Home Action Sheet -->



    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

    <script>
        // Add to Home with 2 seconds delay.
        AddtoHome("2000", "once");
    </script>

</body>

</html>