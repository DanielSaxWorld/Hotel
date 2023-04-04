<?php
include('session2.php');
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $session_business_name; ?> | Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.fw.png" type="text/javascript">

</head>
<body>

    <?php include 'super_menus.php'; ?>

                <div class="row  border-bottom white-bg dashboard-header">

                    <div class="col-sm-12">
                        <h2>Welcome <strong><?php echo $session_fullname; ?></strong> to <img src="img/tourafrica.png" height="150"> <strong>SUPER ADMIN DASHBOARD</strong> </h2>



<a href="new_guest.php"> <div class="col-lg-4">
                <div class="widget style1 navy-bg">
                    <div class="row">
                       <div class="col-xs-4">
                            <i class="fa fa-user-plus fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-left">
                            <span> Add New Guest</span>
                            <h2 class="font-bold">Guest</h2>
                        </div>
                    </div>
                </div>
            </div></a>

            <a href="reservation.php"> <div class="col-lg-4">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                       <div class="col-xs-4">
                            <i class="fa fa-user-plus fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-left">
                            <span> Add New Reservation</span>
                            <h2 class="font-bold">Add Reservation</h2>
                        </div>
                    </div>
                </div>
            </div></a>



            <a data-toggle="modal" data-target="#addopex"> <div class="col-lg-4">
                <div class="widget style1 red-bg">
                    <div class="row">
                       <div class="col-xs-4">
                            <i class="fa fa-calculator fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-left">
                            <span> Add Operating Expensis</span>
                            <h2 class="font-bold">Opex</h2>
                        </div>
                    </div>
                </div>
            </div></a>

            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5><b>Active Reservation</b></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                            <th>Arrival Date</th>
                                            <th>UIN</th>
                                                <th>Guest Name</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>Civic Status</th>
                                                <th>Occupation</th>
                                                <th>Room</th>
                                                <th>No of Room(s)</th>
                                                <th>Amount Deposit</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
include('db_conn.php');
$sql = "SELECT * FROM `reservation` WHERE `status` = 'Pending' LIMIT 0 , 35";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {

?>
                                            <tr>
                                            <td><?php echo date('d-M-Y', strtotime($row['arrival_date'])); ?></td>
                                            <td><small><?php echo $row['uin']; ?></small></td>
                                                <td><small><?php echo $row['fullname']; ?></small></td>

                                                <td><?php echo $row['phone']; ?></td>
                                                <td><?php echo $row['gender']; ?></td>
                                                <td><?php echo $row['civic_status']; ?></td>
                                                <td><?php echo $row['occupation']; ?></td>
                                                <td><?php echo $row['room']; ?></td>
                                                <td><?php echo $row['nofroom']; ?></td>
                                                <td class="text-navy">&#8358;<?php echo number_format($row['deposit'], 2); ?></td>

                                                <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-warning btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">


                             <li><a data-toggle="modal" href="reservation_check_in.php?uin=<?php echo $row['uin']; ?>" onclick="return confirm('ARE YOU SURE TO CHECK-IN GUEST RESERVATION?'); ">Check-In Reservation</a></li>

                            </ul>
                        </div></td>

                                            </tr>
                                            <?php
 }
}
											?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                 </div>

            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5><b>Active Online Booking</b></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                 <th>Booking ID</th>
                                                <th>Guest Name</th>
                                                <th>Checkin Date</th>
                                                <th>Checkout Date</th>
                                                <th>Room</th>
                                                <th>No of Guest</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
include('db_conn.php');
$sql = "SELECT * FROM `booking` WHERE status!='checkin' ORDER by checkin_date LIMIT 30";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {

?>
                                            <tr>
                                                <td><small><?php echo $row['booking_id']; ?></small></td>
                                                <td><small><?php echo $row['fullname']; ?></small></td>
                                                <td><?php echo date('d-M-Y', strtotime($row['checkin_date'])); ?></td>
                        <td><?php echo date('d-M-Y', strtotime($row['checkout_date'])); ?></td>
                                                <td><?php echo $row['room_name']; ?></td>
                                                <td class="text-navy"><?php echo $row['noofguest']; ?> </td>
                                                <td class="text-danger"><?php echo $row['email']; ?></td>
                                                <td class="text-danger"><?php echo $row['phone']; ?></td>
                                                <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">

                             <li><a data-toggle="modal" href="booking_check_in.php?uin=<?php echo $row['uin']; ?>" onclick="return confirm('ARE YOU SURE TO CHECK-IN GUEST?'); ">Check-In Guest</a></li>
                             <li><a data-toggle="modal" href="delete_booking.php?id=<?php echo $row['id']; ?>" onclick="return confirm('ARE YOU SURE TO DELETE BOOKING?'); ">Delete Booking</a></li>


                            </ul>
                        </div></td>

                                            </tr>
                                            <?php
 }
}
											?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                 </div>

                                 <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5><b>Active Checked-In</b></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                 <th>Lodge ID</th>
                                                <th>Guest Name</th>
                                                <th>Arrival Date</th>
                                                <th>Checkout Date</th>
                                                <th>Room</th>
                                                <th>Amount</th>
                                                <th>Night(s)</th>
                                                <th>Status</th>
                                                <th>Credit</th>
                                                <th>Debit</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
include('db_conn.php');
$sql = "SELECT * FROM `active_check_in` ORDER by arrival_date DESC LIMIT 0, 35";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {

?>
                                            <tr>
                                                <td><small><?php echo $row['lodge_id']; ?></small></td>
                                                <td><small><?php echo $row['fullname']; ?></small></td>
                                                <td><?php echo date('d-M-Y', strtotime($row['arrival_date'])); ?></td>
                        <td><?php echo date('d-M-Y', strtotime($row['checkout'])); ?></td>
                                                <td><?php echo $row['room_name']; ?></td>
                                                <td>&#8358;<?php echo number_format($row['total_amount'], 2); ?></td>
                                                <td class="text-navy"><?php echo $row['night']; ?> Night(s) </td>
                                                <td class="text-danger"><?php echo $row['status']; ?></td>
                                                <td class="text-navy">&#8358;<?php echo number_format($row['credit'], 2); ?></td>
                                                <td class="text-danger">&#8358;<?php echo number_format($row['debit'], 2); ?></td>
                                                <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">

                             <li><a data-toggle="modal" href="receipt_print.php?lodge_id=<?php echo $row['lodge_id']; ?>" target="_blank">Re-Print Receipt</a></li>
                             <li><a data-toggle="modal" href="change_room.php?lodge_id=<?php echo $row['lodge_id']; ?>" >Change Room</a></li>
                             <li><a data-toggle="modal" href="post_charges.php?lodge_id=<?php echo $row['lodge_id']; ?>">Post Charges</a></li>
                             <li><a data-toggle="modal" href="chargeshistory.php?lodge_id=<?php echo $row['lodge_id']; ?>">Charges History</a></li>
                             <li><a data-toggle="modal" href="renew_check_in.php?lodge_id=<?php echo $row['lodge_id']; ?>" onclick="return confirm('ARE YOU SURE TO RENEW GUEST CHECK-IN?'); ">Renew Check-In</a></li>

                             <li>
<?php
if($row['debit']!='0.00'){
    echo "<a data-toggle='modal' href='chargeshistory.php?lodge_id=$row[lodge_id]'>Outstanding Bill</a>";
}else{
    echo "<a data-toggle='modal' href='check_out2.php?lodge_id=$row[lodge_id]' onclick='return confirm('ARE YOU SURE TO CHECKOUT THIS GUEST!'); '>Check Out Guest</a>";

}
?>
                            </li>


                            </ul>
                        </div></td>

                                            </tr>
                                            <?php
 }
}
											?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                 </div>





  <div class="wrapper wrapper-content">
        <div class="row">


        <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Daily</span>
                                <h5>Total Check-In Amount Today</h5>
                            </div>
                            <div class="ibox-content">
                            <?php $today = date("Y-m-d");

 $sql = "SELECT * , SUM( total_amount ) AS CHECKIN_TOTAL_amount FROM  `check_in` WHERE  `date` =  '$today'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

    $_REQUEST['CHECKIN_TOTAL_amount'] = $row['CHECKIN_TOTAL_amount'] ;
?>
                                <h1 class="no-margins"><strong>&#8358;<?php echo number_format($row['CHECKIN_TOTAL_amount'], 2); ?></strong></h1>
                                <?php } ?>
                                <small>Total Check-In Amount Today</small>
                            </div>
                        </div>
                    </div>





                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-warning pull-right">Daily</span>
                                <h5>Total BAR Sales Today</h5>
                            </div>
                            <div class="ibox-content">
                            <?php $today2 = date("Y-m-d");

 $sql = "SELECT * , SUM( amount ) AS TOTAL_Bar_Sales FROM  `ssales` WHERE  `date` =  '$today2'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

    $_REQUEST['TOTAL_Bar_Sales'] = $row['TOTAL_Bar_Sales'];

?>
                                <h1 class="no-margins"><strong>&#8358;<?php echo number_format($row['TOTAL_Bar_Sales'], 2); ?></strong></h1>
                                <?php }?>

                                <small>Total BAR Sales Today</small>
                            </div>
                        </div>
                    </div>

			<div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Daily</span>
                                <h5>Total Restuarant Sales Today</h5>
                            </div>
                            <div class="ibox-content">
                            <?php $today2 = date("Y-m-d");

 $sql = "SELECT * , SUM( amount ) AS TOTAL_Eatery_Sales FROM  `dsales` WHERE  `date` =  '$today2'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

    $_REQUEST['TOTAL_Eatery_Sales'] = $row['TOTAL_Eatery_Sales'];

?>
                                <h1 class="no-margins"><strong>&#8358;<?php echo number_format($row['TOTAL_Eatery_Sales'], 2); ?></strong></h1>
                                <?php }?>

                                <small>Total Restuarant Sales Today</small>
                            </div>
                        </div>
                    </div>







                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Daily</span>
                                <h5>GENERAL Operating Expensis</h5>
                            </div>
                            <div class="ibox-content">
                            <?php
							$today2 = date("Y-m-d");

 $sql = "SELECT * , SUM( amount ) AS OPEX_TOTAL_amount FROM  `opex` WHERE  `opex_date` =  '$today2'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

?>
                                <h1 class="no-margins"><strong>&#8358;<?php echo number_format($row['OPEX_TOTAL_amount'], 2); ?></strong></h1>
                                <?php }?>

                                <small>Total Expensis Today</small>
                            </div>
                        </div>
                    </div>





                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Daily</span>
                                <h5>GRAND TOTAL INCOME TODAY</h5>
                            </div>
                            <div class="ibox-content">
                            <?php
							$today2 = date("Y-m-d");

?>
                                <h1 class="no-margins"><strong>&#8358;<?php echo number_format($_REQUEST['CHECKIN_TOTAL_amount'] + $_REQUEST['TOTAL_Eatery_Sales'] + $_REQUEST['TOTAL_Bar_Sales'], 2); ?></strong></h1>


                                <small>GRAND TOTAL INCOME TODAY</small>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5><b>Room Status </b></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>

                    <?php
include('db_conn.php');
$sql = "SELECT * FROM `room` ORDER by id ASC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {


?>
<?php

if($row['room_status'] == "Occupied"){
echo "<div class='col-lg-3'>
<div class='widget style1 red-bg tooltip-demo'>
<a style='color:#fff' data-container='body' data-toggle='popover' data-placement='top' data-content='$row[room_status] by - $row[fullname] - $row[phone] - $row[lodge_id]'>
    <div class='row'>
       <div class='col-xs-2'>
            <i class='fa fa-tags fa-2x'></i>
        </div>
        <div class='col-xs-8 text-left'>
            <span>$row[fullname]</span>
            <h4 class='font-bold'>$row[room_name]</h4>
        </div>
    </div>
    </a>
</div>
</div>";
}
else{
    echo "<div class='col-lg-3'>
    <div class='widget style1 navy-bg'>
        <div class='row'>
           <div class='col-xs-2'>
                <i class='fa fa-university fa-2x'></i>
            </div>
            <div class='col-xs-8 text-left'>
                <span> $row[room_status]</span>
                <h4 class='font-bold'>$row[room_name]</h4>
            </div>
        </div>
    </div>
    </div>";
}

?>


<?php }} ?>

</div>
                                 </div>















                                 </div>
                                 </div>
                                 </div>
                                 </div>





               <?php include 'footer.php'; ?>

            </div>
        </div>

        </div>



    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
				toastr.success('Super Admin Dashboard', 'Welcome to <?php echo $session_business_name; ?>');


            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>
</body>
</html>
