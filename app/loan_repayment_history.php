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
if(isset($_REQUEST['loan_id'])){
$sql = "SELECT * FROM loan_repayment WHERE loan_id='$_REQUEST[loan_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['fullname']; ?> | AASCMSL-Loan Repayment History </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/faan favicon.fw.png" type="text/javascript">

</head>

<body>

   <?php  include 'm_menus.php'; ?>
   
   
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php echo $row['fullname']; ?> | LOAN REPAYMENT HISTORY | <strong><?php echo $row['loan_id']; ?></strong></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="admin.php">Dashboard</a>
                        </li>
                        
                        <li class="active">
                            <strong>Loan Repayment History</strong>
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
                        <h5>AASCMSL Loan Repayment History | <?php echo $row['loan_id']; ?></h5>
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
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Loan ID</th>
                        <th>UIN</th>
                        <th>Fullname</th>
                        <th>Loan Type</th>
                        <th>Method</th>
                        <th>Bank</th>
                        <th>Teller No</th>
                        <th>Payment Date</th>
                        <th>Loan Paid</th>
                        
                    </tr>
                    </thead>
                    
                    <tbody>
<?php  


$sql = "SELECT *, DATE_FORMAT(payment_date, '%a-%d-%b-%Y') as New_payment_date FROM `loan_repayment` WHERE `loan_id`='$_REQUEST[loan_id]'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {
?>                    
                    
                                   
                    <tr class="gradeA">
                        <td><?php echo $row['loan_id']; ?></td>
                        <td><?php echo $row['uin']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['loan_type']; ?></td>
                        <td><?php echo $row['payment_method']; ?></td>
                        <td><?php echo $row['bank']; ?></td>
                        <td><?php echo $row['teller_no']; ?></td>
                        <td><?php echo $row['New_payment_date']; ?></td>
                        <td>N<?php echo number_format($row['loan_deductable'], 2); ?></td>
                        
                        
                    </tr>
                     <?php 
					
}
}

}
					?>
                    
                    </tbody>
                    <tbody>
<?php 
$sql2 = "SELECT *, sum(loan_deductable) as TOTALloanpaid FROM loan_repayment WHERE loan_id='$_REQUEST[loan_id]'";

$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	 while($row = mysqli_fetch_array($result2)) {
	$_REQUEST['TOTALloanpaid'] = $row ['TOTALloanpaid'];
	$_REQUEST['loanbalance'] = $row ['loan_amount'] - $row ['TOTALloanpaid']; 
?>               
                
<tr>
<th colspan="6" style=" text-align:right">TOTAL LOAN PAID SO FAR</th>
    <th colspan="3">N<?php echo number_format($row['TOTALloanpaid'], 2); 

 ?></th>
</tr>
<tr>
<th colspan="6" style=" text-align:right">LOAN BALANCE</th>
    <th colspan="3">N<?php echo number_format($_REQUEST['loanbalance'], 2); 

 ?></th>
</tr>
<tr>
<th colspan="6" style=" text-align:right">TOTAL LOAN PAYABLE</th>
<?php $_REQUEST['TotalLoanPayble'] = $row['TOTALloanpaid'] + $_REQUEST['loanbalance'] ; ?>
    <th colspan="3">N<?php echo number_format($_REQUEST['TotalLoanPayble'], 2); 
	}
}
mysqli_close($conn);

 ?></th>
</tr>
                </tbody>
                   
                    
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
                    {extend: 'excel', title: '<?php echo $_REQUEST['uin']; ?>_Savings_History'},
                    {extend: 'pdf', title: '<?php echo $_REQUEST['uin']; ?>_Savings_History'},

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
