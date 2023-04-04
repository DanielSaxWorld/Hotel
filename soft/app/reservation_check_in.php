<?php
include('session2.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>


 <?php
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM reservation WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$deposit = $row['deposit'];
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

    <?php include 'm_menus.php'; ?>



        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5><img src="img/hgl_logo.fw.png" height="30"> Reservation Check In | <strong><?php echo $row['fullname']; ?></strong> | <?php echo $row['uin']; ?></h5>
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
		$arrival_date=trim(addslashes($_REQUEST['checkin_date']));
		$room=trim(addslashes($_REQUEST['room']));
    //$room_name= $row['NewRoomName'];
		$room_price=trim(addslashes($_REQUEST['room_price']));
		$night=trim(addslashes($_REQUEST['nights']));
		$payment_method=trim(addslashes($_REQUEST['payment_method']));
		$discount=trim(addslashes($_REQUEST['discount']));
		$total_amount=trim(addslashes($_REQUEST['total_amount']));
        $checkout=trim(addslashes($_REQUEST['checkout_date']));
        $purpose=trim(addslashes($_REQUEST['purpose']));
        $nofguest=trim(addslashes($_REQUEST['nofguest']));
        $arrived_from=trim(addslashes($_REQUEST['arrived_from']));
        $balance=trim(addslashes($_REQUEST['balance']));

        $day=date("Y-m-d");


        //$sqlroom = "SELECT `room_name` AS NewRoomName FROM `room` WHERE room_id='$room'";


        //Check for duplicate record in database before inserting New Record
$check=mysqli_query($conn, "SELECT * FROM check_in WHERE lodge_id='$lodge_id' ");
$checkrows=mysqli_num_rows($check);

$check2=mysqli_query($conn, "SELECT * FROM active_check_in WHERE lodge_id='$lodge_id' ");
$checkrows2=mysqli_num_rows($check2);

if($checkrows > 0 && $checkrows2 > 0) {
echo "<script>alert('Guest Already or Still Checked-In')
location.href='super_admin.php'</script>";
} else {

    /*Start Here - SMS API Integration */
//     $email = "info@enpre.com.ng";
//     $password = "enpre@2022";

// $message= "Welcome ".$fullname." to Imperial Boni Hotels & Resorts, we hope you will enjoy your stay in our ".$room." with Logde ID: ".$lodge_id.". Thanks!";

// $sender_name = "Imperial";
// $recipients = $phone;
// $forcednd = "1";
// $data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
// $data_string = json_encode($data);
// $ch = curl_init('https://api.bulksmslive.com/v2/app/sms'); curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string))); $result = curl_exec($ch); $res_array = json_decode($result);
// //print_r($res_array);
/*Ends Here - SMS API Integration */

$sql4="UPDATE `reservation` SET `status` = 'checkin' WHERE `uin`='$uin'";

$sql1="INSERT INTO check_in (staff_name, date, lodge_id, uin, fullname, phone, arrival_date, room, room_price, night, payment_method, purpose, nofguest, arrived_from, discount, total_amount, checkout, status, , credit, debit, credit) VALUES ('$session_fullname','$day','$lodge_id','$uin','$fullname','$phone','$arrival_date','$room','$room_price','$night','$payment_method','$purpose','$nofguest','$arrived_from','$discount','$total_amount','$checkout','Checked-In','$balance','0')";

$sql2="INSERT INTO active_check_in (staff_name, date, lodge_id, uin, fullname, phone, arrival_date, room, room_price, night, payment_method, purpose, nofguest, arrived_from, discount, total_amount, checkout, status, debit, credit) VALUES ('$session_fullname','$day','$lodge_id','$uin','$fullname','$phone','$arrival_date','$room','$room_price','$night','$payment_method','$purpose','$nofguest','$arrived_from','$discount','$total_amount','$checkout','Checked-In','$balance','0')";

$sql3="UPDATE `room` SET `room_status`='Occupied', `lodge_id`='$lodge_id', `uin`='$uin', `fullname`='$fullname', `phone`='$phone' WHERE room_id=$room";






mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
	$result = mysqli_query($conn, $sql2);
	$result3 = mysqli_query($conn, $sql3);
	$result4 = mysqli_query($conn, $sql4);
// if successfully update
if($result && $result3) {

if($result4){

    echo '<script type="text/javascript">location.href="update_room_status.php?lodge_id='.$_REQUEST['lodge_id'].'";</script>';
        //echo "<script>alert('Guest Checked In Successfully')</script>";

        // echo "<script>alert('Guest Checked In Successfully')
        // location.href='receipt2.php?lodge_id=".$_REQUEST['lodge_id']."'</script>";
}

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

        <select name="room" id="room-list" class="form-control" required onchange="calroom()">

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


<div class="form-group col-lg-6">
    <label>Room Price *</label>
        <select name="room_price" step="any"  onkeyup="calroom()" class="form-control" id="price" required>
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

    <script type="text/javascript">
    function calroom() {
        var nights = parseInt(document.getElementById("nights").value);
        var date1 = new Date(document.getElementById("checkin_date").value);
        var date2 = new Date(document.getElementById("checkout_date").value);
        //var room_price = document.getElementById("room_price").value;

var price = parseInt(document.getElementById("price").value);
var discount = parseInt(document.getElementById("discount").value);
var deposit = parseInt(document.getElementById("deposit").value);
var payment = parseInt(document.getElementById("payment").value);

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



        // To calculate the time difference of two dates
        var Difference_In_Time = date2.getTime() - date1.getTime();


        // To calculate the no. of days between two dates
        var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

        var nights = parseInt(Difference_In_Days);
        //var totalamount = (room_price * nights).toFixed(2);

        document.getElementById("nights").value = nights;

        var sum = (price*nights*discount/100).toFixed(2);
var sum2 = (price*nights - sum).toFixed(2);

var balance= (sum2 - deposit).toFixed(2);
var payment= (balance - payment).toFixed(2);

document.getElementById("total_amount").value=sum2;
document.getElementById("due").value=balance;
document.getElementById("balance").value=payment;

        //document.getElementById("amountpayable").value = totalamount;
    }
</script>

                                        <div class="form-group col-lg-6">
                                        <label>Checkin Date *</label>
                                            <div class="select-box">
                                                <i class='bx bx-calendar'></i>
                                                <div class="input-group date" >
                                                    <input type="date" name="checkin_date" id="checkin_date" onchange="calroom()" class="form-control" placeholder="Check-In Date" required>
                                                    <span class="input-group-addon">
															<i class="glyphicon glyphicon-th"></i>
														</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6">
                                        <label>Checkout Date *</label>
                                            <div class="select-box">
                                                <i class='bx bx-calendar'></i>
                                                <div class="input-group date">
                                                    <input type="date" name="checkout_date" id="checkout_date" onchange="calroom()" class="form-control" placeholder="Check-Out Date" required>
                                                    <span class="input-group-addon">
															<i class="glyphicon glyphicon-th"></i>
														</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-4">
                                        <label>No of Night(s) *</label>
                                            <div class="select-box">
                                                <i class='bx bx-group'></i>
                                                <input type="text" name="nights" id="nights" onkeyup="calroom()" required readonly class="form-control" >
                                            </div>
                                        </div>

    <div class="form-group col-lg-4">
    <label>Discount in percentage <span style="color: red;">(e.g 2%)</span> *</label>
        <input type="text" step="any" value="0" name="discount" onkeyup="calroom()" class="form-control" id="discount">

    </div>

    <div class="form-group col-lg-4">
                                                <label>Purpose of Visit *</label>
                                                <select id="name" name="purpose" class="form-control" required>
                                                <option value="">--Select Purpose--</option>
                                                <option value="Leisure">Leisure</option>
                                                <option value="Tourism">Tourism</option>
                                                <option value="Business">Business</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-3">
    <label>No of Guest(s) *</label>
        <input type="text" step="any" name="nofguest" placeholder="No of Guest(s)" onkeyup="calroom()" class="form-control" required id="nofguest">

    </div>

    <div class="form-group col-lg-3">
    <label>Arrived From *</label>
        <input type="text" step="any" name="arrived_from" placeholder="Arrived From" onkeyup="calroom()" class="form-control" required id="arrived_from">

    </div>







                                            <div class="form-group col-lg-3">
                                                <label>Deposit *</label>
                                                <input step="any" id="deposit" name="deposit" value="<?php echo $deposit; ?>" placeholder="Deposit" readonly type="text" class="form-control required">
                                            </div>



                                            <div class="form-group col-lg-3">
              <label>Amount Payable</label>
              <input type="text" step="any" placeholder="Total Amount" id="total_amount" readonly class="form-control" title="Total Amount" name="total_amount">
          </div>

          <div class="form-group col-lg-3">
              <label>Due</label>
              <input type="text" step="any" placeholder="due" id="due" readonly class="form-control" title="due" name="due">
          </div>

          <div class="form-group col-lg-3">
              <label>Balance</label>
              <input type="text" step="any" placeholder="Balance" id="balance" readonly class="form-control" title="Balance" name="balance">
          </div>

          <div class="form-group col-lg-3">
              <label>Payment *</label>
              <input type="number" step="any" placeholder="payment" id="payment" class="form-control" title="payment" name="payment" onkeyup="calroom()" required >
          </div>

          <div class="form-group col-lg-3">
                                                <label>Mode of Payment *</label>
                                                <select id="name" name="payment_method" class="form-control" required>
                                                <option value="">--Select Payment Method--</option>
                                                <option value="Cash">Cash</option>
                                                <option value="POS (UBA)">POS (UBA)</option>
                                                <option value="POS (Keystone)">POS (Keystone)</option>
                                                <option value="POS (Zenith)">POS (Zenith)</option>
                                                <option value="Transfer (UBA)">Transfer (UBA)</option>
                                                <option value="Transfer (Keystone)">Transfer (Keystone)</option>
                                                <option value="Transfer (Zenith)">Transfer (Zenith)</option>
                                                <option value="Cheque">Cheque</option>
                                                <option value="Boss (Chairman)">Boss (Chairman)</option>
                                                </select>
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
