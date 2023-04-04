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

    <title><?php echo $session_business_name; ?> | Sales Debtors</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.fw.png" type="text/javascript">

</head>

<body>

   <?php  include 'super_menus.php'; ?>



        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><img src="img/hgl_logo.fw.png" height="25"> <?php echo $session_business_name; ?> | Sales Debtors Report</h5>
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
						<th>Receipt No</th>
						<th>Cashier</th>
                        <th>Sales Date</th>
                        <th>Customer Name</th>
                        <th>Payment Mode</th>
                        <th style="text-align: right;">Amount</th>
						<th>Total Paid</th>
						<th>Balance</th>
						<th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
<?php
include('db_conn.php');


$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newsalesdate FROM `sales` WHERE imei='Credit' ORDER by 'transactions_id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {
		 $_REQUEST['invoice_number'] = $row['invoice_number'];
		  $_REQUEST['amount'] = $row['amount'];
		 $_REQUEST['transaction_id'] = $row['transaction_id'];


?>

                    <tr class="gradeA">
                        <td><?php echo $row['transaction_id']; ?></td>
						<td><?php echo $row['invoice_number']; ?></td>
                         <td><?php echo $row['cashier']; ?></td>
                        <td><?php echo $row['newsalesdate']; ?></td>
                        <td><?php echo $row['name']; ?></td>
						<td><?php echo $row['imei']; ?></td>
                        <td style="text-align: right;"><?php echo number_format($row['amount'], 2); ?></td>
						<td>
							<?php
$sql2 = "SELECT sum(amount) as TOTALamountPAID FROM repayment WHERE invoice_number='$_REQUEST[invoice_number]'";

$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	 while($row = mysqli_fetch_array($result2)) {
	$_REQUEST['TOTALamountPAID'] = $row ['TOTALamountPAID'];

		  echo number_format($row['TOTALamountPAID'], 2);
	}
}
 ?>
						</td>

						<td>
		<?php
		 $balance = $_REQUEST['amount'] - $_REQUEST['TOTALamountPAID'];

		 echo number_format($balance, 2);

		 ?>
						</td>

						<td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a <?php echo "href='superviewpayment.php?transaction_id=".$_REQUEST['transaction_id']."' title='View Repayment'"; ?>>View </a></li>
                                <li><a <?php echo "href='superaddrepayment.php?invoice_number=".$_REQUEST['invoice_number']."' title='Add Repayment'"; ?>>Add  Repayment </a>  </li>

                            </ul>
                        </div></td>

                    </tr>

<?php
}
}




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
                    {extend: 'excel', title: 'Classic_SalesbyDate'},
                    {extend: 'pdf', title: 'Classic_SalesbyDate'},

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
