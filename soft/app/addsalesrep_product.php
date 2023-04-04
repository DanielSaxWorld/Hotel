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

    <title><?php echo $session_business_name; ?> | Sales Rep Add Product</title>

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

    <?php
include('db_conn.php');
if(isset($_REQUEST['salesrep_id'])){
$sql = "SELECT * FROM salesrep WHERE salesrep_id='$_REQUEST[salesrep_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);


?>


        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5><img src="img/hgl_logo.fw.png" height="30"> Sales Rep | Add Product | <?php echo $row["fullname"]; ?> </h5>
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


                            <form class="form-horizontal" method="post">


                            <?php
include("db_conn.php");
$rand = rand(000,999);
			$today = date("dmy");
						$time = date("His");
						$stock = "STOCK".$today.$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['addproduct_salesrep'])){
		$salesrep_id=trim(addslashes($_REQUEST['salesrep_id']));
		$phone=trim(addslashes($_REQUEST['phone']));
		$location=trim(addslashes($_REQUEST['location']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$stockno=trim(addslashes($_REQUEST['stockno']));
		$date=trim(addslashes($_REQUEST['date']));
		$product_name=trim(addslashes($_REQUEST['product_name']));
		$category=trim(addslashes($_REQUEST['category']));
		$price=trim(addslashes($_REQUEST['price']));
		$qty=trim(addslashes($_REQUEST['qty']));

        $sql1 = "INSERT INTO products_salesrep (salesrep_id, fullname, phone, location, gen_name, date, product_name, product_code, price, qty) VALUES ('$salesrep_id','$fullname','$phone','$location','$stockno','$date','$product_name','$category','$price','$qty')";

        mysqli_query($conn, $sql1) or die(mysqli_error($conn));
        $num = mysqli_insert_id($conn);
        if (mysqli_affected_rows($conn) != 1) {
            $message = "Error inserting the application information.";
        }

        echo "<script>alert('Sales Rep Product Successfully Added')
location.href='viewsalesrep_product.php?salesrep_id=$_REQUEST[salesrep_id]'</script>";
    }



?>

                    <input type="hidden" name="salesrep_id" readonly value="<?php echo $row['salesrep_id']; ?>" class="form-control" required>


                    <input type="hidden" name="phone" readonly value="<?php echo $row['phone']; ?>" placeholder="Phone No" class="form-control" required>

                    <input type="hidden" name="location" readonly value="<?php echo $row['location']; ?>" placeholder="Location" class="form-control" required>



                    <div class="form-group">
                    <label class="col-lg-3 control-label">Name:</label>
                    <div class="col-lg-9">
                    <input type="text" name="fullname" readonly value="<?php echo $row['fullname']; ?>" placeholder="Salesrep Name" class="form-control" required>

                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Stock No:</label>
                    <div class="col-lg-9">
                    <input type="text" name="stockno" readonly value="<?php echo $stock; ?>"  placeholder="Stock No" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Date:</label>
                    <div class="col-lg-9">
                    <input type="date" name="date" placeholder="Stock Date" class="form-control" required>
                    </div>
                    </div>


                    <div class="form-group">
                    <label class="col-lg-3 control-label">Product Name:</label>
                    <div class="col-lg-9">
                    <input type="text" name="product_name"  placeholder="Product Name" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Category:</label>
                    <div class="col-lg-9">
                    <select name="category" class="form-control" required="required">
                    <option value="">--Select Categogy--</option>
                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT category FROM product_ctg ";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if (mysqli_num_rows($result2) > 0) {
                                        while ($row = mysqli_fetch_array($result2)) {
                                    ?>
                                            <option value="<?php echo $row['category'] ?>"> <?php echo $row['category'] ?> </option><?php }
                                                                                                                                    } ?>
                    </select>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Price:</label>
                    <div class="col-lg-9">
                    <input type="number" name="price" placeholder="Price" class="form-control" required>
                    </div>
                    </div>



                    <div class="form-group">
                    <label class="col-lg-3 control-label">Quantity:</label>
                    <div class="col-lg-9">
                    <input type="text" name="qty" placeholder="Quantity" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group" align="center">
                    <input type="submit" name="addproduct_salesrep" value="Add Product" class="btn btn-danger">
                    </div>
                    </form>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
<?php
}
?>


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
