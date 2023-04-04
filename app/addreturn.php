<?php
include('session.php');
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

    <title>CLASSIC GLOBAL COMMUNICATIONS | Product Return</title>

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

    <?php include 'menus.php'; ?>
        
                   
            
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5><img src="img/hgl_logo.fw.png" height="30"> Product Return </h5>
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
                        
                                                            
                            <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                            
                            <?php
include("db_conn.php");
$rand = rand(000,999);
		$today = date("dmy");
		$time = date("His");
		$ID = "PR".$today.$rand;
	error_reporting(E_ALL);
	if(isset($_REQUEST['addreturn'])){
		$uin=trim(addslashes($_REQUEST['uin']));
		$returndate=trim(addslashes($_REQUEST['returndate']));
		$product_brand=trim(addslashes($_REQUEST['product_brand']));
		$stock_no=trim(addslashes($_REQUEST['stock_no']));
		$product_imei=trim(addslashes($_REQUEST['product_imei']));
		$customer_name=trim(addslashes($_REQUEST['customer_name']));
		$customer_phone_no=trim(addslashes($_REQUEST['customer_phone_no']));
		$reason4return=trim(addslashes($_REQUEST['reason4return']));
		
		

$sql1="INSERT INTO `return` (uin, returndate, product_brand, stock_no, product_imei, customer_name, customer_phone_no, reason4return) VALUES ('$uin','$returndate','$product_brand','$stock_no','$product_imei','$customer_name','$customer_phone_no','$reason4return')";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
						
	echo "<script>alert('Product Return Successfully Added')
location.href='product_return.php'</script>";
	}

	
	mysqli_close($conn);
	

?>
                    <input type="hidden" name="uin" value="<?php echo $ID; ?>"  class="form-control" required> 
                    
                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select  Date:</label>
                    <div class="col-lg-9">
                    <input type="date" name="returndate"  class="form-control" required> 
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label class="col-lg-3 control-label">Product Brand Name:</label>
                    <div class="col-lg-9">
                    <input type="text" name="product_brand" placeholder="Product Brand Name" class="form-control" required> 
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label class="col-lg-3 control-label">Stock No:</label>
                    <div class="col-lg-9">
                    <input type="text" name="stock_no" placeholder="Stock No" class="form-control" required>
                    </div>
                    </div>
                    
                   
                    
                    <div class="form-group">
                    <label class="col-lg-3 control-label">Product IMEI:</label>
                    <div class="col-lg-9">
                    <input type="text" name="product_imei" placeholder="Product IMEI" class="form-control" required>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label class="col-lg-3 control-label">Customer Name:</label>
                    <div class="col-lg-9">
                    <input type="text" name="customer_name"  placeholder="Customer Name" class="form-control" required>
                    </div>
                    </div>

                  
                     <div class="form-group">
                    <label class="col-lg-3 control-label">Customer Phone No:</label>
                    <div class="col-lg-9">
                    <input type="text" name="customer_phone_no" placeholder="Customer Phone No" class="form-control" required>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label class="col-lg-3 control-label">Reason for Return:</label>
                    <div class="col-lg-9">
                    <textarea name="reason4return" placeholder="Reason for Return" class="form-control" required></textarea>
                    </div>
                    </div>
                    
                    <div class="form-group" align="center">
                    <input type="submit" name="addreturn" value="Add Product Return" class="btn btn-danger">
                    </div>
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
                toastr.success('to Product Return', 'Welcome <?php echo $session_fullname ?>');

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
