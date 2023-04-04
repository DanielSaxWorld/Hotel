<?php
include('db_conn.php');

if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM register WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Akure PHP Class | Update</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

               <!-- <h1 class="logo-name">IN+</h1>-->

            </div>
            <h3>Akure PHP Class</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data">
             <?php
include("db_conn.php");
error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$email=trim(addslashes($_REQUEST['email']));
		$phone=trim(addslashes($_REQUEST['phone']));
		$dob=trim(addslashes($_REQUEST['dob']));
		
		
//update table data
$sql1 = "UPDATE register SET fullname='$fullname', email='$email', phone='$phone', dob='$dob' WHERE uin='$_REQUEST[uin]'";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
						
$result1 = mysqli_query($conn, $sql1);

// if successfully update
if($result1) {
	echo "<script>alert('$fullname Updated Successfully')
	location.href='table.php'</script>";
	}
	else{
		echo "<script>alert('Sorry! Update Not Successful!')
	location.href='index.php'</script>";
	}
}
mysqli_close($conn);


?>

                <div class="form-group">
                    <input type="text" name="uin" value="<?php echo $row['uin']; ?>" class="form-control" placeholder="UIN" readonly>
                </div>
                <div class="form-group">
                    <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" class="form-control" placeholder="Fullname" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control" placeholder="Phone No" required>
                </div>
                <div class="form-group">
                    <input type="date" name="dob" value="<?php echo $row['dob']; ?>" class="form-control" placeholder="dob" required>
                </div>
                
                
                
                <input type="submit" name="submit" class="btn btn-danger block full-width m-b" value="Update">
 
                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a>
            </form>
            <p class="m-t"> <small>Copyright &copy; 2018</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
