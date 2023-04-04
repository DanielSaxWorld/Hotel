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
if($_POST){
$datefrom = $_REQUEST ["datefrom"];
$dateto = $_REQUEST ["dateto"];
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $session_business_name; ?> | Net Profit</title>

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
                        <h5><img src="img/hgl_logo.fw.png" height="25"> <?php echo $session_business_name; ?> | Net Profit Report</h5>
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



<style>
td { text-align:center}
th { text-align:center}
tr { text-align:center}
.value-positive {
  color: #090;
}

.value-negative {
  color: #F00;
}
</style>

  <tr>
<th colspan="2" style="text-align: center; text-transform: uppercase">
	  <?php echo date("jS-F-Y", strtotime($datefrom)); ?> to <?php echo date("jS-F-Y", strtotime($dateto)); ?>
	  </th>
</tr>

<?php
 $sql = "SELECT *, sum(total_amount) as TOTAL_amountCHECKIN FROM check_in WHERE `date` BETWEEN '$datefrom' AND '$dateto'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

	$TOTAL_amountCHECKIN = $row['TOTAL_amountCHECKIN'] < 0 ? 'negative' : 'positive';

   echo	'
   <tr>
<th colspan="2">TOTAL GROSS CHECK IN: ' . "<span class='value-$TOTAL_amountCHECKIN'>" . number_format($row['TOTAL_amountCHECKIN'], 2) . "</span>" .'</th>
</tr>';

			$_REQUEST['TOTAL_amountCHECKIN']=$row['TOTAL_amountCHECKIN'];

}
?>



<?php
 $sql = "SELECT *, sum(amount) as TOTAL_amountESALES FROM dsales_order WHERE `date` BETWEEN '$datefrom' AND '$dateto'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

	$TOTAL_amountESALES = $row['TOTAL_amountESALES'] < 0 ? 'negative' : 'positive';

   echo	'
   <tr>
<th colspan="2">TOTAL GROSS RESTUARANT SALES: ' . "<span class='value-$TOTAL_amountESALES'>&#8358;" . number_format($row['TOTAL_amountESALES'], 2) . "</span>" .'</th>
</tr>';

			$_REQUEST['TOTAL_amountESALES']=$row['TOTAL_amountESALES'];

}
?>

<?php
 $sql = "SELECT *, sum(amount) as TOTAL_amountBSALES FROM ssales_order WHERE `date` BETWEEN '$datefrom' AND '$dateto'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

	$TOTAL_amountSALES = $row['TOTAL_amountBSALES'] < 0 ? 'negative' : 'positive';

   echo	'
   <tr>
<th colspan="2">TOTAL GROSS BAR SALES: ' . "<span class='value-$TOTAL_amountSALES'>&#8358;" . number_format($row['TOTAL_amountBSALES'], 2) . "</span>" .'</th>
</tr>';

			$_REQUEST['TOTAL_amountBSALES']=$row['TOTAL_amountBSALES'];

}
?>

<tr>
<td></td>
</tr>



<?php
 $sqld = "SELECT *, sum(profit) as TOTAL_profitESALES FROM dsales_order WHERE `date` BETWEEN '$datefrom' AND '$dateto'";


$resultd = mysqli_query($conn, $sqld);

    while($row = mysqli_fetch_array($resultd)) {

	$TOTAL_profitESALES = $row['TOTAL_profitESALES']  < 0 ? 'negative' : 'positive';

   echo	'

<tr>
<th colspan="2">RESTUARANT GROSS PROFIT: ' . "<span class='value-$TOTAL_profitESALES'>&#8358;" . number_format($row['TOTAL_profitESALES'] , 2) . "</span>" .'</th>
</tr>';

			$_REQUEST['TOTAL_profitESALES']=$row['TOTAL_profitESALES'];

}
?>

<?php
 $sqls = "SELECT *, sum(profit) as TOTAL_profitBSALES FROM ssales_order WHERE `date` BETWEEN '$datefrom' AND '$dateto'";


$results = mysqli_query($conn, $sqls);

        while($row = mysqli_fetch_array($results)) {

	$TOTAL_profitBSALES = $row['TOTAL_profitBSALES'] < 0 ? 'negative' : 'positive';

   echo	'

<tr>
<th colspan="2">BAR GROSS PROFIT: ' . "<span class='value-$TOTAL_profitBSALES'>&#8358;" . number_format($row['TOTAL_profitBSALES'], 2) . "</span>" .'</th>
</tr>';

			$_REQUEST['TOTAL_profitBSALES']=$row['TOTAL_profitBSALES'];

}
?>

<tr>
<td></td>
</tr>

<?php
 $sql = "SELECT *, sum(amount) as TOTAL_opexAMOUNT FROM opex WHERE `opex_date` BETWEEN '$datefrom' AND '$dateto'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

	$TOTAL_opexAMOUNT = $row['TOTAL_opexAMOUNT'] < 0 ? 'negative' : 'positive';

   echo	'

<tr>
<th colspan="2">TOTAL OPEX AMOUNT: ' . "<span class='value-$TOTAL_opexAMOUNT'>&#8358;" . number_format($row['TOTAL_opexAMOUNT'], 2) . "</span>" .'</th>
</tr>';

			$_REQUEST['TOTAL_opexAMOUNT']=$row['TOTAL_opexAMOUNT'];

}
?>

<?php
 $sql = "SELECT *, sum(salary_amount) as TOTAL_salaryAMOUNT FROM salary WHERE `salary_date` BETWEEN '$datefrom' AND '$dateto'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

	$TOTAL_salaryAMOUNT = $row['TOTAL_salaryAMOUNT'] < 0 ? 'negative' : 'positive';

   echo	'

<tr>
<th colspan="2">TOTAL SALARY AMOUNT: ' . "<span class='value-$TOTAL_salaryAMOUNT'>&#8358;" . number_format($row['TOTAL_salaryAMOUNT'], 2) . "</span>" .'</th>
</tr>';

			$_REQUEST['TOTAL_salaryAMOUNT']=$row['TOTAL_salaryAMOUNT'];

}
?>
						<tr>
							<td></td>
						<td></td>
						</tr>

<?php
   $totalexpensis = $_REQUEST['TOTAL_opexAMOUNT'] + $_REQUEST['TOTAL_salaryAMOUNT'];
	$NETprofit = $_REQUEST['TOTAL_profitESALES'] - $totalexpensis;
   $NETprofit2 = $NETprofit < 0 ? 'negative' : 'positive';

   echo	'<tr>
			<th colspan="2">NET PROFIT: ' . "<span class='value-$NETprofit2'>&#8358;" . number_format($NETprofit, 2) . "</span>" .'</th>
			</tr>';

   ?>
<tr>
<td colspan="2"><a href="javascript:window.print() "><button type="button" class="btn btn-danger"><i class="fa fa-print"></i> Print Net Profit Report</button></a></td>


</tr>



<?php

}
mysqli_close($conn);
?>



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
                    {extend: 'excel', title: 'OpexbyDate'},
                    {extend: 'pdf', title: 'OpexbyDate'},

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
