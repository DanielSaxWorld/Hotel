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

    <title><?php echo $session_business_name; ?> | Update Product</title>

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

    <?php include 'super_menus.php'; ?>



        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5><img src="img/hgl_logo.fw.png" height="30"> Update Product </h5>
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

                        <?php
	include('connect.php');
	$product_id=$_GET['product_id'];
	$result = $db->prepare("SELECT * FROM products_salesrep WHERE product_id= :userid");
	$result->bindParam(':userid', $product_id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
                            <form class="form-horizontal" method="post">

                            <?php
include("db_conn.php");
$rand = rand(000,999);
			$today = date("dmy");
						$time = date("His");
						$stock = "STOCK".$today.$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['updateproduct'])){
		$code=trim(addslashes($_REQUEST['code']));
		$gen=trim(addslashes($_REQUEST['gen']));
		$stock2=trim(addslashes($_REQUEST['stock']));
		$name=trim(addslashes($_REQUEST['name']));
		$date=trim(addslashes($_REQUEST['date']));
		$price=trim(addslashes($_REQUEST['price']));
		$qty=trim(addslashes($_REQUEST['qty']));
        $newqty=trim(addslashes($_REQUEST['newqty']));
        $totalstock=trim(addslashes($_REQUEST['totalstock']));



$sql = "UPDATE products_salesrep SET product_name='$code', gen_name='$stock2', product_code='$name',  price='$price', qty='$totalstock', date='$date' WHERE product_id=$_REQUEST[product_id]";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

	echo "<script>alert('Product Successfully Updated')
location.href='viewsalesrep_product.php?salesrep_id=$row[salesrep_id]'</script>";
	}

	mysqli_close($conn);


?>
                    <div class="form-group">
                    <label class="col-lg-3 control-label">Brand Name:</label>
                    <div class="col-lg-9">
                    <input type="text" name="code" placeholder="Brand Name" value="<?php echo $row['product_name']; ?>" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Old Stock No:</label>
                    <div class="col-lg-9">
                    <input type="text" name="gen" readonly value="<?php echo $row['gen_name']; ?>" placeholder="Generic Name" class="form-control" required>
                    </div>
                    </div>

								<div class="form-group">
                    <label class="col-lg-3 control-label">New Stock No:</label>
                    <div class="col-lg-9">
                    <input type="text" name="stock" readonly value="<?php echo $stock; ?>" placeholder="New Stock No" class="form-control" required>
                    </div>
                    </div>

                    <script type="text/javascript">

function sumstock()
{
var qty = parseInt(document.getElementById("qty").value);
var newqty = parseInt(document.getElementById("newqty").value);


if(qty.value=="")
{
VideoPlaybackQuality.value = 0;
}
if(newqty.value=="")
{
newqty.value = 0;
}


var sum2stock = (qty+newqty).toFixed(2);
document.getElementById("totalstock").value=sum2stock;
}
</script>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Current Stock:</label>
                    <div class="col-lg-9">
                    <input type="text" name="qty" step="any" id="qty" onkeyup="sumstock()" placeholder="Current Stock" value="<?php echo $row['qty']; ?>" readonly class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">New Stock:</label>
                    <div class="col-lg-9">
                    <input type="text" name="newqty" step="any" id="newqty" onkeyup="sumstock()" placeholder="New Stock" value="0"  class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Total Stock:</label>
                    <div class="col-lg-9">
                    <input type="text" name="totalstock" step="any" value="<?php echo $row['qty']; ?>" id="totalstock" onkeyup="sumstock()" placeholder="Quantity"  class="form-control" readonly required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Date:</label>
                    <div class="col-lg-9">
                    <input type="date" name="date" value="<?php echo $row['date']; ?>" placeholder="Purchase Date" class="form-control" required>
                    </div>
                    </div>

                    <!--<script type="text/javascript">

function sum()
{
var o_price2 = parseInt(document.getElementById("o_price2").value);
var price2 = parseInt(document.getElementById("price2").value);


if(o_price2.value=="")
{
o_price2.value = 0.00;
}
if(price2.value=="")
{
price2.value = 0.00;
}


var sum2 = (price2-o_price2).toFixed(2);
document.getElementById("profit2").value=sum2;
}
</script>-->
                     
                    <div class="form-group">
                    <label class="col-lg-3 control-label">Price:</label>
                    <div class="col-lg-9">
                    <input type="number" name="price" step="any" id="price2" value="<?php echo $row['price']; ?>" onkeyup="sum()" placeholder="Retail Price" class="form-control" required>
                    </div>
                    </div>
								
								
                    

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Category:</label>
                    <div class="col-lg-9">
                    <select name="name" class="form-control" required="required">
                    <option value="<?php echo $row['product_code']; ?>"><?php echo $row['product_code']; ?></option>
                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT category FROM product_ctg ";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if (mysqli_num_rows($result2) > 0) {
                                        while ($row = mysqli_fetch_array($result2)) {
                                    ?>
                                            <option value="<?php echo $row['category'] ?>"> <?php echo $row['category'] ?> </option><?php }
                                                                                                                                    }} ?>
                    </select>
                    </div>
                    </div>

                    <div class="form-group" align="center">
                    <input type="submit" name="updateproduct" value="Update Product" class="btn btn-danger">
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
                toastr.success('to Update Product', 'Welcome <?php echo $session_fullname ?>');

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
