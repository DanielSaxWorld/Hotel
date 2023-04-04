<?php
include('session_reception.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>



 <?php
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM check_in WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['fullname'];?> | Check Out</title>

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



        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5><img src="img/hgl_logo.fw.png" height="30"> Check Out | <strong><?php echo $row['fullname']; ?></strong> | <?php echo $row['uin']; ?></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">


                            <form id="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" class="wizard-big">
                           <?php
include("db_conn.php");

	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$lodge_id=trim(addslashes($_REQUEST['lodge_id']));
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$phone=trim(addslashes($_REQUEST['phone']));
        $caution_fee=trim(addslashes($_REQUEST['caution_fee']));
		$checkout_date=trim(addslashes($_REQUEST['checkout_date']));
		$return_caution=trim(addslashes($_REQUEST['return_caution']));
        $arrival_date=trim(addslashes($_REQUEST['arrival_date']));
        $room=trim(addslashes($_REQUEST['room']));
        $amount =$row['room_price']*$row['night'];

$confirm_return =$caution_fee-$return_caution;
$newtotalamount =$row['total_amount']-$return_caution;
$day=date("Y-m-d");



	/*Start Here - SMS API Integration */
    $email = "info@aaserviceapartment.com.ng";
    $password = "AApass@2021";

    $message= "Thanks ".$fullname." for patronizing us at AA Service Apartment, we hope to see you again soon!";

    $sender_name = "AAApartment";
    $recipients = $phone;
    $forcednd = "1";
    $data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
    $data_string = json_encode($data);
    $ch = curl_init('https://api.bulksmslive.com/v2/app/sms'); curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string))); $result = curl_exec($ch); $res_array = json_decode($result);
    //print_r($res_array);

/*Ends Here - SMS API Integration */


$sql1="INSERT INTO check_out (date, lodge_id, uin, fullname, phone, checkout_date, return_caution, arrival_date, room, amount) VALUES ('$day','$lodge_id','$uin','$fullname','$phone','$checkout_date','$return_caution','$arrival_date','$room','$amount')";

$sql3="UPDATE `check_in` SET status='Checked-Out', caution_fee='$confirm_return', total_amount='$newtotalamount' WHERE `lodge_id`='$lodge_id' ";

$sql2 = "DELETE FROM `active_check_in` WHERE `lodge_id`='$lodge_id'";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
	$result = mysqli_query($conn, $sql3);

    $result2 = mysqli_query($conn, $sql2);
// if successfully update
if($result2) {

        echo "<script>alert('Guest Successfully Checked Out')
location.href='guest_profile2.php?uin=".$_REQUEST['uin']."' </script>";

	}
	}
	}


?>

                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-12">


                                                <input id="name" name="uin" value="<?php echo $row['uin']; ?>" placeholder="UIN" readonly type="hidden" class="form-control required">


                                                <input id="name" name="room" value="<?php echo $row['room']; ?>" readonly type="hidden" class="form-control required">


                                                <input name="arrival_date" value="<?php echo $row['arrival_date']; ?>" readonly type="hidden" class="form-control required">

                                            <div class="form-group col-lg-6">
                                                <label>Fullname *</label>
                                                <input id="name" name="fullname" value="<?php echo $row['fullname']; ?>" placeholder="Fullname" readonly type="text" class="form-control required">
                                            </div>

                                             <div class="form-group col-lg-6">
                                                <label>Phone *</label>
                                                <input id="name" name="phone" value="<?php echo $row['phone']; ?>" placeholder="Phone" readonly type="text" class="form-control required">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Caution Fee *</label>
                                                <input id="name" name="caution_fee" value="<?php echo $row['caution_fee']; ?>" placeholder="Phone" readonly type="text" class="form-control" required>
                                            </div>


                                            <div class="form-group col-lg-6">
                                                <label>Lodge ID *</label>
                                               <select name="lodge_id" class="form-control" required>
                    <option value="">--Select Lodge ID--</option>
                    <?php
		 include('db_conn.php');
 $sql2 = "SELECT * FROM check_in WHERE `uin`='$_REQUEST[uin]' ORDER BY lodge_id DESC ";
	 $result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	while($row = mysqli_fetch_array($result2)) {
	 ?>
     <option value="<?php echo $row['lodge_id'] ?>"> <?php echo $row['lodge_id'] ?> </option><?php } }?>
                    </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Checkout Date & Time *</label>
                                                <input name="checkout_date" placeholder="Checkout Date" type="datetime-local" class="form-control" required>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Return Caution Fee? *</label>
                                                <select id="return_caution" onChange="sum()" step="any" name="return_caution" class="form-control" required>
                                                <option value="">--Select Option--</option>
                                                <option value="0">No</option>
                                                <option value="<?php echo $row['caution_fee'] ?>">Yes</option>
                                                </select>
                                            </div>




          <div class="form-group col-lg-12">
                                <input type="submit" name="submit" value="Check Out Guest" class="btn btn-primary block m-b pull-right" onclick="return confirm('ARE YOU SURE TO CHECK-OUT THIS GUEST!'); ">            </div>
                                    </div>


                                </fieldset>


                            </form>
                        </div>
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
                toastr.success('to Add Savings', 'Welcome <?php echo $session_fullname; ?>');

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
