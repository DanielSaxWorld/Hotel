<?php
date_default_timezone_set('Africa/Lagos');
$rand = rand(1000,9999);
$randtime =date("his");
$randday = date("dm");

$finalcode = 'AAS-' . $randtime.$randday.$rand;
?>

<?php
$rand2 = rand(1000,9999);
$randtime2 =date("his");
$randday2 = date("dm");
$finalcode2 = 'WSD-' . $randtime2.$randday2.$rand2;
?>

<?php
$rand3 = rand(1000,9999);
$randtime3 =date("his");
$randday3 = date("dm");
$finalcode3 = 'BSD-' . $randtime3.$randday3.$rand3;
?>

<div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="staff/<?php echo $session_passport; ?>" height="50" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $session_fullname; ?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo $session_designation; ?> <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <!--<li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>-->
                                <li><a data-toggle="modal" data-target="#changepassword">Change Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>

                        <div class="logo-element">
                           <img src="img/favicon.fw.png">
                        </div>
                    </li>
                    <li class="active">
                        <a href="supermarket.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li><a href="supermarket.php">Go to Dashboard</a></li>

                	    </ul>
                    </li>


                     <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Sales</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
<li class="active"><a href="sales5.php?id=cash&invoice=<?php echo $finalcode ?>">Add Sales</a>  </li>
    <li style="text-align: center">-------------Reports--------------</li>

                            <li><a data-toggle="modal" data-target="#sales5bydate">Report by date</a></li>
							<li><a data-toggle="modal" data-target="#sales5byproduct">Report by Product</a></li>
                        </ul>
                    </li>



                </ul>
            </div>
        </nav>
        </div>


        <div id="page-wrapper" class="gray-bg dashbard-1">

        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="search3.php">
                <div class="form-group">
                    <input type="text" name="search" placeholder="Enter Product Name..." class="form-control" required name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                   <span class="font-extra-bold m-t-xl m-b-xs" style="font-weight:bold">
                                   <script language=javascript> todaysDate = new Date(); dayarray = new
	  Array("Sun", "Mon", "Tues", "Wed", "Thur", "Fri",
	  "Saturday"); montharray = new Array("Jan", "Feb", "Mar", "Apr",
	  "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
	  document.write(dayarray[todaysDate.getDay()] + ", " +
	  montharray[todaysDate.getMonth()] + " " + todaysDate.getDate() + ", "); if
	  (todaysDate.getYear()
	  <1000){ document.write(todaysDate.getYear() + 1900); } else { document.write(todaysDate.getYear());
	  } </script>

                                    </span> &nbsp;  | &nbsp; <span class="font-extra-bold m-t-xl m-b-xs" id="time" style="font-weight:bold">
<script>
function checkTime(i) {
if (i < 10) {
i = "0" + i;
}
return i;
}

function startTime() {
var today = new Date();
var h = today.getHours();
var m = today.getMinutes();
var s = today.getSeconds();
// add a zero in front of numbers<10
m = checkTime(m);
s = checkTime(s);
document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
t = setTimeout(function () {
startTime()
}, 500);
}
startTime();
</script>
</span> &nbsp; | &nbsp; <span class="m-r-sm text-muted welcome-message">Welcome to <strong><?php echo $session_business_name; ?> (<?php echo $staff_id; ?>)</strong>.</span>
                </li>

                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>

            </ul>
        </nav>
        </div>






                             <!--Add product Line-->
        <div class="modal inmodal col-xs-12" id="addproduct" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-dropbox"></i> Add Product</h3><hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <?php
include("db_conn.php");


	error_reporting(E_ALL);
	if(isset($_REQUEST['addproduct'])){
		$code=trim(addslashes($_REQUEST['code']));
		$gen=trim(addslashes($_REQUEST['gen']));
		$name=trim(addslashes($_REQUEST['name']));
		$date_arrival=trim(addslashes($_REQUEST['date_arrival']));
		$o_price=trim(addslashes($_REQUEST['o_price']));
		$price=trim(addslashes($_REQUEST['price']));
		$qty=trim(addslashes($_REQUEST['qty']));
		$date_arrival=trim(addslashes($_REQUEST['date_arrival']));
		$profit=trim(addslashes($_REQUEST['profit']));

		$qty_sold= $qty;
		$total=$price * $qty;
		$total_profit = $profit * $qty;



$sql1="INSERT INTO products (product_code, gen_name, product_name, o_price, price, profit, qty, qty_sold, date_arrival, total, total_profit) VALUES ('$code','$gen','$name','$o_price','$price','$profit','$qty','$qty_sold','$date_arrival','$total','$total_profit')";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

	echo "<script>alert('Product Successfully Added')
location.href='inventory.php'</script>";
	}

	mysqli_close($conn);


?>


                    <div class="form-group">
                    <label class="col-lg-3 control-label">Brand Name:</label>
                    <div class="col-lg-9">
                    <input type="text" name="code" placeholder="Brand Name" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Barcode:</label>
                    <div class="col-lg-9">
                    <input type="text" name="gen" placeholder="Generic Name" class="form-control" required>
                    </div>
                    </div>

                     <div class="form-group">
                    <label class="col-lg-3 control-label">Category:</label>
                    <div class="col-lg-9">
                    <select name="name" class="form-control" required="required">
                    <option value="">--Select Category--</option>
                    <option value="Toiletries">Toiletries</option>
                    <option value="Groceries">Groceries</option>
                    <option value="Beverages">Beverages</option>
                    <option value="Cosmetics">Cosmetics</option>
                    <option value="Drinks">Drinks</option>
                    <option value="Wine">Wine</option>
                    <option value="Kitchen Utensils">Kitchen Utensils</option>
                    <option value="Household Items">Household Items</option>
                    <option value="Gift Items">Gift Items</option>
                    <option value="Toys">Toys</option>
                    <option value="Jeweries">Jeweries</option>
                    <option value="Shoes">Shoes</option>
                    <option value="Clothing">Clothing</option>
                    <option value="Stationary">Stationary</option>
                    <option value="Food Stuff (Fresh)">Food Stuff (Fresh)</option>
                    <option value="Food Stuff (Frozen)">Food Stuff (Frozen)</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Baby Care">Baby Care</option>
                    <option value="Simple Tools">Simple Tools</option>
                    <option value="Fashion & Beauty Products">Fashion & Beauty Products</option>
                    </select>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Purchase Date:</label>
                    <div class="col-lg-9">
                    <input type="date" name="date_arrival" placeholder="Purchase Date" class="form-control" required>
                    </div>
                    </div>

                    <script type="text/javascript">

function sum()
{
var o_price = parseInt(document.getElementById("o_price").value);
var price = parseInt(document.getElementById("price").value);


if(o_price.value=="")
{
o_price.value = 0.00;
}
if(price.value=="")
{
price.value = 0.00;
}


var sum = (price-o_price).toFixed(2);
document.getElementById("profit").value=sum;
}
</script>
                     <div class="form-group">
                    <label class="col-lg-3 control-label">Purchase Price:</label>
                    <div class="col-lg-9">
                    <input type="text" name="o_price" step="any" id="o_price" onKeyUp="sum()" placeholder="Purchase Price" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Selling Price:</label>
                    <div class="col-lg-9">
                    <input type="text" name="price" step="any" id="price" onKeyUp="sum()" placeholder="Selling Price" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Profit:</label>
                    <div class="col-lg-9">
                    <input type="text" name="profit" step="any" readonly id="profit"  placeholder="Profit" class="form-control" required>
                    </div>
                    </div>


                    <div class="form-group">
                    <label class="col-lg-3 control-label">Quantity:</label>
                    <div class="col-lg-9">
                    <input type="text" name="qty" placeholder="Quantity" class="form-control" required>
                    </div>
                    </div>

                    <div class="col-lg-12">
                    <input type="submit" name="addproduct" value="Save Product" class="btn btn-primary">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Add Product Line-->

<!--Start of Change Password-->
<div class="modal inmodal col-xs-12" id="changepassword" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-secure"></i> Change Password </h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<?php
                        include("db_conn.php");


                        error_reporting(E_ALL);
                        if (isset($_REQUEST['changepassword'])) {
                            $newpassword = trim(addslashes($_REQUEST['newpassword']));

                            $sql1 = "UPDATE staff_id SET password=PASSWORD('$newpassword') WHERE staff_id='$staff_id'";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Password Successfully Changed')
location.href='logsuper.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">New Password:</label>
                            <div class="col-lg-9">
                                <input type="password" name="newpassword" placeholder="Enter New Password" class="form-control" required="required">
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <input type="submit" name="changepassword" value="Change Password" class="btn btn-danger" onclick="return confirm('Are you sure to change password?');">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Change password-->


                            <!--Add New Staff Line-->
        <div class="modal inmodal col-xs-12" id="addstaff" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-user"></i> Add New Staff</h3><hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <?php
include("db_conn.php");


$rand = rand(000,999);
		$today = date("dmy");
		$time = date("His");
		$ID = "STJ/S".$today.$time;

	error_reporting(E_ALL);
	if(isset($_REQUEST['addstaff'])){
		$staff_no=trim(addslashes($_REQUEST['staff_no']));
		$staff_name=trim(addslashes($_REQUEST['staff_name']));
		$staff_email=trim(addslashes($_REQUEST['staff_email']));
		$staff_phone=trim(addslashes($_REQUEST['staff_phone']));
		$staff_address=trim(addslashes($_REQUEST['staff_address']));
		$staff_designation=trim(addslashes($_REQUEST['staff_designation']));

$sql1="INSERT INTO workers (staff_no, staff_name, staff_email, staff_phone, staff_address, staff_designation) VALUES ('$staff_no','$staff_name','$staff_email','$staff_phone','$staff_address','$staff_designation')";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

	echo "<script>alert('$staff_name Successfully Added')
location.href='staff_list.php'</script>";
	}

	mysqli_close($conn);


?>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Staff No:</label>
                    <div class="col-lg-9">
                    <input type="text" name="staff_no" value="<?php echo $ID; ?>" placeholder="Staff No" readonly class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Staff Name:</label>
                    <div class="col-lg-9">
                    <input type="text" name="staff_name" placeholder="Staff Name" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Staff Email:</label>
                    <div class="col-lg-9">
                    <input type="email" name="staff_email" placeholder="Staff Email" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Staff Phone No:</label>
                    <div class="col-lg-9">
                    <input type="text" name="staff_phone" placeholder="Staff Phone" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Staff Address:</label>
                    <div class="col-lg-9">
                    <input type="text" name="staff_address" placeholder="Staff Residential Address" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Designation:</label>
                    <div class="col-lg-9">
                    <input type="text" name="staff_designation" placeholder="Staff Designation" class="form-control" required>
                    </div>
                    </div>



                    <div class="col-lg-12">
                    <input type="submit" name="addstaff" value="Add New Staff" class="btn btn-primary">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Add New Staff Line-->



                             <!--Invevtory by Date-->
        <div class="modal inmodal col-xs-12" id="inventorybydate" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-fax"></i> Inventory Report by Date</h3><hr>
                    <form class="form-horizontal" method="post" action="inventorybydate.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>

                    <div class="col-lg-12">
                    <input type="submit" name="inventorybydate" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Inventory by Date-->


                            <!--Sales by Date-->
        <div class="modal inmodal col-xs-12" id="salesbydate" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-shopping-cart"></i> Sales Report by Date</h3><hr>
                    <form class="form-horizontal" method="post" action="salesbydate.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>

                    <div class="col-lg-12">
                    <input type="submit" name="salesbydate" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Sales by Date-->

                            <!--Sales2 by Date-->
        <div class="modal inmodal col-xs-12" id="salesbydate" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-shopping-cart"></i> Sales Report by Date</h3><hr>
                    <form class="form-horizontal" method="post" action="sales5bydate.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>

                    <div class="col-lg-12">
                    <input type="submit" name="sales5bydate" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Sales2 by Date-->


			<!--Sales2 by Product-->
        <div class="modal inmodal col-xs-12" id="sales5byproduct" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-shopping-cart"></i> Sales Report by Product</h3><hr>
                    <form class="form-horizontal" method="post" action="sales5byproduct.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>
						<div class="form-group">
                            <label class="col-lg-3 control-label">Select Product:</label>
                            <div class="col-lg-9">
                                <select name="product_code" class="form-control" required="required">
                                    <option value="">--Select Product--</option>
                                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT product_code FROM products ";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if (mysqli_num_rows($result2) > 0) {
                                        while ($row = mysqli_fetch_array($result2)) {
                                    ?>
                                            <option value="<?php echo $row['product_code'] ?>"> <?php echo $row['product_code'] ?> </option><?php }
                                                                                                                                    } ?>
                                </select>
                            </div>
                        </div>

                    <div class="col-lg-12">
                    <input type="submit" name="sales5byproduct" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Sales2 by Product-->







                             <!--Invevtory by Brand-->
        <div class="modal inmodal col-xs-12" id="inventorybybrand" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-fax"></i> Inventory Report by Brand</h3><hr>
                    <form class="form-horizontal" method="post" action="inventorybybrand.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>

                     <div class="form-group">
                    <label class="col-lg-3 control-label">Select Product:</label>
                    <div class="col-lg-9">
                    <select name="product_code" class="form-control" required="required">
                    <option value="">--Select Product--</option>
                    <?php
		 include('db_conn.php');
 $sql2 = "SELECT product_code FROM products ";
	 $result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	while($row = mysqli_fetch_array($result2)) {
	 ?>
     <option value="<?php echo $row['product_code'] ?>"> <?php echo $row['product_code'] ?> </option><?php } }?>
                    </select>
                    </div>
                    </div>



                    <div class="col-lg-12">
                    <input type="submit" name="inventorybydate" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Inventory by Brand-->

                            <!--Add Opex Line-->
        <div class="modal inmodal col-xs-12" id="addopex" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-calculator"></i> Add Operating Expensis (OPEX)</h3><hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <?php
include("db_conn.php");


$rand = rand(000,999);
		$today = date("dmy");
		$time = date("His");
		$ID = "OPEX".$today.$time;

	error_reporting(E_ALL);
	if(isset($_REQUEST['addopex'])){
		$opex_id=trim(addslashes($_REQUEST['opex_id']));
		$opex_date=trim(addslashes($_REQUEST['opex_date']));
		$purpose=trim(addslashes($_REQUEST['purpose']));
		$description=trim(addslashes($_REQUEST['description']));
		$amount=trim(addslashes($_REQUEST['amount']));
		$c_o=trim(addslashes($_REQUEST['c_o']));


$sql1="INSERT INTO sopex (opex_id, opex_date, purpose, description, amount, c_o) VALUES ('$opex_id','$opex_date','$purpose','$description','$amount','$c_o')";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

	echo "<script>alert('Opex Successfully Added')
location.href='opex4.php'</script>";
	}

	mysqli_close($conn);


?>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Opex ID:</label>
                    <div class="col-lg-9">
                    <input type="text" name="opex_id" value="<?php echo $ID; ?>" placeholder="Opex ID" readonly class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date:</label>
                    <div class="col-lg-9">
                    <input type="date" name="opex_date" placeholder="Opex Date" class="form-control" required required="required">
                    </div>
                    </div>

                     <div class="form-group">
                    <label class="col-lg-3 control-label">Purpose:</label>
                    <div class="col-lg-9">
                    <select name="purpose" class="form-control" required="required">
                                    <option value="">--Select Category--</option>
                                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT category FROM opex_ctg ";
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
                    <label class="col-lg-3 control-label">Description:</label>
                    <div class="col-lg-9">
                    <input type="text" name="description" placeholder="Description" class="form-control" required required="required">
                    </div>
                    </div>

                     <div class="form-group">
                    <label class="col-lg-3 control-label">Amount:</label>
                    <div class="col-lg-9">
                    <input type="text" name="amount" step="any" id="amount" onKeyUp="sum()" placeholder="Amount" class="form-control" required required="required">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">C/O:</label>
                    <div class="col-lg-9">
                    <input type="text" name="c_o" step="any" id="C/O" onKeyUp="sum()" placeholder="C/O" class="form-control" required required="required">
                    </div>
                    </div>

                    <div class="col-lg-12">
                    <input type="submit" name="addopex" value="Add Opex" class="btn btn-primary">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Add Opex Line-->


                             <!--Add Opex Line-->
        <div class="modal inmodal col-xs-12" id="addopex2" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-calculator"></i> Add Operating Expensis (OPEX)</h3><hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <?php
include("db_conn.php");


$rand = rand(000,999);
		$today = date("dmy");
		$time = date("His");
		$ID = "OPEX".$today.$time;

	error_reporting(E_ALL);
	if(isset($_REQUEST['addopex2'])){
		$opex_id=trim(addslashes($_REQUEST['opex_id']));
		$opex_date=trim(addslashes($_REQUEST['opex_date']));
		$purpose=trim(addslashes($_REQUEST['purpose']));
		$description=trim(addslashes($_REQUEST['description']));
		$amount=trim(addslashes($_REQUEST['amount']));
		$c_o=trim(addslashes($_REQUEST['c_o']));


$sql1="INSERT INTO opex (opex_id, opex_date, purpose, description, amount, c_o) VALUES ('$opex_id','$opex_date','$purpose','$description','$amount','$c_o')";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

	echo "<script>alert('Opex Successfully Added')
location.href='opex2.php'</script>";
	}

	mysqli_close($conn);


?>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Opex ID:</label>
                    <div class="col-lg-9">
                    <input type="text" name="opex_id" value="<?php echo $ID; ?>" placeholder="Opex ID" readonly class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date:</label>
                    <div class="col-lg-9">
                    <input type="date" name="opex_date" placeholder="Opex Date" class="form-control" required required="required">
                    </div>
                    </div>

                     <div class="form-group">
                    <label class="col-lg-3 control-label">Purpose:</label>
                    <div class="col-lg-9">
                    <select name="purpose" class="form-control" required="required">
                                    <option value="">--Select Category--</option>
                                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT category FROM opex_ctg ";
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
                    <label class="col-lg-3 control-label">Description:</label>
                    <div class="col-lg-9">
                    <input type="text" name="description" placeholder="Description" class="form-control" required required="required">
                    </div>
                    </div>

                     <div class="form-group">
                    <label class="col-lg-3 control-label">Amount:</label>
                    <div class="col-lg-9">
                    <input type="text" name="amount" step="any" id="amount" onKeyUp="sum()" placeholder="Amount" class="form-control" required required="required">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">C/O:</label>
                    <div class="col-lg-9">
                    <input type="text" name="c_o" step="any" id="C/O" onKeyUp="sum()" placeholder="C/O" class="form-control" required required="required">
                    </div>
                    </div>

                    <div class="col-lg-12">
                    <input type="submit" name="addopex2" value="Add Opex" class="btn btn-primary">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Add Opex Line-->


                             <!--Opex by Date-->
        <div class="modal inmodal col-xs-12" id="opexbydate" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-fax"></i> Opex Report by Date</h3><hr>
                    <form class="form-horizontal" method="post" action="opexbydate.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>

                    <div class="col-lg-12">
                    <input type="submit" name="opexbydate" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Opex by Date-->

                            <!--Opex by Purpose-->
        <div class="modal inmodal col-xs-12" id="opexbypurpose" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-fax"></i> Opex Report by Purpose</h3><hr>
                    <form class="form-horizontal" method="post" action="opexbypurpose.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>

                     <div class="form-group">
                    <label class="col-lg-3 control-label">Purpose:</label>
                    <div class="col-lg-9">
                    <select name="purpose" class="form-control" required="required">
                    <option value="">--Select Purpose--</option>
                    <option value="Fueling">Fueling</option>
                    <option value="Transportation">Transportation</option>
                    <option value="Repairs">Repairs</option>
                    <option value="Tax">Tax</option>
                    <option value="Toiletries">Toiletries</option>
                    <option value="Boss">Boss</option>
                    <option value="Food">Food</option>
                    <option value="Others">Others</option>
                    </select>
                    </div>
                    </div>



                    <div class="col-lg-12">
                    <input type="submit" name="opexbypurpose" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Opex by Purpose-->


                             <!--Add Salary Line-->
        <div class="modal inmodal col-xs-12" id="addsalary" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-money"></i> Add Salary</h3><hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <?php
include("db_conn.php");


$rand = rand(000,999);
		$today = date("dmy");
		$time = date("His");
		$ID = "SALARY".$today.$time;

	error_reporting(E_ALL);
	if(isset($_REQUEST['addsalary'])){
		$salary_id=trim(addslashes($_REQUEST['salary_id']));
		$salary_date=trim(addslashes($_REQUEST['salary_date']));
		$staff_name=trim(addslashes($_REQUEST['staff_name']));
		$payment_type=trim(addslashes($_REQUEST['payment_type']));
		$month=trim(addslashes($_REQUEST['month']));
		$year=trim(addslashes($_REQUEST['year']));
		$salary_amount=trim(addslashes($_REQUEST['salary_amount']));


$sql1="INSERT INTO salary (salary_id, salary_date, staff_name, payment_type, month, year, salary_amount) VALUES ('$salary_id','$salary_date','$staff_name','$payment_type','$month','$year','$salary_amount')";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

	echo "<script>alert('Salary Successfully Added')
location.href='salary.php'</script>";
	}

	mysqli_close($conn);


?>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Salary ID:</label>
                    <div class="col-lg-9">
                    <input type="text" name="salary_id" value="<?php echo $ID; ?>" placeholder="Salary ID" readonly class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date:</label>
                    <div class="col-lg-9">
                    <input type="date" name="salary_date" placeholder="Salary Date" class="form-control" required>
                    </div>
                    </div>

                     <div class="form-group">
                    <label class="col-lg-3 control-label">Staff Name:</label>
                    <div class="col-lg-9">
                    <select name="staff_name" class="form-control" required="required">
                    <option value="">--Select Staff Name--</option>
                    <?php
		 include('db_conn.php');
 $sql2 = "SELECT staff_name FROM workers ";
	 $result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	while($row = mysqli_fetch_array($result2)) {
	 ?>
     <option value="<?php echo $row['staff_name'] ?>"> <?php echo $row['staff_name'] ?> </option><?php } }?>
                    </select>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Payment Type:</label>
                    <div class="col-lg-9">
                    <select name="payment_type" class="form-control" required="required">
                    <option value="">--Select Payment Type--</option>
                    <option value="Salary">Salary</option>
                    <option value="Allowance">Allowance</option>
                    <option value="IOU">IOU</option>
                    </select>
                    </div>
                    </div>

                     <div class="form-group">
                    <label class="col-lg-3 control-label">Select Month:</label>
                    <div class="col-lg-9">
                    <select name="month" class="form-control" required="required">
                    <option value="">--Select Month--</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                    </select>
                    </div>
                    </div>

                     <div class="form-group">
                    <label class="col-lg-3 control-label">Select Year:</label>
                    <div class="col-lg-9">
                    <select name="year" class="form-control" required="required">
                    <option value="">--Select Year--</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    </select>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Amount:</label>
                    <div class="col-lg-9">
                    <input type="text" name="salary_amount" step="any" id="Amount" onKeyUp="sum()" placeholder="Amount" class="form-control" required>
                    </div>
                    </div>

                    <div class="col-lg-12">
                    <input type="submit" name="addsalary" value="Add Salary" class="btn btn-primary">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Add Salary Line-->


                             <!--Salary by Date-->
        <div class="modal inmodal col-xs-12" id="salarybydate" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-money"></i> Salary Report by Date</h3><hr>
                    <form class="form-horizontal" method="post" action="salarybydate.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>

                    <div class="col-lg-12">
                    <input type="submit" name="salarybydate" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Salary by Date-->

                            <!--Salary by Staff-->
        <div class="modal inmodal col-xs-12" id="salarybystaff" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-fax"></i> Salary Report by Staff Name</h3><hr>
                    <form class="form-horizontal" method="post" action="salarybystaff.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Staff Name:</label>
                    <div class="col-lg-9">
                    <select name="staff_name" class="form-control" required="required">
                    <option value="">--Select Staff Name--</option>
                    <?php
		 include('db_conn.php');
 $sql2 = "SELECT staff_name FROM workers ";
	 $result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	while($row = mysqli_fetch_array($result2)) {
	 ?>
     <option value="<?php echo $row['staff_name'] ?>"> <?php echo $row['staff_name'] ?> </option><?php } }?>
                    </select>
                    </div>
                    </div>



                    <div class="col-lg-12">
                    <input type="submit" name="salarybystaff" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Salary by Staff-->

                             <!--Salary by Type-->
        <div class="modal inmodal col-xs-12" id="salarybytype" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-fax"></i> Salary Report by Payment Type</h3><hr>
                    <form class="form-horizontal" method="post" action="salarybytype.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>

                   <div class="form-group">
                    <label class="col-lg-3 control-label">Payment Type:</label>
                    <div class="col-lg-9">
                    <select name="payment_type" class="form-control" required="required">
                    <option value="">--Select Payment Type--</option>
                    <option value="Salary">Salary</option>
                    <option value="Allowance">Allowance</option>
                    <option value="IOU">IOU</option>
                    </select>
                    </div>
                    </div>



                    <div class="col-lg-12">
                    <input type="submit" name="salarybytype" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Salary by Type-->




     <!--Return Report by Date-->
        <div class="modal inmodal col-xs-12" id="returnbydate" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-mail-reply-all"></i> Return Report by Date</h3><hr>
                    <form class="form-horizontal" method="post" action="returnbydate.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>


                    <div class="col-lg-12">
                    <input type="submit" name="returnbydate" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Return Report by Date-->


                             <!--Check In by Room-->
        <div class="modal inmodal col-xs-12" id="checkinbyroom" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-map-marker"></i> Check-In Report by Room</h3><hr>
                    <form class="form-horizontal" method="post" action="checkinbyroom.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>

                   <div class="form-group">
                    <label class="col-lg-3 control-label">Select Room:</label>
                    <div class="col-lg-9">
                    <select name="room" class="form-control" required="required">
                    <option value="">--Select Room--</option>
                    <option value="Deluxe Twin Room">Deluxe Twin Room</option>
                    <option value="Deluxe Suite">Deluxe Suite</option>
                    <option value="Kings Suite">Kings Suite</option>
                    <option value="Executive Room">Executive Room</option>
                    <option value="Single Room">Single Room</option>
                    </select>
                    </div>
                    </div>

                    <div class="col-lg-12">
                    <input type="submit" name="checkinbyroom" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Check In by Room-->


                             <!--Check Out by Date-->
        <div class="modal inmodal col-xs-12" id="checkoutbydate" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-sign-out"></i> Check-Out Report by Date</h3><hr>
                    <form class="form-horizontal" method="post" action="checkoutbydate.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required>
                    </div>
                    </div>


                    <div class="col-lg-12">
                    <input type="submit" name="checkoutbydate" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Check Out by Date-->

