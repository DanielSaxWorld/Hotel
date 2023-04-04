<?php
include('session_reception.php');
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM guest WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
}

if(isset($_REQUEST['lodge_id'])){
$sql = "SELECT * FROM check_in WHERE lodge_id='$_REQUEST[lodge_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$discount =$row['room_price'] * $row['night'] * $row['discount']/100;
}
?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['lodge_id'];?> | Receipt</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.fw.png">
    <link rel="stylesheet" href="css/bootstrap-select.css">


    <style>

        .wizard > .content > .body  position: relative; }

    </style>

</head>

<body>

    <?php include 'm_menus2.php'; ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2><strong><?php echo $row['fullname']; ?> | Receipt</strong></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="super_admin.php">Dashboard</a>
                        </li>
                        <li class="active">
                            <strong>Receipt</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <div class="title-action">
                        <a <?php echo "href='receipt_print2.php?lodge_id=".$_REQUEST['lodge_id']."'"?> target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print Receipt </a>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="ibox-content p-xl">
                            <div class="row">
                                <div class="col-sm-6">
                                <img src="img/tourafrica.png" height="80">
                                <h6><strong><?php echo $session_business_name; ?></strong></h6><br>
                                    <p>
                                        <span><strong>Receipt Date:</strong> <?php echo date("jS-F-Y"); ?></span><br/>
                                    </p>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <h4>Receipt No.</h4>
                                    <h4 class="text-navy"><?php echo $row['lodge_id']; ?></h4>
                                    <span>To:</span>
                                    <address>
                                        <strong><?php echo $row['uin']; ?></strong><br>
                                        <abbr title="Phone"></abbr> <?php echo $row['phone']; ?>
                                    </address>

                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table table-striped">
                            <thead><strong class="text-center">CHECK-IN RECEIPT</strong></thead>
                            <tr>
       <td><div style="float:right"><strong>Guest Name:</strong> </div></td>
       <td><?php echo $row['fullname']; ?></td>
       </tr>

        <tr>
       <td><div style="float:right"><strong>Arrival Date & Time:</strong></div></td>
       <td><?php echo date('d-M-Y h:i:s a', strtotime($row['arrival_date'])); ?></td>
       </tr>

        <tr>
       <td><div style="float:right"><strong>Checkout Date Time:</strong></div></td>
       <td><?php echo date('d-M-Y h:i:s a', strtotime($row['checkout'])); ?></td>
       </tr>


       <tr>
       <td><div style="float:right"><strong>Room:</strong></div></td>
       <td><?php echo $row['room_name']; ?></td>
       </tr>

       <tr>
       <td><div style="float:right"><strong>Price:</strong></div></td>
       <td>&#8358;<?php echo number_format($row['room_price'], 2); ?></td>
       </tr>



       <tr>
       <td><div style="float:right"><strong>No of Night(s):</strong></div></td>
       <td><?php echo $row['night']; ?></td>
       </tr>

       <tr>
       <td><div style="float:right"><strong>Discount:</strong></div></td>
       <td><?php echo $row['discount']; ?> (&#8358;<?php echo number_format($discount, 2); ?>)</td>
       </tr>

       <tr>
       <td><div style="float:right"><strong>Payment Method:</strong></div></td>
       <td><?php echo $row['payment_method']; ?></td>
       </tr>

        <tr>
       <td><div style="float:right"><strong>TOTAL AMOUNT PAID:</strong></div></td>
       <td>&#8358;<?php echo number_format($row['total_amount'], 2); ?></td>
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

    <!-- Steps -->
    <script src="js/plugins/staps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="select_room.js"></script>
<script src="js/bootstrap-select.js"></script>




    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>

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
                toastr.success('to Check In Receipt', '<?php echo $session_business_name; ?>');

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
