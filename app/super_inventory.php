<?php
include('session2.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>

<?php
if(isset($_REQUEST['product_id'])){
$sql = "SELECT * FROM products WHERE product_id='$_REQUEST[product_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $session_business_name; ?> | Supermarket Inventory</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.fw.png" type="text/javascript">

</head>

<body>

   <?php  include 'super_menus.php'; ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><img src="img/hgl_logo.fw.png" height="30"> <strong><?php echo $session_business_name; ?> Supermarket INVENTORY</strong></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="super_admin.php">Dashboard</a>
                        </li>

                        <li class="active">
                            <strong>Supermarket Inventory</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                    <div class="title-action">
                        <a data-toggle="modal" data-target="#addproduct" class="btn btn-primary" style="float:right"><i class="fa fa-plus-circle"></i> Add Product</a>
                    </div>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php echo $session_business_name; ?> | Supermarket Inventory</h5>
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

                        <div class="table-responsive">
                    <table border="" style="padding:6px" class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                    <th>S/N</th>
                        <th>Product Code</th>
                        <th>Generic Name</th>
                        <th>Category</th>
                        <th>Purchase Date</th>
                        <th>Purchase Price</th>
                        <th>Selling Price</th>
                        <th>Profit</th>
                        <th>QTY</th>
                        <th>Total Amount</th>
                         <th>Total Profit</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
include('db_conn.php');
$sql = "SELECT *, DATE_FORMAT(date_arrival, '%a-%d-%b-%Y') as Newpurchasedate FROM `products` ORDER by product_id ASC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
	  $_REQUEST['TOTAL_amount'] = $row['price'] * $row['qty'];
		   $_REQUEST['TOTAL_profit'] = $row['profit'] * $row['qty'];

?>


                    <tr class="gradeA">
                    <td><?php echo $row['product_id']; ?></td>
                        <td><?php echo $row['product_code']; ?></td>
                        <td><?php echo $row['gen_name']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['Newpurchasedate']; ?></td>
                        <td><?php echo number_format($row['o_price'], 2); ?></td>
                        <td><?php echo number_format($row['price'], 2); ?></td>
                        <td><?php echo number_format($row['profit'], 2); ?></td>
                        <td><?php echo $row['qty']; ?></td>
                        <td><?php echo number_format($_REQUEST['TOTAL_amount'], 2); ?></td>
                        <td><?php echo number_format($_REQUEST['TOTAL_profit'], 2); ?></td>
                        <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">

                             <li><a data-toggle="modal" <?php echo "href='superupdateproduct.php?product_id=".$row['product_id']."'"; ?>>Edit</a></li>
								<li><a data-toggle="modal" <?php echo "href='superdelete_product.php?product_id=".$row['product_id']."'"; ?> onclick="return confirm('ARE YOU SURE TO DELETE THIS PRODUCT!'); ">Delete</a></li>
                            </ul>
                        </div></td>
                    </tr>

<?php
}
}

mysqli_close($conn);
?>
                    </tbody>
                    <div id="modal-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12 b-r">


                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                    </table>


                        </div>

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
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'Inventory'},
                    {extend: 'pdf', title: 'Inventory'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>

</body>

</html>
