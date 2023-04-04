<?php
include('session_reception.php');
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

    <title><?php echo $session_business_name; ?> | New Guest</title>

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

    <?php include 'menus6.php'; ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Registration of New Guest</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="receptionist.php">Dashboard</a>
                        </li>

                        <li class="active">
                            <strong>Add New Guest</strong>
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
                            <h5>Registration of New Guest</h5>
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
                            <strong>Add New Guest</strong>

                            </h2>

                            <form id="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" class="wizard-big">
                            <?php
include("db_conn.php");


$rand = rand(100,999);
		$today = date("dmy");
		$time = date("His");
		$ID = "IBH"."G".$today.$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['newguest'])){
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$phone=trim(addslashes($_REQUEST['phone']));
        $address=trim(addslashes($_REQUEST['address']));
		$occupation=trim(addslashes($_REQUEST['occupation']));
		$emailreg=trim(addslashes($_REQUEST['email']));
		$gender=trim(addslashes($_REQUEST['gender']));
		$civic_status=trim(addslashes($_REQUEST['civic_status']));
		$vehicle_type=trim(addslashes($_REQUEST['vehicle_type']));
		$plate_no=trim(addslashes($_REQUEST['plate_no']));
		$vehicle_colour=trim(addslashes($_REQUEST['vehicle_colour']));
		$identification=trim(addslashes($_REQUEST['identification']));
		$nok_name=trim(addslashes($_REQUEST['nok_name']));
		$nok_phone=trim(addslashes($_REQUEST['nok_phone']));
		$valid_id = $_FILES["data"]['name'];
		$target="client_id/";
		$target=$target.$_FILES["data"]['name'];

if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){

//Check for duplicate record in database before inserting New Record
$check=mysqli_query($conn, "SELECT * FROM guest WHERE fullname='$fullname' OR phone='$phone'");
$checkrows=mysqli_num_rows($check);

if($checkrows>0) {
echo "<script>alert('Guest Already Exist in our Database')
location.href='receptionist.php'</script>";
} else {

    $email = "info@enpre.com.ng";
    $password = "enpre@2022";

    $message= "Welcome ".$fullname." to Imperial Boni Hotels & Resorts, thanks for registering as our guest.";

    $sender_name = "Imperial";
    $recipients = $phone;
    $forcednd = "1";
    $data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
    $data_string = json_encode($data);
    $ch = curl_init('https://api.bulksmslive.com/v2/app/sms'); curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string))); $result = curl_exec($ch); $res_array = json_decode($result);
    //print_r($res_array);

    $sql="INSERT INTO guest (uin, fullname, phone, `address`, occupation, email, gender, civic_status, vehicle_type, plate_no, vehicle_colour, identification, nok_name, nok_phone, valid_id) VALUES ('$uin','$fullname','$phone','$address','$occupation','$emailreg','$gender','$civic_status','$vehicle_type','$plate_no','$vehicle_colour','$identification','$nok_name','$nok_phone','$valid_id')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert('NEW Guest - $fullname - Record Successfully Added')
	location.href='guest_profile2.php?uin=".$_REQUEST['uin']."'</script>";
}
}
    }

	mysqli_close($conn);



?>

                                <h1>Personal Information</h1>
                                <fieldset>
                                    <h2>Personal Information</h2>
                                    <div class="row">
                                        <div class="col-lg-12">


                                                <input id="userName" value="<?php  echo $ID; ?>" readonly name="uin" type="hidden" placeholder="UIN" class="form-control required">

                                            <div class="form-group col-lg-6">
                                                <label>Fullname *</label>
                                                <input id="name" name="fullname" placeholder="Fullname" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Phone No *</label>
                                                <input id="name" name="phone" placeholder="Phone No" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Address *</label>
                                                <input id="address" name="address" placeholder="Address" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Occupation *</label>
                                                <input id="occupation" name="occupation" placeholder="Occupation" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Email *</label>
                                                <input id="email" name="email" placeholder="Email Address" type="text" class="form-control email">
                                            </div>


                                              <div class="form-group col-lg-6">
                                                <label>Gender *</label>
                                                <select id="name" name="gender" class="form-control required">
                                                <option value="">--Select Gender--</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                </select>

                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Civic Status *</label>
                                                <select id="name" name="civic_status" class="form-control required">
                                                <option value="">--Select Civic Status--</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Couple">Couple</option>
                                                <option value="Divorced">Divorced</option>
                                                <option value="Widowed">Widowed</option>
                                                <option value="Nill">Nill</option>
                                                </select>

                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Type of Vehicle *</label>
                                                <input id="name" name="vehicle_type" placeholder="Type of Vehicle" type="text" class="form-control">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Vehicle Plate No *</label>
                                                <input id="name" name="plate_no" placeholder="Vehicle Plate No" type="text" class="form-control">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Vehicle Colour *</label>
                                                <input id="name" name="vehicle_colour" placeholder="Vehicle Colour" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Mode of Identification *</label>
                                                <select id="name" name="identification" class="form-control required">
                                                <option value="">--Select Valid ID--</option>
                                                <option value="International Passport">International Passport</option>
                                                <option value="Voter's Card">Voter's Card</option>
                                                <option value="National ID Card">National ID Card</option>
                                                <option value="Driver's License">Driver's License</option>
                                                <option value="Others">Others</option>
                                                </select>

                                            </div>

                                             <div class="form-group col-lg-6">
                                                <label>Upload ID/Photo *</label>
                                                <input id="name" onchange="readURL(this);" name="data" type="file" placeholder="Passport" accept="image/jpeg" class="form-control required">
                                            </div>

<div class="form-group col-lg-6">
<style>
img{
max-width:150px; max-height:150px;
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

<img id="blah"  />

</div>


                                    </div>

                                </fieldset>
                                <h1>Next of Kin</h1>
                                <fieldset>
                                    <h2>Next of Kin</h2>
                                    <div class="row">
                                        <div class="col-lg-12">
                                             <div class="form-group col-lg-6">
                                                <label>Next of Kin Name *</label>
                                                <input id="name" name="nok_name" placeholder="Next of Kin (Name)" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Next of Kin Phone No *</label>
                                                <input id="name" name="nok_phone" type="text" placeholder="Next of Kin (Phone No)" class="form-control">
                                            </div>
 <div class="form-group col-lg-6">
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                    </div>
 <div class="form-group col-lg-6">
<input type="submit" name="newguest" value="Submit" class="btn btn-primary block m-b" onclick="return confirm('Are you sure to register this Guest?');">
</div>

</div>

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
                toastr.success('Add New Guest', '<?php echo $session_business_name; ?>');

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
