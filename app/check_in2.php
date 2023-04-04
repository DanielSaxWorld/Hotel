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
$sql = "SELECT * FROM guest WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['fullname'];?> | Check In</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.fw.png">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">


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
                            <h5><img src="img/hgl_logo.fw.png" height="30"> Check In | <strong><?php echo $row['fullname']; ?></strong> | <?php echo $row['uin']; ?></h5>
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
date_default_timezone_set('Africa/Lagos');
$rand = rand(100,999);
		$today = date("dmy");
		$time = date("His");
		$ID = "L".$today.$time;

	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$lodge_id=trim(addslashes($_REQUEST['lodge_id']));
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$phone=trim(addslashes($_REQUEST['phone']));
		$arrival_date=trim(addslashes($_REQUEST['arrival_date']));
		$room=trim(addslashes($_REQUEST['room']));
    //$room_name= $row['NewRoomName'];
		$room_price=trim(addslashes($_REQUEST['room_price']));
		$night=trim(addslashes($_REQUEST['night']));
		$payment_method=trim(addslashes($_REQUEST['payment_method']));
		$discount=trim(addslashes($_REQUEST['discount']));
		$total_amount=trim(addslashes($_REQUEST['total_amount']));
        $checkout=trim(addslashes($_REQUEST['checkout']));

        $day=date("Y-m-d");


        //$sqlroom = "SELECT `room_name` AS NewRoomName FROM `room` WHERE room_id='$room'";


        //Check for duplicate record in database before inserting New Record
$check=mysqli_query($conn, "SELECT * FROM check_in WHERE lodge_id='$lodge_id' ");
$checkrows=mysqli_num_rows($check);

$check2=mysqli_query($conn, "SELECT * FROM active_check_in WHERE lodge_id='$lodge_id' ");
$checkrows2=mysqli_num_rows($check2);

if($checkrows > 0 && $checkrows2 > 0) {
echo "<script>alert('Guest Already or Still Checked-In')
location.href='receptionist.php'</script>";
} else {

$sql1="INSERT INTO check_in (date, lodge_id, uin, fullname, phone, arrival_date, room, room_price, night, payment_method, discount, total_amount, checkout, status) VALUES ('$day','$lodge_id','$uin','$fullname','$phone','$arrival_date','$room','$room_price','$night','$payment_method','$discount','$total_amount','$checkout','Checked-In')";

$sql2="INSERT INTO active_check_in (date, lodge_id, uin, fullname, phone, arrival_date, room, room_price, night, payment_method, discount, total_amount, checkout, status) VALUES ('$day','$lodge_id','$uin','$fullname','$phone','$arrival_date','$room','$room_price','$night','$payment_method','$discount','$total_amount','$checkout','Checked-In')";

$sql3="UPDATE `room` SET `room_status`='Occupied', `lodge_id`='$lodge_id', `uin`='$uin', `fullname`='$fullname', `phone`='$phone' WHERE room_id=$room";


mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
	$result = mysqli_query($conn, $sql2);
	$result3 = mysqli_query($conn, $sql3);
// if successfully update
if($result && $result3) {

    echo '<script type="text/javascript">location.href="update_room_status2.php?lodge_id='.$_REQUEST['lodge_id'].'";</script>';
        //echo "<script>alert('Guest Checked In Successfully')</script>";

        // echo "<script>alert('Guest Checked In Successfully')
        // location.href='receipt2.php?lodge_id=".$_REQUEST['lodge_id']."'</script>";


	}
	}
	}
}
	//mysqli_close($conn);

?>


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
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-12">

                                                <input id="userName" value="<?php  echo $ID; ?>" readonly name="lodge_id" type="hidden" placeholder="Lodge ID" class="form-control required">

                                                <input id="name" name="uin" value="<?php echo $row['uin']; ?>" placeholder="UIN" readonly type="hidden" class="form-control required">

                                            <div class="form-group col-lg-6">
                                                <label>Fullname *</label>
                                                <input id="name" name="fullname" value="<?php echo $row['fullname']; ?>" placeholder="Fullname" readonly type="text" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Phone *</label>
                                                <input id="name" name="phone" value="<?php echo $row['phone']; ?>" placeholder="Phone" readonly type="text" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Arrival Date & Time *</label>
                                                <input id="name" name="arrival_date" placeholder="Arrival Date" type="datetime-local" class="form-control" required title="Pick Arrival Date">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Expected Checkout Date & Time *</label>
                                                <input id="name" name="checkout"  type="datetime-local" class="form-control" required title="Pick Checkout Date & Time">
                                            </div>

                                            <?php
require_once('db.php');
// $room_result = $conn->query("select * from room where room_status='Available'");


?>

<div class="form-group col-lg-6">
    <label>Room/Suite *</label>
<?php
 $sql = "SELECT * FROM `room` where room_status='Available'";
 $result = mysqli_query($conn, $sql);
?>

        <select name="room" id="room-list" class="form-control" required onchange="sum()">

        <option value="">Select Room</option>
		<?php
	// 	if ($room_result->num_rows > 0) {
    // // output data of each row
    // while($row = $room_result->fetch_assoc()) {
//         $sql = "SELECT * FROM `room` where room_status='Available'";
// $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
        //$_REQUEST['room_name']= $row['room_name'];
    	?>
        <option value="<?php echo $row["id"]; ?>"><?php echo $row["room_name"]; ?></option>

        <?php
    }
}
?>

        </select>

    </div>


 <script type="text/javascript">

function sum()
{
var nights = parseInt(document.getElementById("nights").value);
var price = parseInt(document.getElementById("price").value);
var discount = parseInt(document.getElementById("discount").value);


if(nights.value=="")
{
nights.value = 0.00;
}
if(price.value=="")
{
price.value = 0.00;
}
if(discount.value=="")
{
discount.value = 0.00;
}



var sum = (price*nights*discount/100).toFixed(2);
var sum2 = (price*nights-sum).toFixed(2);

document.getElementById("total_amount").value=sum2;
}
</script>



<div class="form-group col-lg-6">
    <label>Room Price *</label>
        <select name="room_price" step="any"  onkeyup="sum()" class="form-control" id="price" required>
        <option value=''>Room Price</option>
        </select>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script>
$('#room-list').on('change', function(){
    var room_id = this.value;
    $.ajax({
	type: "POST",
	url: "get_room_price.php",
	data:'room_id='+room_id,
	success: function(result){
		$("#price").html(result);
	}
	});
});
</script>

    </div>



     <div class="form-group col-lg-6">
              <label>No of Night(s) *</label>
              <input type="number" step="any" id="nights" onkeyup="sum()" onchange="sum()" placeholder="Number of Night(s)"  class="form-control" title="night" name="night" required>
          </div>

    <div class="form-group col-lg-6">
    <label>Discount in percentage <span style="color: red;">(e.g 2%)*</label>
        <input type="text" step="any" value="0" name="discount" onkeyup="sum()" class="form-control" id="discount">

    </div>





                                            <div class="form-group col-lg-6">
                                                <label>Mode of Payment *</label>
                                                <select id="name" name="payment_method" class="form-control" required>
                                                <option value="">--Select Payment Method--</option>
                                                <option value="Cash">Cash</option>
                                                <option value="POS">POS</option>
                                                <option value="Transfer">Transfer</option>
                                                <option value="Cheque">Cheque</option>
                                                <option value="Boss">Boss</option>
                                                </select>
                                            </div>


                                            <div class="form-group col-lg-6">
              <label>Amount Payable</label>
              <input type="text" step="any" placeholder="Total Amount" id="total_amount" readonly class="form-control" title="Total Amount" name="total_amount">
          </div>


          <div class="form-group col-lg-12">
                                <input type="submit" name="submit" value="Check In" class="btn btn-primary block m-b pull-right" onclick="return confirm('ARE YOU SURE TO CHECK-IN THIS GUEST!'); ">            </div>
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

    <!-- Clock picker -->
    <script src="js/plugins/clockpicker/clockpicker.js"></script>

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
                toastr.success('to Check In', 'Welcome <?php echo $session_fullname ?>');

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

            $('.clockpicker').clockpicker();

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
