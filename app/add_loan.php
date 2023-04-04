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
$sql = "SELECT * FROM member WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['fullname'];?> | Add New Loan</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/faan favicon.fw.png">


    <style>

        .wizard > .content > .body  position: relative; }

    </style>

</head>

<body>

    <?php include 'm_menus.php'; ?>
        
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php  echo $row['fullname']." | ".$row['uin']; ?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="admin.php">Dashboard</a>
                        </li>
                        
                        <li class="active">
                            <strong>Add New Loan</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
            
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Add New Loan</h5>
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
                            <h2>
                                Add New Loan
                            </h2>
                            
                            <form id="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" class="wizard-big">
                            <?php
include("db_conn.php");


$rand = rand(000,999);
		$today = date("dmy");
		$time = date("His");
		$ID = "L".$today.$rand;
		
	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$loan_id=trim(addslashes($_REQUEST['loan_id']));
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$bank=trim(addslashes($_REQUEST['bank']));
		$loan_date=trim(addslashes($_REQUEST['loan_date']));
		$loan_type=trim(addslashes($_REQUEST['loan_type']));
		$loan_percentage=trim(addslashes($_REQUEST['loan_percentage']));
		$loan_amount=trim(addslashes($_REQUEST['loan_amount']));
		$loan_period=trim(addslashes($_REQUEST['loan_period']));
		$loan_interest=trim(addslashes($_REQUEST['loan_interest']));
		$actual_loan_payable = $loan_amount + $loan_interest;
		$loan_deductable = $actual_loan_payable/$loan_period;
		$loan_balance="0.00";
		
		/*$phone=$row['phone'];
		
$recipient=$phone;
$username = 'godsfire'; 
$password = 'godspjay1989';
$senderid = 'AASCMSL';
$m1 = 'Loan Alert*** Dear';
$m2 = $fullname.", your AASCMSL";
$m3 = $loan_type." Application has being Approved. ";
$m4 = "Your Bank Account has now been credited with N".number_format($amount_paid, 2).".";
$message= $m1." ".$m2." ".$m3.$m4;

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
echo $get_sms;*/		
		  		
$sql1="INSERT INTO loan (loan_id, uin, fullname, bank, loan_date, loan_type, loan_percentage, loan_amount, loan_period, loan_interest, actual_loan_payable, loan_deductable, loan_balance) VALUES ('$loan_id','$uin','$fullname','$bank','$loan_date','$loan_type','$loan_percentage','$loan_amount','$loan_period','$loan_interest','$actual_loan_payable','$loan_deductable','$loan_balance')";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
						
	echo "<script>alert('New Member Loan Added Successfully')
location.href='loan_history.php?uin=".$row['uin']."'</script>";
	}
	
	mysqli_close($conn);
	}
	
?>
<script type="text/javascript">
 
function sum()
{
var loan_percentage = parseInt(document.getElementById("loan_percentage").value);
var loan_amount = parseInt(document.getElementById("loan_amount").value);


if(loan_percentage.value=="")
{
loan_percentage.value = 0.00;
}
if(loan_amount.value=="")
{
loan_amount.value = 0.00;
}

var sum = (loan_percentage*loan_amount/100).toFixed(2);
document.getElementById("loan_interest").value=sum;
}
</script> 
                                <h1>Add Member Loan</h1>
                                <fieldset>
                                    <h2>Add New Loan</h2>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        
                                            <div class="form-group col-lg-6">
                                                <label>Loan ID *</label>
                                                <input id="userName" value="<?php  echo $ID; ?>" readonly name="loan_id" type="text" placeholder="Loan ID" class="form-control required">
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
                                                <label>Bank Account *</label>
                                                <input id="name" name="bank" value="<?php echo $row['bank']."-".$row['account_no']; ?>" placeholder="Bank" readonly type="text" class="form-control required">
                                            </div>
                                             <div class="form-group col-lg-6">
                                                <label>Loan Date *</label>
                                                <input id="name" name="loan_date" placeholder="Loan Date" type="date" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Loan Type *</label>
                                                <select id="name" name="loan_type" class="form-control required">
                                                <option value="">--Select Loan Type--</option>
                                                <option value="Commodity Loan">Commodity Loan</option>
                                                <option value="Electronics Loan">Electronics Loan</option>
                                                <option value="Emergency Loan">Emergency Loan</option>
                                                <option value="Land Loan">Land Loan</option>
                                                <option value="Real Loan">Real Loan</option>
                                                <option value="Special Loan">Special Loan</option>
                                                </select>
                                                
                                            </div>
                                             <div class="form-group col-lg-6">
                                                <label>Loan Interest Percentage *</label>
                                                <select step="any" name="loan_percentage" id="loan_percentage" onkeyup="sum()" class="form-control required">
                                                <option value="">--Select Loan Percentage--</option>
                                                <option value="5%">5%</option>
                                                <option value="10%">10%</option>
                                                </select>
                                                
                                            </div>
                                            <div class="form-group col-lg-6">
              <label>Loan Amount</label>
              <input type="number" step="any" id="loan_amount" onkeyup="sum()" placeholder="Loan Amount"  class="form-control" title="Loan Amount" name="loan_amount">
          </div>
          <div class="form-group col-lg-6">
                                                <label>Loan Payment Period *</label>
                                                <select step="any" name="loan_period" id="loan_period" onkeyup="sum()" class="form-control required">
                                                <option value="">--Select Loan Payment Period--</option>
                                                <option value="1">1 Months</option>
                                                <option value="2">2 Months</option>
                                                <option value="3">3 Months</option>
                                                <option value="4">4 Months</option>
                                                <option value="5">5 Months</option>
                                                <option value="6">6 Months</option>
                                                <option value="7">7 Months</option>
                                                <option value="8">8 Months</option>
                                                <option value="9">9 Months</option>
                                                <option value="10">10 Months</option>
                                                <option value="11">11 Months</option>
                                                <option value="12">12 Months</option>
                                                <option value="13">13 Months</option>
                                                <option value="14">14 Months</option>
                                                <option value="15">15 Months</option>
                                                <option value="16">16 Months</option>
                                                <option value="17">17 Months</option>
                                                <option value="18">18 Months</option>
                                                <option value="19">19 Months</option>
                                                <option value="20">20 Months</option>
                                                <option value="21">21 Months</option>
                                                <option value="22">22 Months</option>
                                                <option value="23">23 Months</option>
                                                <option value="24">24 Months</option>
                                                
                                                </select>
                                                
                                            </div>
                                            
                                                                                       
                                             
          <div class="form-group col-lg-6">
              <label>Loan Interest</label>
              <input type="number" step="any" id="loan_interest" onkeyup="sum()" readonly placeholder="Loan Interest"  class="form-control" title="Loan Interest" name="loan_interest">
          </div>
                                            
                                            
                                            
          <div class="form-group col-lg-12">
                                <input type="submit" name="submit" value="Add New Loan" class="btn btn-danger block m-b pull-right">            </div>
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
                toastr.success('to Add New Loan', 'Welcome <?php echo $session_fullname ?>');

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
