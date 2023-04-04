<?php
include('session.php');
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


$rand = rand(000,999);
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
		$arrival_time=trim(addslashes($_REQUEST['arrival_time']));
		$room=trim(addslashes($_REQUEST['room']));
		$room_price=trim(addslashes($_REQUEST['room_price']));
		$night=trim(addslashes($_REQUEST['night']));
		$payment_method=trim(addslashes($_REQUEST['payment_method']));
		$discount=trim(addslashes($_REQUEST['discount']));
		$total_amount=trim(addslashes($_REQUEST['total_amount']));
		
/*Start Here - SMS API Integration */		
$recipient=$phone;
$username = 'godsfire'; 
$password = 'godspjay1989';
$senderid = 'HGL';
$m1 = 'Welcome';
$m2 = $fullname;
$m3 = ' to HGL Guest House, we hope you will enjoy your stay in our ';
$m4 = $room;
$m5 = 'with Lodge ID: ';
$m6 = $lodge_id;
$m7 = '. Thanks!';
$message= $m1." ".$m2." ".$m3.$m4." ".$m5.$m6.$m7;

$url = 'http://api.smartsmssolutions.com/smsapi.php';
function sendsms_get($username, $password, $message, $senderid, $recipient) {
$message = urlencode($message);
$senderid = urlencode($senderid);
$url = 
'http://api.smartsmssolutions.com/smsapi.php?username='.$username.'&password='.$password.'&sender='.$senderid.'&recipient='.$recipient.'&message='.$message.'&';
$send = file_get_contents($url);
return $send;
}
$get_sms = sendsms_get($username, $password, $message, $senderid, $recipient);
echo $get_sms;	
/*Ends Here - SMS API Integration */
		

/*Start Here - EMAIL API Integration */
// EDIT THE 2 LINES BELOW AS REQUIRED
   /* $email_to = $email;
    $email_subject = "AASCMSL Credit Alert***";
	$email_message = "Dear $fullname your AASCMSL Account was credited as follows:\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message .= "PAYMENT DATE: ".clean_string($payment_date)."\n";
	$email_message .= "CREDIT AMOUNT: ".clean_string(number_format($amount_paid, 2))."\n";
	$email_message .= "TOTAL SAVINGS: ".clean_string(number_format($total_amount, 2))."\n";
	
 
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);*/
/*Ends Here - EMail API Integration */	
		  		
$sql1="INSERT INTO check_in (lodge_id, uin, fullname, phone, arrival_date, arrival_time, room, room_price, night, payment_method, discount, total_amount) VALUES ('$lodge_id','$uin','$fullname','$phone','$arrival_date','$arrival_time','$room','$room_price','$night','$payment_method','$discount','$total_amount')";

$sql2="INSERT INTO active_check_in (lodge_id, uin, fullname, phone, arrival_date, arrival_time, room, room_price, night, payment_method, discount, total_amount) VALUES ('$lodge_id','$uin','$fullname','$phone','$arrival_date','$arrival_time','$room','$room_price','$night','$payment_method','$discount','$total_amount')";


mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
	$result = mysqli_query($conn, $sql2);
// if successfully update
if($result) {					
	echo "<script>alert('Guest Checked In Successfully')
location.href='receipt.php?lodge_id=".$_REQUEST['lodge_id']."'</script>";
	}
	}
	}
	mysqli_close($conn);
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
                                        
                                            <div class="form-group col-lg-6">
                                                <label>Lodge ID *</label>
                                                <input id="userName" value="<?php  echo $ID; ?>" readonly name="lodge_id" type="text" placeholder="Lodge ID" class="form-control required">
                                            </div>
                                             <div class="form-group col-lg-6">
                                                <label>UIN *</label>
                                                <input id="name" name="uin" value="<?php echo $row['uin']; ?>" placeholder="UIN" readonly type="text" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Fullname *</label>
                                                <input id="name" name="fullname" value="<?php echo $row['fullname']; ?>" placeholder="Fullname" readonly type="text" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Phone *</label>
                                                <input id="name" name="phone" value="<?php echo $row['phone']; ?>" placeholder="Phone" readonly type="text" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Arrival Date *</label>
                                                <input id="name" name="arrival_date" placeholder="Arrival Date" type="date" class="form-control required">
                                            </div>
                                             <div class="form-group col-lg-6">
                                                <label>Arrival Time *</label>
                                                <input id="name" name="arrival_time" placeholder="Arrival Time" type="time" class="form-control required">
                                            </div>
                                           
                                                                                        
   <script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "Deluxe Twin Room" :
            document.getElementById("price").options[0]=new Option("25000","25000");
            break;
        case "Deluxe Suite" :
            document.getElementById("price").options[0]=new Option("18000","18000");
            break;
		case "Kings Suite" :
            document.getElementById("price").options[0]=new Option("15000","15000");
            break;
		case "Executive Room" :
            document.getElementById("price").options[0]=new Option("10000","10000");
            break;
		case "Single Room" :
            document.getElementById("price").options[0]=new Option("7000","7000");
            break;
        }
        return true;
    }
    </script>
                                            
<div class="form-group col-lg-6">
    <label>Room/Suite *</label>
        <select id="source" name="room" class="form-control" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
        <option value="">--Select Room--</option>
        <option value="Deluxe Twin Room">Deluxe Twin Room</option>
        <option value="Deluxe Suite">Deluxe Suite</option>
        <option value="Kings Suite">Kings Suite</option>
        <option value="Executive Room">Executive Room</option>
        <option value="Single Room">Single Room</option>
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


var sum = (nights*price-discount).toFixed(2);
document.getElementById("total_amount").value=sum;
}
</script>
<div class="form-group col-lg-6">
    <label>Room Price *</label>
        <select step="any" name="room_price" onkeyup="sum()" class="form-control" id="price">
        <option value="">--Room Price--</option>
        </select>
        
    </div>
    
     <div class="form-group col-lg-6">
              <label>No of Night(s) *</label>
              <input type="number" step="any" id="nights" onkeyup="sum()" placeholder="Number of Night(s)"  class="form-control" title="night" name="night" required>
          </div>
    
    <div class="form-group col-lg-6">
    <label>Discount *</label>
        <input type="text" step="any" name="discount" onkeyup="sum()" class="form-control" id="discount">
        
    </div>
    
                                         
                                            
                                             
                                                   
                                            <div class="form-group col-lg-6">
                                                <label>Mode of Payment *</label>
                                                <select id="name" name="payment_method" class="form-control required">
                                                <option value="">--Select Payment Method--</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                                <option value="Transfer">Transfer</option>
                                                <option value="POS">POS</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group col-lg-6">
              <label>Amount Payable</label>
              <input type="text" step="any" placeholder="Total Amount" id="total_amount" readonly class="form-control" title="Total Amount" name="total_amount">
          </div>
          
          
          <div class="form-group col-lg-12">
                                <input type="submit" name="submit" value="Check In" class="btn btn-primary block m-b pull-right">            </div>
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
                toastr.success('to Add Savings', 'Welcome <?php echo $session_fullname ?>');

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
