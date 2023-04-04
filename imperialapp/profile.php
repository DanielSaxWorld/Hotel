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
    <title>Staff Profile || <?php echo $session_business_name; ?></title>

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
            Profile
        </div>
        <!-- <div class="right">
            <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a>
        </div> -->
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-3 text-center">
            <div class="avatar-section">
                <a href="#">
                    <img src="../soft/app/staff/<?php echo $session_passport; ?>" alt="avatar" class="imaged w100 rounded">
                    <span class="button">
                        <ion-icon name="camera-outline"></ion-icon>
                    </span>
                </a>
            </div>
        </div>

        <li class="text-center">
                        <h2><?php echo $session_fullname; ?></h2>
                        <p><?php echo $session_designation; ?></p>
                    </li>

        <div class="section mt-2">
            <div class="section-title">My Information</div>
            <div class="card">
                <div class="card-body">

                    <form>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="userid1">Email Address</label>
                                <input type="text" readonly class="form-control" id="userid1" value="<?php echo $session_email; ?>">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="amount1">Phone No</label>
                                <input type="text" value="<?php echo $session_phone; ?>" readonly class="form-control" id="amount1" placeholder="Enter an Amount">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="listview-title mt-1">Theme</div>
        <ul class="listview image-listview text inset no-line">
            <li>
                <div class="item">
                    <div class="in">
                        <div>
                            Dark Mode
                        </div>
                        <div class="form-check form-switch  ms-2">
                            <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                            <label class="form-check-label" for="darkmodeSwitch"></label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>





        <div class="listview-title mt-1">Security</div>
        <ul class="listview image-listview text mb-2 inset">
            <li>
                <a href="#" data-bs-toggle="modal" data-bs-target="#changepassword" class="item">
                    <div class="in">
                        <div>Change Password</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="logout.php" class="item" onclick="return confirm('Are you sure to Log Out?');">
                    <div class="in">
                        <div>Log Out</div>
                    </div>
                </a>
            </li>
        </ul>


    </div>
    <!-- * App Capsule -->

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

    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="dashboard.php" class="item ">
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

        <a href="profile.php" class="item active">
            <div class="col">
                <ion-icon name="settings-outline"></ion-icon>
                <strong>Settings</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

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