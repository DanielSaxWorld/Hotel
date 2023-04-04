<?php
include('session.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>

<?php
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM hirer WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
	$today = date("Y-m-d");
$age = $today - $row['dob'];

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Repayment History | <?php echo $row['fullname']; ?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.fw.png" type="text/javascript">

</head>

<body>

<?php include('menus2.php'); ?>   
   
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><strong>REPAYMENT HISTORY | <?php echo $row['fullname']; ?></strong></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="admin.php">Dashboard</a>
                        </li>
                        
                        <li class="active">
                            <strong>REPAYMENT HISTORY</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php echo $row['fullname']; ?> | REPAYMENT HISTORY</h5>
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
                        <th style="text-align:left">Transaction ID</th>
                        <th style="text-align:left">Fullname</th>
                        <th style="text-align:left">Payment Purpose</th>
                        <th style="text-align:left">Method</th>
						<th style="text-align:left">Bank</th>
                        <th style="text-align:left">Teller No</th>
                        <th style="text-align:left">Payment Date</th>
                         <th style="text-align:left">Amount Paid</th>
						<th style="text-align:left">Action</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <?php  
$sql = "SELECT *, DATE_FORMAT(payment_date, '%a-%d-%b-%Y') as NewPaymentDate FROM payment WHERE uin='$_REQUEST[uin]' ORDER BY payment_date ASC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {
?>  

                   
                    <tr class="gradeA">
                        <td><?php echo $row['transaction_id']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['payment_purpose']; ?></td>
						<td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['bank']; ?></td>
                        <td><?php echo $row['teller_no']; ?></td>
                        <td><?php echo $row['NewPaymentDate']; ?></td>
                        <td>N<?php echo number_format($row['amount_paid'], 2); ?></td>
						<td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a <?php echo "href='preview_print.php?transaction_id=".$row['transaction_id']."' title='Print Receipt'"; ?>>Print Receipt</a></li>
							<li><a data-toggle="modal" <?php echo "href='delete_payment.php?id=".$row['id']."'"; ?> onclick="return confirm('ARE YOU SURE TO DELETE THIS PAYMENT!'); ">Delete</a></li>

                                
                            </ul>
                        </div></td>
                    </tr>
                    
<?php  
}

}
?>
                    </tbody>
						<tbody>
<?php 
$sql2 = "SELECT sum(amount_paid) as TOTALamount FROM payment WHERE uin='$_REQUEST[uin]'";

$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	 while($row = mysqli_fetch_array($result2)) {
	$_REQUEST['TOTALamount'] = $row ['TOTALamount'];
?>               

						
<tr>
<th colspan="7" style=" text-align:right">TOTAL AMOUNT REPAID</th>
    <th colspan="2" style="text-align:left">N<?php echo number_format($row['TOTALamount'], 2); 
	}
}

 ?></th>
</tr>
</tr>

<?php 

$sql = "SELECT * FROM hirer WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
	$balance = $row['hiring_cost'] - $_REQUEST['TOTALamount'];
?>  
<tr>
<th colspan="7" style=" text-align:right">TOTAL HIRING COST</th>
    <th colspan="2">N<?php echo number_format($row['hiring_cost'], 2); ?></th>
</tr>


<tr>
<th colspan="7" style=" text-align:right">AMOUNT TO BALANCE</th>
    <th colspan="2">N<?php echo number_format($balance, 2); ?></th>
</tr>
							<?php
}
	mysqli_close($conn);
}
	?>
                </tbody>
                    <div id="modal-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">

                                                    
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
                    {extend: 'excel', title: '<?php echo $_REQUEST['uin']; ?> Repayment History'},
                    {extend: 'pdf', title: '<?php echo $_REQUEST['uin']; ?> Repayment History'},

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
