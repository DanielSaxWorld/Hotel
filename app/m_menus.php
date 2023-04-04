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
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>

                        <div class="logo-element">
                           <img src="img/favicon.fw.png">
                        </div>
                    </li>
    <li class="active">
    <a href="admin.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
       <li class="active"><a href="super_admin.php">Go to Dashboard</a></li>
       <li><a <?php echo "href='guest_profile.php?uin=".$row['uin']."' title='Guest Profile'"; ?>>Guest Profile</a></li>
       <li><a <?php echo "href='check_in.php?uin=".$row['uin']."' title='Check In'"; ?>>Check In</a></li>
    </ul>
    </li>



                    <!--<li>
                        <a href="#"><i class="fa fa-mobile-phone"></i> <span class="nav-label">SEND SMS</span><span class="label label-info pull-right">NEW</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Loan Repayment</a></li>
                            <li><a href="#">Birthday SMS</a></li>
                        </ul>
                    </li>-->


                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">

        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="supersearch.php">
                <div class="form-group">
                    <input type="text" name="search" placeholder="Enter Guest Name..." class="form-control" name="top-search" id="top-search">
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
</span> &nbsp; | &nbsp;<span class="m-r-sm text-muted welcome-message">Welcome to <?php echo $session_business_name; ?> Portal <strong>(<?php echo $session_email; ?>)</strong>.</span>
                </li>

                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>

            </ul>
        </nav>
        </div>