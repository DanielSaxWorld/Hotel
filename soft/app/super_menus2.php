<?php
date_default_timezone_set('Africa/Lagos');
$rand = rand(1000,9999);
$randtime =date("his");
$randday = date("dm");

$finalcode = 'MHS-' . $randtime.$randday.$rand;
?>

<?php
$rand2 = rand(1000,9999);
$randtime2 =date("his");
$randday2 = date("dm");
$finalcode2 = 'WS-' . $randtime2.$randday2.$rand2;
?>

<?php
$rand3 = rand(1000,9999);
$randtime3 =date("his");
$randday3 = date("dm");
$finalcode3 = 'WS-' . $randtime3.$randday3.$rand3;
?>

<?php
$rand4 = rand(1000,9999);
$randtime4 =date("his");
$randday4 = date("dm");
$finalcode4 = 'SR-' . $randtime3.$randday3.$rand3;
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
                    <a href="super_admin.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="super_admin.php">Go to Dashboard</a></li>

                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-university"></i> <span class="nav-label">ROOMS</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                    <li class="active"><a href="new_guest.php">Add Guest <span class="label label-primary pull-right">NEW</span></a> </li>
						<li class="active"><a href="super_view.php">View all Guest</a> </li>
						<li style="text-align: center">-------Check-In-Reports------</li>
                        <li><a data-toggle="modal" data-target="#checkinbydate">Report by Date</a></li>
                        <li><a data-toggle="modal" data-target="#checkinbystatus">Report by Status</a>
						</li>
                        <li><a data-toggle="modal" data-target="#checkinmodeofpayment">Report by Payment</a></li>
						<li><a data-toggle="modal" data-target="#checkinbyapartment">Report by Room</a>
						</li>


                        <li style="text-align: center">-------Check-Out-Reports--------</li>
                        <li><a data-toggle="modal" data-target="#checkoutbydate">Report by Date</a></li>
						<li><a data-toggle="modal" data-target="#checkoutbyapartment">Report by Room</a>
						</li>

                        <li style="text-align: center">-------ROOM-Reports--------</li>
                        <li class="active"><a href="roomoccupied.php">Occupied Room</a></li>
						<li class="active"><a href="roomavailable.php">Available Room</a>
						</li>


                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-cutlery"></i> <span class="nav-label">RESTAURANT</span><span class="label label-primary pull-right">MENU</span></a>
                    <ul class="nav nav-second-level collapse">

                        <!--<li><a data-toggle="modal" data-target="#addinventory">Add Inventory</a></li>-->
						<li class="active">-------------INVENTORY--------------</li>
                        <li><a data-toggle="modal" data-target="#addproduct_eatery">Add Product</a></li>
                        <li><a data-toggle="modal" data-target="#dinventorybydate">Inventory by Date</a></li>
                        <li><a data-toggle="modal" data-target="#dinventorybybrand">Inventory by Brand</a></li>
                        <li><a href="eatery_inventory.php">All Inventory</a></li>
                        <li><a href="esuper_inventory_print.php">Print Inventory</a></li>
                        <li><a href="esuper_inventory_outofstock.php">Out of Stock</a></li>
                        <li class="active" style="text-align: center">-------------SALES REPORTS--------------</li>
                        <li><a data-toggle="modal" data-target="#dsalesbydate">Sales by date</a></li>
						<li><a data-toggle="modal" data-target="#dsalesbyproduct">Sales by Product</a>
						</li>
                        <li style="text-align: center">-------------OPEX REPORT--------------</li>
                        <li><a data-toggle="modal" data-target="#dopexbydate">Opex by Date</a></li>
                        <li><a data-toggle="modal" data-target="#dopexbypurpose">Opex by Purpose</a></li>


                        <li class="active" style="text-align: center">-------------REVOKE SALES--------------</li>
                        <li class="active"><a data-toggle="modal" data-target="#drevokesalesbydate">Sales by Date</a> </li>
                    <li><a data-toggle="modal" data-target="#drevokesalesorderbydate">Sales Order by Date</a> </li>
                        <li class="active" style="text-align: center">-------------NET PROFIT--------------</li>
                        <li><a data-toggle="modal" data-target="#dnetprofit">Check Net Profit</a></li>
                    </ul>

                </li>

                <li>
                    <a href="#"><i class="fa fa-beer"></i> <span class="nav-label">BAR</span><span class="label label-danger pull-right">MENU</span></a>
                    <ul class="nav nav-second-level collapse">

                        <!--<li><a data-toggle="modal" data-target="#addinventory">Add Inventory</a></li>-->
						<li class="active">-------------INVENTORY--------------</li>
                        <li><a data-toggle="modal" data-target="#addproduct_bar">Add Product</a></li>
                        <li><a data-toggle="modal" data-target="#binventorybydate">Inventory by Date</a></li>
                        <li><a data-toggle="modal" data-target="#binventorybybrand">Inventory by Brand</a></li>
                        <li><a href="bar_inventory.php">All Inventory</a></li>
                        <li><a href="bsuper_inventory_print.php">Print Inventory</a></li>
                        <li><a href="bsuper_inventory_outofstock.php">Out of Stock</a></li>
                        <li class="active" style="text-align: center">-------------SALES REPORTS--------------</li>
                        <li><a data-toggle="modal" data-target="#ssalesbydate">Sales by date</a></li>
						<li><a data-toggle="modal" data-target="#ssalesbyproduct">Sales by Product</a>
						</li>
                        <li style="text-align: center">-------------OPEX REPORT--------------</li>
                        <li><a data-toggle="modal" data-target="#bopexbydate">Opex by Date</a></li>
                        <li><a data-toggle="modal" data-target="#bopexbypurpose">Opex by Purpose</a></li>


                        <li class="active" style="text-align: center">-------------REVOKE SALES--------------</li>
                        <li class="active"><a data-toggle="modal" data-target="#brevokesalesbydate">Sales by Date</a> </li>
                    <li><a data-toggle="modal" data-target="#brevokesalesorderbydate">Sales Order by Date</a> </li>
                        <li class="active" style="text-align: center">-------------NET PROFIT--------------</li>
                        <li><a data-toggle="modal" data-target="#bnetprofit">Check Net Profit</a></li>
                    </ul>

                </li>


                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">SUPERMARKET</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                    <li class="active"><a href="supersales.php?id=cash&invoice=<?php echo $finalcode ?>">Add Sales</a> </li>
                    <li><a data-toggle="modal" data-target="#addproduct">Add Product</a></li>
                        <!--<li><a data-toggle="modal" data-target="#addinventory">Add Inventory</a></li>-->
						<li style="text-align: center">--------Inventory Reports-------</li>
                        <li><a data-toggle="modal" data-target="#inventorybydate">Report by Date</a></li>
                        <li><a href="reportinventorybyproduct.php">Report by Brand</a></li>
						<li style="text-align: center">-----------------------------------</li>
                        <li><a href="super_inventory.php">All Inventory</a></li>
                        <li><a href="super_inventory_print.php">Print Inventory</a></li>
                        <li><a href="super_inventory_outofstock.php">Out of Stock</a></li>

						<li style="text-align: center">--------Sales Reports--------</li>
                        <li><a data-toggle="modal" data-target="#salesbydate">Report by date</a></li>
						<li><a href="reportsalesbyproduct.php">Report by Product</a>
						</li>
						<li><a data-toggle="modal" data-target="#modeofpayment">Report by Payment</a></li>

                        <li style="text-align: center">-------------Revoke Sales--------------</li>
                        <li class="active"><a data-toggle="modal" data-target="#revokesalesbydate">Sales by Date</a> </li>
                    <li><a data-toggle="modal" data-target="#revokesalesorderbydate">Sales Order by Date</a> </li>


                    </ul>
                </li>


                <li>
                    <a href="#"><i class="fa fa-calculator"></i> <span class="nav-label">OPEX</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a data-toggle="modal" data-target="#addopex">Add Opex</a></li>
						<li style="text-align: center">-------------Reports--------------</li>
                        <li><a data-toggle="modal" data-target="#opexbydate">Report by Date</a></li>
                        <li><a data-toggle="modal" data-target="#opexbypurpose">Report by Purpose</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Salary</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a data-toggle="modal" data-target="#addsalary">Add Salary</a></li>
						<li style="text-align: center">-------------Reports--------------</li>
                        <li><a data-toggle="modal" data-target="#salarybydate">Report by Date</a></li>
                        <li><a data-toggle="modal" data-target="#salarybystaff">Report by Staff</a></li>
                        <li><a data-toggle="modal" data-target="#salarybytype">Report by Type</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Staff</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a data-toggle="modal" data-target="#createadmin">Create Login Account</a></li>

						<li><a href="superaccountlist.php">Login Account List</a></li>
						<li style="text-align: center">-------------All Workers--------------</li>
                        <li><a data-toggle="modal" data-target="#addstaff">Add New Staff</a></li>
                        <li><a href="superstaff_list.php">Staff List</a></li>

                    </ul>
                </li>

				<li>
                    <a href="#"><i class="fa fa-pie-chart"></i> <span class="nav-label">Category</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a data-toggle="modal" data-target="#opexctg">Add Opex Categogy</a></li>
                        <li><a data-toggle="modal" data-target="#productctg">Add Product Categogy</a></li>
                        <li><a data-toggle="modal" data-target="#addroom">Add New Room</a></li>

                        <li style="text-align: center">-------------View Category--------------</li>
						<li><a href="superopexctg_list.php">View Opex Catgory</a></li>
                        <li><a href="superproductctg_list.php">View Product Catgory</a></li>
                        <li><a href="roomlist.php">View Room List</a></li>
                    </ul>
                </li>

				<li>
                    <a href="#"><i class="fa fa-paypal"></i> <span class="nav-label">Net Profit</span><span class="label label-danger pull-right">NEW</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a data-toggle="modal" data-target="#netprofit">Check Net Profit</a></li>
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
                <form role="search" class="navbar-form-custom" method="post" action="supersearch.php">
                    <div class="form-group">
                        <input type="text" name="search" placeholder="Enter Guest Name..." class="form-control" required name="top-search" id="top-search">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="font-extra-bold m-t-xl m-b-xs" style="font-weight:bold">
                        <script language=javascript>
                            todaysDate = new Date();
                            dayarray = new
                            Array("Sun", "Mon", "Tues", "Wed", "Thur", "Fri",
                                "Saturday");
                            montharray = new Array("Jan", "Feb", "Mar", "Apr",
                                "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
                            document.write(dayarray[todaysDate.getDay()] + ", " +
                                montharray[todaysDate.getMonth()] + " " + todaysDate.getDate() + ", ");
                            if (todaysDate.getYear() <
                                1000) {
                                document.write(todaysDate.getYear() + 1900);
                            } else {
                                document.write(todaysDate.getYear());
                            }
                        </script>

                    </span> &nbsp; | &nbsp; <span class="font-extra-bold m-t-xl m-b-xs" id="time" style="font-weight:bold">
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
                                t = setTimeout(function() {
                                    startTime()
                                }, 500);
                            }
                            startTime();
                        </script>
                    </span> &nbsp; | &nbsp; <span class="m-r-sm text-muted welcome-message">Welcome to <strong><?php echo $session_business_name; ?> (<?php echo $session_email; ?>)</strong></span>
                </li>

                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>

            </ul>
        </nav>
    </div>

 <!--Checkin Report by Status-->
 <div class="modal inmodal col-xs-12" id="checkinbystatus" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-map-marker"></i> Check-In Report by Status</h3><hr>
                    <form class="form-horizontal" method="post" action="checkinbystatus.php">

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
                            <label class="col-lg-3 control-label">Status:</label>
                            <div class="col-lg-9">
                                <select name="status" class="form-control" required="required">
                                   <option value="">--Select Status--</option>
                                   <option value="Checked-Out">Checked-Out</option>
                                                <option value="Checked-In">Checked-In</option>

                                </select>
                            </div>
                        </div>

                    <div class="col-lg-12">
                    <input type="submit" name="checkinbystatus" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Checkin Report by Status-->

    <!--Checkin Report by Payment Mode-->
    <div class="modal inmodal col-xs-12" id="checkinmodeofpayment" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-map-marker"></i> Check-In Report by Payment Mode</h3><hr>
                    <form class="form-horizontal" method="post" action="checkinmodeofpayment.php">

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
                            <label class="col-lg-3 control-label">Payment Mode:</label>
                            <div class="col-lg-9">
                                <select name="payment_method" class="form-control" required="required">
                                   <option value="">--Select Payment Mode--</option>
                                   <option value="Cash">Cash</option>
                                                <option value="POS">POS</option>
                                                <option value="Transfer">Transfer</option>
                                                <option value="Cheque">Cheque</option>
                                                <option value="Boss">Boss</option>
                                </select>
                            </div>
                        </div>

                    <div class="col-lg-12">
                    <input type="submit" name="checkinmodeofpayment" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Checkin Report by Payment Mode-->


 <!--Check Out by Date-->
 <div class="modal inmodal col-xs-12" id="checkoutbydate" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-map-marker"></i> Check-Out Report by Date</h3><hr>
                    <form class="form-horizontal" method="post" action="checkoutbydate.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
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

    <!--Check In by Date-->
    <div class="modal inmodal col-xs-12" id="checkinbydate" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-map-marker"></i> Check-In Report by Date</h3><hr>
                    <form class="form-horizontal" method="post" action="checkinbydate.php">

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date From:</label>
                    <div class="col-lg-9">
                    <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-lg-3 control-label">Select Date To:</label>
                    <div class="col-lg-9">
                    <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                    </div>
                    </div>


                    <div class="col-lg-12">
                    <input type="submit" name="checkinbydate" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Check In by Date-->

                             <!--Check In by Room-->
    <div class="modal inmodal col-xs-12" id="checkinbyapartment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-map-marker"></i> Check-In Report by Room</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="checkinbyroom.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Room:</label>
                            <div class="col-lg-9">
                                <select name="room" class="form-control" required="required">
                                <option value="">--Select Room--</option>
                                <?php
		 include('db_conn.php');
 $sql2 = "SELECT * FROM room ";
	 $result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	while($row = mysqli_fetch_array($result2)) {
	 ?>
        <option value="<?php echo $row['room_name']; ?>"><?php echo $row['room_name']; }}?></option>
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


    <!--Check In by Room-->
    <div class="modal inmodal col-xs-12" id="checkoutbyapartment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-map-marker"></i> Check-Out Report by Room</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="checkoutbyroom.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Room:</label>
                            <div class="col-lg-9">
                                <select name="room" class="form-control" required="required">
                                <option value="">--Select Room--</option>
                                <?php
		 include('db_conn.php');
 $sql2 = "SELECT * FROM room ";
	 $result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	while($row = mysqli_fetch_array($result2)) {
	 ?>
        <option value="<?php echo $row['room_name']; ?>"><?php echo $row['room_name']; }}?></option>
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <input type="submit" name="checkoutbyroom" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Check Out by Room-->

    <!--Bar Sales by Product-->
<div class="modal inmodal col-xs-12" id="ssalesbyproduct" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Bar Inventory Report by Brand</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="ssupersalesbyproduct.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Product:</label>
                            <div class="col-lg-9">
                                <select name="product_code" class="form-control" required="required">
                                    <option value="">--Select Product--</option>
                                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT product_code FROM sproducts ";
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
                            <input type="submit" name="ssalesbyproduct" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Bar Sales by Product-->

    <!--Restuarant Sales by Product-->
<div class="modal inmodal col-xs-12" id="dsalesbyproduct" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Restuarant Inventory Report by Brand</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="dsupersalesbyproduct.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Product:</label>
                            <div class="col-lg-9">
                                <select name="product_code" class="form-control" required="required">
                                    <option value="">--Select Product--</option>
                                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT product_code FROM pro_distributor ";
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
                            <input type="submit" name="dsalesbyproduct" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Restuarant Sales by Product-->

    <!--Bar Invevtory by Brand-->
<div class="modal inmodal col-xs-12" id="binventorybybrand" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Bar Inventory Report by Brand</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="bsuperinventorybybrand.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Product:</label>
                            <div class="col-lg-9">
                                <select name="product_code" class="form-control" required="required">
                                    <option value="">--Select Product--</option>
                                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT product_code FROM sproducts ";
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
                            <input type="submit" name="binventorybydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Bar Inventory by Brand-->

<!--Restuarant Invevtory by Brand-->
<div class="modal inmodal col-xs-12" id="dinventorybybrand" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Restuarant Inventory Report by Brand</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="esuperinventorybybrand.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Product:</label>
                            <div class="col-lg-9">
                                <select name="product_code" class="form-control" required="required">
                                    <option value="">--Select Product--</option>
                                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT product_code FROM pro_distributor ";
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
                            <input type="submit" name="dinventorybydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Restuarant Inventory by Brand-->

    <!--Add product Restuarant-->
<div class="modal inmodal col-xs-12" id="addproduct_bar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-dropbox"></i> Add Bar Product</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");

						$rand = rand(000,999);
						$today = date("dmy");
						$time = date("His");
						$estock = "STOCK".$today.$rand;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addproduct_bar'])) {
                            $code = trim(addslashes($_REQUEST['code']));
                            $gen = trim(addslashes($_REQUEST['gen']));
                            $name = trim(addslashes($_REQUEST['name']));
                            $date_arrival = trim(addslashes($_REQUEST['date_arrival']));
                            $o_price = trim(addslashes($_REQUEST['o_price']));
                            $price = trim(addslashes($_REQUEST['price']));
                            $qty = trim(addslashes($_REQUEST['qty']));
                            $date_arrival = trim(addslashes($_REQUEST['date_arrival']));
                            $profit = trim(addslashes($_REQUEST['profit']));
                            $qty_sold = $qty;
                            $total = $price * $qty;
                            $total_profit = $profit * $qty;

                            $sql1 = "INSERT INTO sproducts (product_code, gen_name, product_name, o_price, price, profit, qty, qty_sold, date_arrival, total, total_profit) VALUES ('$code','$gen','$name','$o_price','$price','$profit','$qty','$qty_sold','$date_arrival','$total','$total_profit')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Bar Product Successfully Added')
location.href='bar_inventory.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Stock No:</label>
                            <div class="col-lg-9">
                                <input type="text" name="gen" value="<?php echo $estock ?>" readonly placeholder="Stock No" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Product Name:</label>
                            <div class="col-lg-9">
                                <input type="text" name="code" placeholder="Product Name" class="form-control" required="required">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-lg-3 control-label">Category:</label>
                            <div class="col-lg-9">
                                <select name="name" class="form-control" required="required">
                                    <option value="">--Select Category--</option>
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
                            <label class="col-lg-3 control-label">Purchase Date:</label>
                            <div class="col-lg-9">
                                <input type="date" name="date_arrival" placeholder="Purchase Date" class="form-control" required="required">
                            </div>
                        </div>





                        <script type="text/javascript">
                            function bsum() {
                                var epurchase_price = parseInt(document.getElementById("epurchase_price").value);
                                var eselling_price = parseInt(document.getElementById("eselling_price").value);


                                if (epurchase_price.value == "") {
                                    epurchase_price.value = 0.00;
                                }
                                if (eselling_price.value == "") {
                                    eselling_price.value = 0.00;
                                }


                                var sum = (eselling_price - epurchase_price).toFixed(2);
                                document.getElementById("eprofit").value = sum;
                            }
                        </script>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Purchase Price:</label>
                            <div class="col-lg-9">
                                <input type="text" name="o_price" step="any" id="epurchase_price" onKeyUp="bsum()" placeholder="Purchase Price" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Selling Price:</label>
                            <div class="col-lg-9">
                                <input type="text" name="price" step="any" id="eselling_price" onKeyUp="bsum()" placeholder="Selling Price" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Profit:</label>
                            <div class="col-lg-9">
                                <input type="text" name="profit" step="any" onKeyUp="bsum()" readonly id="eprofit" placeholder="Profit" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Quantity:</label>
                            <div class="col-lg-9">
                                <input type="text" name="qty" placeholder="Quantity" class="form-control" required="required">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <input type="submit" name="addproduct_bar" value="Save Product" class="btn btn-warning">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Add Product BAR-->

<!--Add product Restuarant-->
<div class="modal inmodal col-xs-12" id="addproduct_eatery" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-dropbox"></i> Add Restuarant Product</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");

						$rand = rand(000,999);
						$today = date("dmy");
						$time = date("His");
						$estock = "STOCK".$today.$rand;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addproduct_eatery'])) {
                            $code = trim(addslashes($_REQUEST['code']));
                            $gen = trim(addslashes($_REQUEST['gen']));
                            $name = trim(addslashes($_REQUEST['name']));
                            $date_arrival = trim(addslashes($_REQUEST['date_arrival']));
                            $o_price = trim(addslashes($_REQUEST['o_price']));
                            $price = trim(addslashes($_REQUEST['price']));
                            $qty = trim(addslashes($_REQUEST['qty']));
                            $date_arrival = trim(addslashes($_REQUEST['date_arrival']));
                            $profit = trim(addslashes($_REQUEST['profit']));
                            $qty_sold = $qty;
                            $total = $price * $qty;
                            $total_profit = $profit * $qty;

                            $sql1 = "INSERT INTO pro_distributor (product_code, gen_name, product_name, o_price, price, profit, qty, qty_sold, date_arrival, total, total_profit) VALUES ('$code','$gen','$name','$o_price','$price','$profit','$qty','$qty_sold','$date_arrival','$total','$total_profit')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Restuarant Product Successfully Added')
location.href='eatery_inventory.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Stock No:</label>
                            <div class="col-lg-9">
                                <input type="text" name="gen" value="<?php echo $estock ?>" readonly placeholder="Stock No" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Product Name:</label>
                            <div class="col-lg-9">
                                <input type="text" name="code" placeholder="Product Name" class="form-control" required="required">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-lg-3 control-label">Category:</label>
                            <div class="col-lg-9">
                                <select name="name" class="form-control" required="required">
                                    <option value="">--Select Category--</option>
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
                            <label class="col-lg-3 control-label">Purchase Date:</label>
                            <div class="col-lg-9">
                                <input type="date" name="date_arrival" placeholder="Purchase Date" class="form-control" required="required">
                            </div>
                        </div>





                        <script type="text/javascript">
                            function esum() {
                                var etpurchase_price = parseInt(document.getElementById("etpurchase_price").value);
                                var etselling_price = parseInt(document.getElementById("etselling_price").value);


                                if (etpurchase_price.value == "") {
                                    etpurchase_price.value = 0.00;
                                }
                                if (etselling_price.value == "") {
                                    etselling_price.value = 0.00;
                                }


                                var sum = (etselling_price - etpurchase_price).toFixed(2);
                                document.getElementById("etprofit").value = sum;
                            }
                        </script>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Purchase Price:</label>
                            <div class="col-lg-9">
                                <input type="text" name="o_price" step="any" id="etpurchase_price" onKeyUp="esum()" placeholder="Purchase Price" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Selling Price:</label>
                            <div class="col-lg-9">
                                <input type="text" name="price" step="any" id="etselling_price" onKeyUp="esum()" placeholder="Selling Price" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Profit:</label>
                            <div class="col-lg-9">
                                <input type="text" name="profit" step="any" onKeyUp="esum()" readonly id="etprofit" placeholder="Profit" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Quantity:</label>
                            <div class="col-lg-9">
                                <input type="text" name="qty" placeholder="Quantity" class="form-control" required="required">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <input type="submit" name="addproduct_eatery" value="Save Product" class="btn btn-warning">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Add Product Restuarant-->




    <!--Add product Line-->
    <div class="modal inmodal col-xs-12" id="addproduct" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-dropbox"></i> Add Supermarket Product</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");

						$rand = rand(000,999);
						$today = date("dmy");
						$time = date("His");
						$stock = "STOCK".$today.$rand;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addproduct'])) {
                            $code = trim(addslashes($_REQUEST['code']));
                            $gen = trim(addslashes($_REQUEST['gen']));
                            $name = trim(addslashes($_REQUEST['name']));
                            $date_arrival = trim(addslashes($_REQUEST['date_arrival']));
                            $o_price = trim(addslashes($_REQUEST['o_price']));
                            $price = trim(addslashes($_REQUEST['price']));
                            $qty = trim(addslashes($_REQUEST['qty']));
                            $date_arrival = trim(addslashes($_REQUEST['date_arrival']));
                            $profit = trim(addslashes($_REQUEST['profit']));
                            $qty_sold = $qty;
                            $total = $price * $qty;
                            $total_profit = $profit * $qty;

                            $sql1 = "INSERT INTO products (product_code, gen_name, product_name, o_price, price, profit, qty, qty_sold, date_arrival, total, total_profit) VALUES ('$code','$gen','$name','$o_price','$price','$profit','$qty','$qty_sold','$date_arrival','$total','$total_profit')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Product Successfully Added')
location.href='super_inventory.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Stock No:</label>
                            <div class="col-lg-9">
                                <input type="text" name="gen" value="<?php echo $stock; ?>" readonly placeholder="Stock No" class="form-control" required="required" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Product Name:</label>
                            <div class="col-lg-9">
                                <input type="text" name="code" placeholder="Product Name" class="form-control" required="required">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-lg-3 control-label">Category:</label>
                            <div class="col-lg-9">
                                <select name="name" class="form-control" required="required">
                                    <option value="">--Select Category--</option>
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
                            <label class="col-lg-3 control-label">Purchase Date:</label>
                            <div class="col-lg-9">
                                <input type="date" name="date_arrival" placeholder="Purchase Date" class="form-control" required="required">
                            </div>
                        </div>





                        <script type="text/javascript">
                            function sum() {
                                var purchase_price = parseInt(document.getElementById("purchase_price").value);
                                var selling_price = parseInt(document.getElementById("selling_price").value);


                                if (purchase_price.value == "") {
                                    purchase_price.value = 0.00;
                                }
                                if (selling_price.value == "") {
                                    selling_price.value = 0.00;
                                }


                                var sum = (selling_price - purchase_price).toFixed(2);
                                document.getElementById("profit").value = sum;
                            }
                        </script>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Purchase Price:</label>
                            <div class="col-lg-9">
                                <input type="text" name="o_price" step="any" id="purchase_price" onKeyUp="sum()" placeholder="Purchase Price" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Selling Price:</label>
                            <div class="col-lg-9">
                                <input type="text" name="price" step="any" id="selling_price" onKeyUp="sum()" placeholder="Selling Price" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Profit:</label>
                            <div class="col-lg-9">
                                <input type="text" name="profit" step="any" onKeyUp="sum()" readonly id="profit" placeholder="Profit" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Quantity:</label>
                            <div class="col-lg-9">
                                <input type="text" name="qty" placeholder="Quantity" class="form-control" required="required">
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <input type="submit" name="addproduct" value="Save Product" class="btn btn-warning">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Add Product Line-->

	<!--Open Meter Report by Date-->
    <div class="modal inmodal col-xs-12" id="openmeterbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> Opening Meter Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="superopenmeterbydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <input type="submit" name="openmeterbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Open Meter Report by Date-->

	<!--Closing Meter Report by Date-->
    <div class="modal inmodal col-xs-12" id="closemeterbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> Closing Meter Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="superclosemeterbydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <input type="submit" name="closemeterbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Close Meter Report by Date-->

	<!--Final Meter Report by Date-->
    <div class="modal inmodal col-xs-12" id="finalmeterbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> Final Meter Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="superfinalmeterbydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <input type="submit" name="finalmeterbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Final Meter Report by Date-->

<!--Update BulkSales Discount-->
	<div class="modal inmodal col-xs-12" id="bulksalesdiscount" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-dropbox"></i> Update Bulk Sales Discount</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");


                        error_reporting(E_ALL);
                        if (isset($_REQUEST['updatediscount'])) {
                            $discount = trim(addslashes($_REQUEST['discount']));

$sql2 = "UPDATE bulksales_discount SET  discount='$discount'";



$result = mysqli_query($conn, $sql2);
// if successfully update
if($result) {


                            echo "<script>alert('Bulk Sales Discount Successfully Updated')
location.href='super_admin.php'</script>";

}
                        mysqli_close($conn);

						}
                        ?>


<?php
include('db_conn.php');
$sql = "SELECT * FROM bulksales_discount";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
?>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Discount:</label>
                            <div class="col-lg-9">

                                <input id="name" name="discount" value="<?php echo $row['discount']; ?>" placeholder="Bulk Sales Discount" type="text" class="form-control required">



                            </div>
                        </div>




                        <div class="col-lg-12">
                            <input type="submit" name="updatediscount" value="Update Discount" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

	<!--End of Bulk Sales Discount-->


	<!--Add Opening Meter-->
<div class="modal inmodal col-xs-12" id="addopenmeter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-unlock"></i> Add Opening Metter</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");

						$rand = rand(000,999);
						$today = date("dmy");
						$time = date("His");
						$om_id = "OM".$today.$rand;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addopenmeter'])) {
                            $date = trim(addslashes($_REQUEST['date']));
                            $omid = trim(addslashes($_REQUEST['om_id']));
                            $pump1a = trim(addslashes($_REQUEST['pump1a']));
                            $pump1b = trim(addslashes($_REQUEST['pump1b']));
							$pump2 = trim(addslashes($_REQUEST['pump2']));
                            $pump3 = trim(addslashes($_REQUEST['pump3']));
                            $pump4a = trim(addslashes($_REQUEST['pump4a']));
                            $pump4b = trim(addslashes($_REQUEST['pump4b']));

                            $sql1 = "INSERT INTO opening_meter (date, om_id, pump1a, pump1b, pump2, pump3, pump4a, pump4b) VALUES ('$date','$omid','$pump1a','$pump1b','$pump2','$pump3','$pump4a','$pump4b')";


                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Opening Meter Successfully Added')
location.href='superallopeningmeter.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>


						<div class="form-group">
                            <label class="col-lg-3 control-label">Date:</label>
                            <div class="col-lg-9">
                                <input type="date" name="date" placeholder="Opening Meter Date" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Open Meter ID:</label>
                            <div class="col-lg-9">
                                <input type="text" name="om_id" placeholder="Opening Meter ID" class="form-control" readonly value="<?php echo $om_id; ?>" required="required">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Pump 1A:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump1a" placeholder="Pump 1A" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Pump 1B:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump1b" placeholder="Pump 1B" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Pump 2:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump2" placeholder="Pump 2" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Pump 3:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump3" placeholder="Pump 3" class="form-control" required="required">
                            </div>
						</div>

							<div class="form-group">
                            <label class="col-lg-3 control-label">Pump 4A:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump4a" placeholder="Pump 4A" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Pump 4B:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump4b" placeholder="Pump 4B" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="addopenmeter" value="Add Opening Meter" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Add Opening Meter-->


	<!--Add Closing Meter-->
<div class="modal inmodal col-xs-12" id="addclosemeter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-unlock-alt"></i> Add Closing Meter</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");

						$rand = rand(000,999);
						$today = date("dmy");
						$time = date("His");
						$cm_id = "CM".$today.$rand;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addclosemeter'])) {
                            $date = trim(addslashes($_REQUEST['date']));
                            $cmid = trim(addslashes($_REQUEST['cm_id']));
                            $pump1a = trim(addslashes($_REQUEST['pump1a']));
                            $pump1b = trim(addslashes($_REQUEST['pump1b']));
                            $pump2 = trim(addslashes($_REQUEST['pump2']));
                            $pump3 = trim(addslashes($_REQUEST['pump3']));
                            $pump4a = trim(addslashes($_REQUEST['pump4a']));
                            $pump4b = trim(addslashes($_REQUEST['pump4b']));

                            $sql1 = "INSERT INTO closing_meter (date, cm_id, pump1a, pump1b, pump2, pump3, pump4a, pump4b) VALUES ('$date','$cmid','$pump1a','$pump1b','$pump2','$pump3','$pump4a','$pump4b')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Closing Meter Successfully Added')
location.href='superallclosingmeter.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Date:</label>
                            <div class="col-lg-9">
                                <input type="date" name="date" placeholder="Opening Meter Date" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Close Meter ID:</label>
                            <div class="col-lg-9">
                                <input type="text" name="cm_id" placeholder="Closing Meter ID" class="form-control" readonly value="<?php echo $cm_id; ?>" required="required">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Pump 1A:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump1a" placeholder="Pump 1A" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Pump 1B:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump1b" placeholder="Pump 1B" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Pump 2:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump2" placeholder="Pump 2" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Pump 3:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump3" placeholder="Pump 3" class="form-control" required="required">
                            </div>
						</div>

							<div class="form-group">
                            <label class="col-lg-3 control-label">Pump 4A:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump4a" placeholder="Pump 4A" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Pump 4B:</label>
                            <div class="col-lg-9">
                                <input type="text" name="pump4b" placeholder="Pump 4B" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="addclosemeter" value="Add Closing Meter" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Add Opening Meter-->


<!--Add product Line-->
<div class="modal inmodal col-xs-12" id="add2service" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-dropbox"></i> Add Services</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");


                        error_reporting(E_ALL);
                        if (isset($_REQUEST['add2service'])) {
                            $code = trim(addslashes($_REQUEST['code']));
                            $date_arrival = trim(addslashes($_REQUEST['date_arrival']));
                            $price = trim(addslashes($_REQUEST['price']));

                            $sql1 = "INSERT INTO service (product_code, price, date_arrival) VALUES ('$code','$price','$date_arrival')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Service Successfully Added')
location.href='superinventory_service.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Services Rendered:</label>
                            <div class="col-lg-9">
                                <select name="code" class="form-control" required="required">
                                <option value="">--Select Service--</option>
                                    <option value="General Repair">General Repair & Maintenance</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Date:</label>
                            <div class="col-lg-9">
                                <input type="date" name="date_arrival" placeholder="Purchase Date" class="form-control" required="required">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Cost Price:</label>
                            <div class="col-lg-9">
                                <input type="text" name="price" placeholder="Service Price" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="add2service" value="Save Service" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Add Product Line-->

	<!--Sales2 by Product-->
        <div class="modal inmodal col-xs-12" id="salesbyproduct" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-shopping-cart"></i> Sales Report by Product</h3><hr>
                    <form class="form-horizontal" method="post" action="salesbyproduct.php">

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
                    <input type="submit" name="salesbyproduct" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Sales2 by Product-->




	<!--Sales2 by Payment Mode-->
        <div class="modal inmodal col-xs-12" id="modeofpayment" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h3><i class="fa fa-shopping-cart"></i> Sales Report by Payment Mode</h3><hr>
                    <form class="form-horizontal" method="post" action="supermodeofpayment.php">

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
                            <label class="col-lg-3 control-label">Payment Mode:</label>
                            <div class="col-lg-9">
                                <select name="imei" class="form-control" required="required">
                                   <option value="">--Select Payment Mode--</option>
									<option value="Cash">Cash</option>
									<option value="POS">POS</option>
									<option value="Transfer">Transfer</option>
									<option value="Credit">Credit</option>
                                </select>
                            </div>
                        </div>

                    <div class="col-lg-12">
                    <input type="submit" name="modeofpayment" value="Generate Report" class="btn btn-danger">
                    </div>
                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ending of Sales2 by Payment Mode-->





    <!--Add Service Line-->
    <div class="modal inmodal col-xs-12" id="addservice" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-dropbox"></i> Add Service Rendered</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");

                        $rand2 = rand(000, 999);
                        $today = date("dmy");
                        $time = date("His");
                        $ID2 = "SR" . $today . $rand2;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addservice'])) {
                            $uin = trim(addslashes($_REQUEST['uin']));
                            $date = trim(addslashes($_REQUEST['date']));
                            $services = trim(addslashes($_REQUEST['services']));
                            $name = trim(addslashes($_REQUEST['name']));
                            $phone = trim(addslashes($_REQUEST['phone']));
                            $amount = trim(addslashes($_REQUEST['amount']));
                            $cash_tendered = trim(addslashes($_REQUEST['cash_tendered']));

                            $sql1 = "INSERT INTO services (uin, date, services, name, phone, amount, cash_tendered) VALUES ('$uin','$date','$services','$name','$phone','$amount','$cash_tendered')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Services Successfully Added')
location.href='superpreviewsr.php?uin=".$_REQUEST['uin']."'</script>";
                        }
                        mysqli_close($conn);


                        ?>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">UIN:</label>
                            <div class="col-lg-9">
                                <input type="text" name="uin" value="<?php echo $ID2; ?>" readonly placeholder="UIN" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Transaction Date:</label>
                            <div class="col-lg-9">
                                <input type="date" name="date" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Service Rendered:</label>
                            <div class="col-lg-9">
                                <select name="services" class="form-control" required="required">
                                    <option value="">--Select Service--</option>
                                    <option value="Facials">Facials</option>
                                    <option value="Body Treatment/Polish">Body Treatment/Polish</option>
                                    <option value="Body Massage">Body Massage</option>
                                    <option value="Pedicure">Pedicure</option>
                                    <option value="Manicure">Manicure</option>
                                    <option value="Perfumery">Perfumery</option>
                                    <option value="Creams">Creams</option>
                                    <option value="Diet Therapy">Diet Therapy</option>
                                    <option value="Natural Hair Locking/Treatment">Natural Hair Locking/Treatment</option>
                                    <option value="Hair Styling/Treatment">Hair Styling/Treatment</option>
                                    <option value="Consultancy">Consultancy</option>
                                    <option value="Waxing">Waxing</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Customer Name:</label>
                            <div class="col-lg-9">
                                <input type="text" name="name" placeholder="Customer's Name" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Phone No:</label>
                            <div class="col-lg-9">
                                <input type="text" name="phone" placeholder="Phone No" class="form-control" required="required">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-lg-3 control-label">Amount:</label>
                            <div class="col-lg-9">
                                <input type="text" name="amount"  placeholder="Amount" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Cash Tendered:</label>
                            <div class="col-lg-9">
                                <input type="text" name="cash_tendered" placeholder="Cash Tendered" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="addservice" value="Add Service" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Add Service Line-->

<!--Add Sales Rep Line-->
<div class="modal inmodal col-xs-12" id="addsalesrep" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-user"></i> Add New Sales Representative</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");


                        $rand = rand(0000, 9999);
                        $today = date("dmy");
                        $time = date("His");
                        $ID = "AAS".$time;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addsalesrep'])) {
                            $staff_no = trim(addslashes($_REQUEST['staff_no']));
                            $staff_name = trim(addslashes($_REQUEST['staff_name']));
                            $staff_email = trim(addslashes($_REQUEST['staff_email']));
                            $staff_phone = trim(addslashes($_REQUEST['staff_phone']));
                            $staff_address = trim(addslashes($_REQUEST['staff_address']));
                            $staff_designation = trim(addslashes($_REQUEST['staff_designation']));

                            $sql1 = "INSERT INTO workers (staff_no, staff_name, staff_email, staff_phone, staff_address, staff_designation) VALUES ('$staff_no','$staff_name','$staff_email','$staff_phone','$staff_address','$staff_designation')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('$staff_name Successfully Added')
location.href='salesrep.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Staff ID:</label>
                            <div class="col-lg-9">
                                <input type="text" name="staff_no" value="<?php echo $ID; ?>" placeholder="Staff No" readonly class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Fullname:</label>
                            <div class="col-lg-9">
                                <input type="text" name="staff_name" autofocus placeholder="Staff Name" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-9">
                                <input type="email" name="staff_email" placeholder="Staff Email" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Phone No:</label>
                            <div class="col-lg-9">
                                <input type="text" name="staff_phone" placeholder="Staff Phone" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Address:</label>
                            <div class="col-lg-9">
                                <input type="text" name="staff_address" placeholder="Staff Residential Address" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Designation:</label>
                            <div class="col-lg-9">
                                <input type="text" name="staff_designation" value="Sales Rep" readonly placeholder="Staff Designation" class="form-control" required="required">
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <input type="submit" name="addsalesrep" value="Add Sales Rep" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Add Sales Rep Line-->


    <!--Add New Staff Line-->
    <div class="modal inmodal col-xs-12" id="addstaff" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-user"></i> Add New Staff</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");


                        $rand = rand(0000, 9999);
                        $today = date("dmy");
                        $time = date("His");
                        $ID = "AAS".$time;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addstaff'])) {
                            $staff_no = trim(addslashes($_REQUEST['staff_no']));
                            $staff_name = trim(addslashes($_REQUEST['staff_name']));
                            $staff_email = trim(addslashes($_REQUEST['staff_email']));
                            $staff_phone = trim(addslashes($_REQUEST['staff_phone']));
                            $staff_address = trim(addslashes($_REQUEST['staff_address']));
                            $staff_designation = trim(addslashes($_REQUEST['staff_designation']));

                            $sql1 = "INSERT INTO workers (staff_no, staff_name, staff_email, staff_phone, staff_address, staff_designation) VALUES ('$staff_no','$staff_name','$staff_email','$staff_phone','$staff_address','$staff_designation')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('$staff_name Successfully Added')
location.href='superstaff_list.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Staff No:</label>
                            <div class="col-lg-9">
                                <input type="text" name="staff_no" value="<?php echo $ID; ?>" placeholder="Staff No" readonly class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Staff Name:</label>
                            <div class="col-lg-9">
                                <input type="text" name="staff_name" placeholder="Staff Name" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Staff Email:</label>
                            <div class="col-lg-9">
                                <input type="email" name="staff_email" placeholder="Staff Email" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Staff Phone No:</label>
                            <div class="col-lg-9">
                                <input type="text" name="staff_phone" placeholder="Staff Phone" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Staff Address:</label>
                            <div class="col-lg-9">
                                <input type="text" name="staff_address" placeholder="Staff Residential Address" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Designation:</label>
                            <div class="col-lg-9">
                                <input type="text" name="staff_designation" placeholder="Staff Designation" class="form-control" required="required">
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


	<!--Create Admin OR Staff Account-->
    <div class="modal inmodal col-xs-12" id="createadmin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-users"></i> Create New Login Account</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                        <?php
                        include("db_conn.php");


                        $rand = rand(000,999);
		$today = date("dmy");
		$time = date("His");
		$ID = "MHS".$rand;

                       error_reporting(E_ALL);
	if(isset($_REQUEST['createadmin'])){
		$staff_id=trim(addslashes($_REQUEST['staff_id']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$email=trim(addslashes($_REQUEST['email']));
		$phone=trim(addslashes($_REQUEST['phone']));
		$passwordreg=trim(addslashes($_REQUEST['passwordreg']));
		$station=trim(addslashes($_REQUEST['station']));
		$designation=trim(addslashes($_REQUEST['designation']));
		$business_name=trim(addslashes($_REQUEST['business_name']));
        $business_phone=trim(addslashes($_REQUEST['business_phone']));
		$business_address=trim(addslashes($_REQUEST['business_address']));
		$passport = $_FILES["data"]['name'];
		$target="staff/";
		$target=$target.$_FILES["data"]['name'];




		/*	  $yyy = $_FILES['data']['name'];
			  $_SESSION['pic']=$yyy;*/

if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){



		  //Check for duplicate record in database before inserting New Record
		  $check=mysqli_query($conn, "SELECT * FROM staff_id WHERE fullname='$fullname' AND phone='$phone' AND email='$email'");
		  $checkrows=mysqli_num_rows($check);

		 if($checkrows>0) {
		  echo "<script>alert('User Already Exist in Database')
		  location.href='super_admin.php'</script>";
		 } else {


$sql="INSERT INTO staff_id (staff_id, fullname, email, phone, password, station, designation, business_name, business_phone, business_address, passport) VALUES ('$staff_id','$fullname','$email','$phone',PASSWORD('$passwordreg'),'$station','$designation','$business_name','$business_phone','$business_address','$passport')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert('$fullname Login Account Successfully Created')
	location.href='superaccountlist.php'</script>";
}
}

	mysqli_close($conn);
	}

                        ?>




						<div class="form-group">
                            <label class="col-lg-3 control-label">Staff ID:</label>
                            <div class="col-lg-9">
                                <input type="text" name="staff_id" value="<?php echo $ID; ?>" placeholder="Staff No" readonly class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Fullname:</label>
                            <div class="col-lg-9">
                                <input type="text" name="fullname" placeholder="Fullname" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-9">
                                <input type="email" name="email" placeholder="Email Address" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Phone No:</label>
                            <div class="col-lg-9">
                                <input type="text" name="phone" placeholder="Phone No" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Password:</label>
                            <div class="col-lg-9">
                                <input type="password" name="passwordreg" placeholder="Choose Password" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Location:</label>
                            <div class="col-lg-9">
								<select class="form-control" required="required" name="station">
                   		<option value="Akure">Akure</option>
                        </select>
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Business Name:</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Mariston Hotel & Suites" readonly name="business_name" placeholder="Enter Business Name">
                            </div>
                        </div>

                        <input  type="hidden" value="+234-706-786-9400" readonly name="business_phone" placeholder="Enter Business Phone No">

						<input  type="hidden" value="NTA Road, Oba-Ile Akure, Ondo State" readonly name="business_address" placeholder="Enter Business Address">

						<div class="form-group">
                            <label class="col-lg-3 control-label">Designation:</label>
                            <div class="col-lg-9">
								<select class="form-control" required="required" name="designation">
                        <option value="">--Select Designation--</option>
                        <option value="Super Admin">Super Admin</option>
                        <option value="Bar">Bar</option>
                           <option value="MainStore">Main Store</option>
                           <option value="Receptionist">Receptionist</option>
                           <option value="Restaurants">Restaurants</option>

                        </select>
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Passport Upload:</label>
                            <div class="col-lg-9">
								<input class="form-control" type="file" onChange="readURL(this);" name="data"  accept=".jpeg,.jpg,.png,.PNG,.JPEG,.JPG">
                            </div>
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



                        <div class="col-lg-12">
                            <input type="submit" name="createadmin" value="Create Account" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending Create Admin OR Staff Account-->

	<!--Create Admin OR Staff Account-->
    <div class="modal inmodal col-xs-12" id="addsalesrep2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-users"></i> Add New Sales Representative</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                        <?php
                        include("db_conn.php");


                        $rand = rand(000,999);
		$today = date("dmy");
		$time = date("His");
		$ID = "AASR".$rand;

                       error_reporting(E_ALL);
	if(isset($_REQUEST['addsalesrep2'])){
		$salesrep_id=trim(addslashes($_REQUEST['salesrep_id']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$gender=trim(addslashes($_REQUEST['gender']));
		$email=trim(addslashes($_REQUEST['email']));
		$phone=trim(addslashes($_REQUEST['phone']));
		$address=trim(addslashes($_REQUEST['address']));
		$location=trim(addslashes($_REQUEST['location']));
		$designation=trim(addslashes($_REQUEST['designation']));
		$business_name=trim(addslashes($_REQUEST['business_name']));
        $business_phone=trim(addslashes($_REQUEST['business_phone']));
		$business_address=trim(addslashes($_REQUEST['business_address']));
		$passport = $_FILES["data"]['name'];
		$target="salesrep/";
		$target=$target.$_FILES["data"]['name'];




		/*	  $yyy = $_FILES['data']['name'];
			  $_SESSION['pic']=$yyy;*/

if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){



		  //Check for duplicate record in database before inserting New Record
		  $check=mysqli_query($conn, "SELECT * FROM salesrep WHERE salesrep_id='$salesrep_id' OR fullname='$fullname' OR phone='$phone' OR email='$email'");
		  $checkrows=mysqli_num_rows($check);

		 if($checkrows>0) {
		  echo "<script>alert('Sales Rep Already Exist in our Database')
		  location.href='super_admin.php'</script>";
		 } else {


$sql="INSERT INTO salesrep (salesrep_id, fullname, gender, email, phone, address, location, designation, business_name, business_phone, business_address, passport) VALUES ('$salesrep_id','$fullname','$gender','$email','$phone','$address','$location','$designation','$business_name','$business_phone','$business_address','$passport')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert('$fullname as Sales Rep Account Successfully Created')
	location.href='salesrep.php'</script>";
}
}

	mysqli_close($conn);
	}

                        ?>




						<div class="form-group">
                            <label class="col-lg-3 control-label">Sales Rep ID:</label>
                            <div class="col-lg-9">
                                <input type="text" name="salesrep_id" value="<?php echo $ID; ?>" placeholder="Sales Rep ID" readonly class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Fullname:</label>
                            <div class="col-lg-9">
                                <input type="text" name="fullname" placeholder="Fullname" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Gender:</label>
                            <div class="col-lg-9">
								<select class="form-control" required="required" name="gender">
                        <option value="">--Select Gender--</option>
                   		<option value="Male">Male</option>
                   		<option value="Female">Female</option>
                        </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-9">
                                <input type="email" name="email" placeholder="Email Address" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Phone No:</label>
                            <div class="col-lg-9">
                                <input type="text" name="phone" placeholder="Phone No" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Address:</label>
                            <div class="col-lg-9">
                                <input type="text" name="address" placeholder="Residential Address" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Location:</label>
                            <div class="col-lg-9">
                                <input type="text" name="location" placeholder="Enter Location" class="form-control" required="required">
                            </div>
                        </div>



						<div class="form-group">
                            <label class="col-lg-3 control-label">Business Name:</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="Mariston Hotel & Suites" readonly name="business_name" placeholder="Enter Business Name">
                            </div>
                        </div>

                        <input  type="hidden" value="+234-706-786-9400" readonly name="business_phone" placeholder="Enter Business Phone No">

						<input  type="hidden" value="NTA Road, Oba-Ile Akure, Ondo State" readonly name="business_address" placeholder="Enter Business Address">

						<div class="form-group">
                            <label class="col-lg-3 control-label">Designation:</label>
                            <div class="col-lg-9">
								<select class="form-control" required="required" name="designation">
                        <option value="">--Select Designation--</option>
                   		<option value="Sales Rep">Sales Rep</option>
                        </select>
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Passport Upload:</label>
                            <div class="col-lg-9">
								<input class="form-control" type="file" onChange="readURL(this);" name="data"  accept=".jpeg,.jpg,.png,.PNG,.JPEG,.JPG">
                            </div>
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



                        <div class="col-lg-12">
                            <input type="submit" name="addsalesrep2" value="Add Sales Rep" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending Create Admin OR Staff Account-->

<!-- Distributor Invevtory by Date-->
<div class="modal inmodal col-xs-12" id="dinventorybydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Inventory Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="esuperinventorybydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="dinventorybydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Distributor Inventory by Date-->

    <!-- Distributor Invevtory by Date-->
<div class="modal inmodal col-xs-12" id="binventorybydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Bar Inventory Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="bsuperinventorybydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="binventorybydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Bar Inventory by Date-->

    <!--Invevtory by Date-->
    <div class="modal inmodal col-xs-12" id="inventorybydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Inventory Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="superinventorybydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
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

    <!--Expiry by Date-->
    <div class="modal inmodal col-xs-12" id="expirybydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Expiry Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="superexpirybydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="expirybydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Expiry by Date-->


	 <!--Net Profit by Date-->
    <div class="modal inmodal col-xs-12" id="netprofit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-paypal"></i> Net Profit by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="supernetprofit.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="netprofit" value="Generate Net Profit" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Net Profit-->

    <!--Distributor Net Profit by Date-->
    <div class="modal inmodal col-xs-12" id="dnetprofit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-paypal"></i> Restuarant Net Profit by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="dsupernetprofit.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="dnetprofit" value="Generate Net Profit" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Distributor Net profit-->

    <!--Bar Net Profit by Date-->
    <div class="modal inmodal col-xs-12" id="bnetprofit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-paypal"></i> Bar Net Profit by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="bsupernetprofit.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="bnetprofit" value="Generate Net Profit" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Bar Net profit-->

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




	<!--Opex Category-->
    <div class="modal inmodal col-xs-12" id="opexctg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Add Opex Category </h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<?php
                        include("db_conn.php");


                        error_reporting(E_ALL);
                        if (isset($_REQUEST['opexctg'])) {
                            $category = trim(addslashes($_REQUEST['category']));

							//Check for duplicate record in database before inserting New Record
    $check=mysqli_query($conn, "SELECT * FROM opex_ctg WHERE category='$category'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
    echo "<script>alert('Category Already Exist in Our Database')
    location.href='super_admin.php'</script>";
   } else {

                            $sql1 = "INSERT INTO opex_ctg (category) VALUES ('$category')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Opex Category Added Successfully')
location.href='superopexctg_list.php'</script>";
                        }
						}
                        mysqli_close($conn);


                        ?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Category:</label>
                            <div class="col-lg-9">
                                <input type="text" name="category" placeholder="Enter Category" class="form-control" required="required">
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <input type="submit" name="opexctg" value="Add Opex Category" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Inventory by Date-->


<!--Opex Category-->
<div class="modal inmodal col-xs-12" id="addroom" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-university"></i> Add New Room </h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<?php
                        include("db_conn.php");


                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addroom'])) {

                            $room_id = trim(addslashes($_REQUEST['room_id']));
                            $room_name = trim(addslashes($_REQUEST['room_name']));
                            $price = trim(addslashes($_REQUEST['room_price']));
            $room_status = "Available";

							//Check for duplicate record in database before inserting New Record
    $check=mysqli_query($conn, "SELECT * FROM room_price WHERE room_name='$room_name'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
    echo "<script>alert('Room Already Exist in Our Database')
    location.href='roomlist.php'</script>";
   } else {

                            $sql1 = "INSERT INTO room_price (room_id, room_name, price) VALUES ('$room_id','$room_name','$price')";

                            $sql2 = "INSERT INTO room (room_id, room_name, price, room_status) VALUES ('$room_id','$room_name','$price','$room_status')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            $result = mysqli_query($conn, $sql2);
// if successfully update
if($result) {

                            echo "<script>alert('New Room Added Successfully')
location.href='roomlist.php'</script>";
                        }
						}
                    }
                        mysqli_close($conn);


                        ?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Room ID:</label>
                            <div class="col-lg-9">
                                <input type="text" name="room_id" placeholder="Enter Room ID" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Room Name:</label>
                            <div class="col-lg-9">
                                <input type="text" name="room_name" placeholder="Enter Room Name" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Price:</label>
                            <div class="col-lg-9">
                                <input type="text" name="room_price" placeholder="Enter Room Price" class="form-control" required="required">
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <input type="submit" name="addroom" value="Add New Room" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Add Room-->

    <!--Opex Category-->
    <div class="modal inmodal col-xs-12" id="productctg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Add Product Category </h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<?php
                        include("db_conn.php");


                        error_reporting(E_ALL);
                        if (isset($_REQUEST['productctg'])) {
                            $category = trim(addslashes($_REQUEST['category']));

							//Check for duplicate record in database before inserting New Record
    $check=mysqli_query($conn, "SELECT * FROM product_ctg WHERE category='$category'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
    echo "<script>alert('Category Already Exist in Our Database')
    location.href='super_admin.php'</script>";
   } else {

                            $sql1 = "INSERT INTO product_ctg (category) VALUES ('$category')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Product Category Added Successfully')
location.href='superproductctg_list.php'</script>";
                        }
						}
                        mysqli_close($conn);


                        ?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Category:</label>
                            <div class="col-lg-9">
                                <input type="text" name="category" placeholder="Enter Category" class="form-control" required="required">
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <input type="submit" name="productctg" value="Add Product Category" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Inventory by Date-->

    <!--Revoke Sales Order by Date-->
    <div class="modal inmodal col-xs-12" id="revokesalesorderbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> Revoke Sale Order Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="revokesalesorder.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="revokesalesorderbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Revoke Sales Order by Date-->

    <!--Revoke Sales by Date-->
    <div class="modal inmodal col-xs-12" id="revokesalesbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> Revoke Sales Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="revokesales.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="revokesalesbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Revoke Sales by Date-->

    <!--Distributor Revoke Sales Order by Date-->
    <div class="modal inmodal col-xs-12" id="drevokesalesorderbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> Revoke Sale Order Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="drevokesalesorder.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="drevokesalesorderbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Distributor Revoke Sales Order by Date-->

    <!--Bar Revoke Sales Order by Date-->
    <div class="modal inmodal col-xs-12" id="brevokesalesorderbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> Bar Revoke Sale Order Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="brevokesalesorder.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="brevokesalesorderbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Bar Revoke Sales Order by Date-->

    <!--Distributor Revoke Sales by Date-->
    <div class="modal inmodal col-xs-12" id="drevokesalesbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> Revoke Sales Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="drevokesales.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="drevokesalesbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Distributor Revoke Sales by Date-->

     <!--Bar Revoke Sales by Date-->
     <div class="modal inmodal col-xs-12" id="brevokesalesbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> BAR Revoke Sales Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="brevokesales.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="brevokesalesbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Distributor Revoke Sales by Date-->


    <!--Sales by Date-->
    <div class="modal inmodal col-xs-12" id="salesbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> Sales Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="supersalesbydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
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

    <!--Distributor Sales by Date-->
    <div class="modal inmodal col-xs-12" id="ssalesbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> Sales Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="ssupersalesbydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="ssalesbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Distributor Sales by Date-->


     <!--Distributor Sales by Date-->
     <div class="modal inmodal col-xs-12" id="dsalesbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-shopping-cart"></i> Sales Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="dsupersalesbydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="dsalesbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Distributor Sales by Date-->






    <!--Invevtory by Brand-->
    <div class="modal inmodal col-xs-12" id="inventorybybrand" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Inventory Report by Brand</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="superinventorybybrand.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
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
                    <h3><i class="fa fa-calculator"></i> Add Operating Expensis (OPEX)</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");


                        $rand = rand(000, 999);
                        $today = date("dmy");
                        $time = date("His");
                        $ID = "OPEX" . $today . $time;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addopex'])) {
                            $opex_id = trim(addslashes($_REQUEST['opex_id']));
                            $opex_date = trim(addslashes($_REQUEST['opex_date']));
                            $purpose = trim(addslashes($_REQUEST['purpose']));
                            $description = trim(addslashes($_REQUEST['description']));
                            $amount = trim(addslashes($_REQUEST['amount']));
                            $c_o = trim(addslashes($_REQUEST['c_o']));


                            $sql1 = "INSERT INTO opex (opex_id, opex_date, purpose, description, amount, c_o) VALUES ('$opex_id','$opex_date','$purpose','$description','$amount','$c_o')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Opex Successfully Added')
location.href='superopex.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Opex ID:</label>
                            <div class="col-lg-9">
                                <input type="text" name="opex_id" value="<?php echo $ID; ?>" placeholder="Opex ID" readonly class="form-control" required="required">
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

    <!--Distributor Opex by Date-->
    <div class="modal inmodal col-xs-12" id="dopexbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Restuarant Opex Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="dsuperopexbydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="dopexbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Distributor Opex by Date-->

    <!--Distributor Opex by Purpose-->
    <div class="modal inmodal col-xs-12" id="dopexbypurpose" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Restuarant Opex Report by Purpose</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="dsuperopexbypurpose.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
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



                        <div class="col-lg-12">
                            <input type="submit" name="dopexbypurpose" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Distributor Opex by Purpose-->


    <!--Bar Opex by Date-->
    <div class="modal inmodal col-xs-12" id="bopexbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Bar Opex Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="bsuperopexbydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="bopexbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Bar Opex by Date-->

    <!--Bar Opex by Purpose-->
    <div class="modal inmodal col-xs-12" id="bopexbypurpose" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Bar Opex Report by Purpose</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="bsuperopexbypurpose.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
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



                        <div class="col-lg-12">
                            <input type="submit" name="bopexbypurpose" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Bar Opex by Purpose-->


    <!--Opex by Date-->
    <div class="modal inmodal col-xs-12" id="opexbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Opex Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="superopexbydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
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
                    <h3><i class="fa fa-fax"></i> Opex Report by Purpose</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="superopexbypurpose.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
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
                    <h3><i class="fa fa-money"></i> Add Salary</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");


                        $rand = rand(000, 999);
                        $today = date("dmy");
                        $time = date("His");
                        $ID = "SALARY" . $today . $time;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addsalary'])) {
                            $salary_id = trim(addslashes($_REQUEST['salary_id']));
                            $salary_date = trim(addslashes($_REQUEST['salary_date']));
                            $staff_name = trim(addslashes($_REQUEST['staff_name']));
                            $payment_type = trim(addslashes($_REQUEST['payment_type']));
                            $month = trim(addslashes($_REQUEST['month']));
                            $year = trim(addslashes($_REQUEST['year']));
                            $salary_amount = trim(addslashes($_REQUEST['salary_amount']));


                            $sql1 = "INSERT INTO salary (salary_id, salary_date, staff_name, payment_type, month, year, salary_amount) VALUES ('$salary_id','$salary_date','$staff_name','$payment_type','$month','$year','$salary_amount')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Salary Successfully Added')
location.href='supersalary.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Salary ID:</label>
                            <div class="col-lg-9">
                                <input type="text" name="salary_id" value="<?php echo $ID; ?>" placeholder="Salary ID" readonly class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date:</label>
                            <div class="col-lg-9">
                                <input type="date" name="salary_date" placeholder="Salary Date" class="form-control" required="required">
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
                                        while ($row = mysqli_fetch_array($result2)) {
                                    ?>
                                            <option value="<?php echo $row['staff_name'] ?>"> <?php echo $row['staff_name'] ?> </option><?php }
                                                                                                                                } ?>
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
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Amount:</label>
                            <div class="col-lg-9">
                                <input type="text" name="salary_amount" step="any" id="Amount" onKeyUp="sum()" placeholder="Amount" class="form-control" required="required">
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
                    <h3><i class="fa fa-money"></i> Salary Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="supersalarybydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
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
                    <h3><i class="fa fa-fax"></i> Salary Report by Staff Name</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="supersalarybystaff.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
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
                                        while ($row = mysqli_fetch_array($result2)) {
                                    ?>
                                            <option value="<?php echo $row['staff_name'] ?>"> <?php echo $row['staff_name'] ?> </option><?php }
                                                                                                                                } ?>
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
                    <h3><i class="fa fa-fax"></i> Salary Report by Payment Type</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="supersalarybytype.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
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
