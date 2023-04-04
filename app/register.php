<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HGL GUEST HOUSE | Admin Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.fw.png">

</head>

<body style="background-image: url(img/FEZ_0014.jpg); background-size:cover">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>


            </div>
            <h3>HGL Admin Registration</h3>
            <form class="m-t" role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data">
            <?php
include("db_conn.php");


$rand = rand(00000,99999);
		$today = date("dmy");
		$time = date("His");
		$ID = "HGL/".$today."/".$rand;
		
	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$staff_id=trim(addslashes($_REQUEST['staff_id']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$email=trim(addslashes($_REQUEST['email']));
		$phone=trim(addslashes($_REQUEST['phone']));
		$password=trim(addslashes($_REQUEST['password']));
		$station=trim(addslashes($_REQUEST['station']));
		$designation=trim(addslashes($_REQUEST['designation']));
		$passport = $_FILES["data"]['name'];
		$target="staff/";
		$target=$target.$_FILES["data"]['name'];

		
	
			  
		/*	  $yyy = $_FILES['data']['name'];
			  $_SESSION['pic']=$yyy;*/
		
if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){		
$sql="INSERT INTO staff_id (staff_id, fullname, email, phone, password, station, designation, passport) VALUES ('$staff_id','$fullname','$email','$phone',PASSWORD('$password'),'$station','$designation','$passport')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert('$fullname ADMIN Staff Record Successfully Created')
	location.href='index.php'</script>";
}else{
	echo "<script>alert('Error in Uploading Passport')</script>";	
}
	mysqli_close($conn);
	}
	
	
?>
                

                <div class="form-group">
                    <input type="text" name="staff_id" value="<?php echo $ID; ?>" readonly class="form-control" placeholder="Staff ID" required>
                </div>
                <div class="form-group">
                    <input type="text" name="fullname" class="form-control" placeholder="Fullname" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Phone No" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <select class="form-control" name="station" required>
                    <option value="">--Select Station--</option>
                    <option value="Akure">Akure</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Togo">Togo</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="designation" class="form-control" placeholder="Designation" required>
                </div>
                <div class="form-group">
                    <input type="file" onchange="readURL(this);" name="data" class="form-control" placeholder="Passport" accept="image/jpeg" required>
                </div>
                <div class="form-group">
<style>
img{
max-width:80px; max-height:80px;
}
input[type=file]{
padding:10px;}
</style>

<script>
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result);
};

reader.readAsDataURL(input.files[0]);
}
}
</script>

<img id="blah" class="img-circle" />

</div>
               
                </div>
                <input type="submit" name="submit" value="Register" style="background-color:#009640" class="btn btn-primary block full-width m-b">

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="index.php">Login</a>
            </form>
            <p class="m-t"> <small>Copyright &copy; <?php include('copyright.inc.php'); ?> - <strong>HGL GUEST HOUSE</strong></small><br>
            <small>All rights reserved. Powered by <a href="https://wetindey.us" target="_blank" style="color:#009640">Wetin Dey Inc.</a></small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
                toastr.success('Admin Registration', 'Welcome to HGL GUEST HOUSE');

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
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
