<?php
include('session2.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>

 <?php
include('db_conn.php');
if(isset($_REQUEST['salesrep_id'])){
$sql = "SELECT * FROM salesrep WHERE salesrep_id='$_REQUEST[salesrep_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['fullname']; ?> | SALES REP PROFILE</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/faan favicon.fw.png" type="text/javascript">

</head>

<body class="">

    <?php include 'super_menus.php'; ?>
        
	<?php
include('db_conn.php');
if(isset($_REQUEST['salesrep_id'])){
$sql = "SELECT * FROM salesrep WHERE salesrep_id='$_REQUEST[salesrep_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>
            <div class="wrapper wrapper-content">
                 <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><img src="img/faan favicon.fw.png" height="30" style="margin-top:-5px"> <?php echo $row['fullname']; ?> | <?php echo $row['salesrep_id']; ?> | SALES REP PROFILE HISTORY</h5>
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
                    <h3>PERSONAL INFORMATION</h3>
                        <div class="row">
                           <table class="table table-striped table-bordered table-hover dataTables-example">
 <style>
th { text-align:right}
</style>
                           
                           
                           
                           <tr>
                           <th>FULLNAME:</th>
                           <td><?php echo $row['fullname']; ?></td>
                           <th>EMAIL ADDRESS:</th>
                           <td><?php echo $row['email']; ?></td>
							   <td rowspan="2"><img src="salesrep/<?php echo $row['passport']; ?>" height="80" class="img-shadow"></td>
                           </tr>
                           
                           <tr>
                           <th>PHONE NO:</th>
                           <td><?php echo $row['phone']; ?></td>
                           <th>GENDER:</th>
                           <td colspan="2"><?php echo $row['gender']; ?></td>
                           </tr>
                           
                           <tr>
                           <th>ADDRESS:</th>
                           <td><?php echo $row['address']; ?></td>
                           <th>LOCATION:</th>
                           <td colspan="2"><?php echo $row['location']; ?></td>
                           </tr>
                           
                           
                           
                           <?php
						   }
}
						   ?>
                           </table>
                        </div>
                        <h3>INVENTORY HISTORY</h3>
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Stock No</th>
                        <th>Date</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <td>Total</td>
                        <th>Action</th>
                    </tr>
                    </thead>
                    
                    <tbody>
<?php
include('db_conn.php');
//$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as Newdate FROM `products_salesrep` WHERE `salesrep_id` = '$_REQUEST[salesrep_id]''";
$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as Newdate FROM `products_salesrep` WHERE `salesrep_id`='$_REQUEST[salesrep_id]' ORDER by product_id ASC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
	  $_REQUEST['TOTAL_amount'] = $row['price'] * $row['qty'];

?>
                    
                    
                                   
                    <tr class="gradeA">
                        <td><?php echo $row['product_id']; ?></td>
                        <td><?php echo $row['salesrep_id']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['gen_name']; ?></td>
                        <td><?php echo $row['Newdate']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['product_code']; ?></td>
                        <td><?php echo number_format($row['price'], 2); ?></td>
                        <td><?php echo $row['qty']; ?></td>
                        <td><?php echo number_format($_REQUEST['TOTAL_amount'], 2); ?></td>
                        <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">

                             <li><a data-toggle="modal" <?php echo "href='editsalesrep_product.php?product_id=".$row['product_id']."'"; ?>>Edit</a></li>
								<li><a data-toggle="modal" <?php echo "href='superdelete_productsalesrep.php?product_id=".$row['product_id']."'"; ?> onclick="return confirm('ARE YOU SURE TO DELETE THIS PRODUCT!'); ">Delete</a></li>
                            </ul>
                        </div></td>
                    </tr>
                    
<?php  
}

}
?>
                    </tbody>
                    
                    
                    </table>
                    
                     
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


</body>

</html>
