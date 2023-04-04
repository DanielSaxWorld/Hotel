<?php
include('session.php');
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

    <title><?php echo $session_business_name; ?> | Final Meter Report by Date</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.fw.png" type="text/javascript">

</head>

<body>

   <?php  include 'menus.php'; ?>



        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><img src="img/hgl_logo.fw.png" height="25"> <?php echo $session_business_name; ?> | Final Meter Report by Date</h5>
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
                        <th>Meter ID</th>
                        <th>Date</th>
                        <th>Pump 1A</th>
                        <th>Pump 1B</th>
                        <th>Pump 2</th>
                        <th>Pump 3</th>
                        <th>Pump 4A</th>
                        <th>Pump 4B</th>
                    </tr>
                    </thead>

                    <tbody>
<?php
include('db_conn.php');
if($_POST){
$datefrom = $_REQUEST ["datefrom"];
$dateto = $_REQUEST ["dateto"];

$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newOMdate FROM `opening_meter` WHERE `date` BETWEEN '$datefrom' AND '$dateto'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {
	$_REQUEST['openpump1a'] = $row['pump1a'];
	 $_REQUEST['openpump1b'] = $row['pump1b'];
	 $_REQUEST['openpump2'] = $row['pump2'];
	 $_REQUEST['openpump3'] = $row['pump3'];
	 $_REQUEST['openpump4a'] = $row['pump4a'];
	 $_REQUEST['openpump4b'] = $row['pump4b'];
?>
						
						


                    <tr class="gradeA">
                         <td><?php echo $row['om_id']; ?></td>
                         <td><?php echo $row['newOMdate']; ?></td>
                        <td><?php echo $_REQUEST['openpump1a']; ?></td>
                        <td><?php echo $_REQUEST['openpump1b']; ?></td>
                        <td><?php echo $_REQUEST['openpump2']; ?></td>
                        <td><?php echo $_REQUEST['openpump3']; ?></td>
                        <td><?php echo $_REQUEST['openpump4a']; ?></td>
                        <td><?php echo $_REQUEST['openpump4b']; ?></td>
                    </tr>
						
						<?php
		 }
}
}
		 ?>
						
						
						<?php
	$sql3 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newCMdate FROM `closing_meter` WHERE `date` BETWEEN '$datefrom' AND '$dateto'";
$result3 = mysqli_query($conn, $sql3);
if (mysqli_num_rows($result3) > 0) {
	 while($row = mysqli_fetch_array($result3)) {
	$_REQUEST['closepump1a'] = $row['pump1a'];
	 $_REQUEST['closepump1b'] = $row['pump1b'];
	 $_REQUEST['closepump2'] = $row['pump2'];
	 $_REQUEST['closepump3'] = $row['pump3'];	 
	 $_REQUEST['closepump4a'] = $row['pump4a'];	 
	 $_REQUEST['closepump4b'] = $row['pump4b'];	 
?>
						<tr class="gradeA">
                         <td><?php echo $row['cm_id']; ?></td>
                         <td><?php echo $row['newCMdate']; ?></td>
                        <td><?php echo $_REQUEST['closepump1a']; ?></td>
                        <td><?php echo $_REQUEST['closepump1b']; ?></td>
                        <td><?php echo $_REQUEST['closepump2']; ?></td>
                        <td><?php echo $_REQUEST['closepump3']; ?></td>
                        <td><?php echo $_REQUEST['closepump4a']; ?></td>
                        <td><?php echo $_REQUEST['closepump4b']; ?></td>
                    </tr>

<?php

}
}
?>
                    </tbody>
						<tbody>
                                            
                                            <tr>
                                                <td class="text-navy"></td>
                                                <td class="text-navy"></td>
                                                <td class="text-danger"><?php echo $totalpump1a = $_REQUEST['closepump1a'] - $_REQUEST['openpump1a']; ?> KG</td>
                                                <td class="text-danger"> <?php echo $totalpump1b =  $_REQUEST['closepump1b'] - $_REQUEST['openpump1b']; ?> KG</td>
                                                <td class="text-danger"><?php echo $totalpump2 = $_REQUEST['closepump2'] - $_REQUEST['openpump2']; ?> KG</td>
                                                <td class="text-danger"><?php echo $totalpump3 = $_REQUEST['closepump3'] - $_REQUEST['openpump3']; ?> KG</td>
                                                <td class="text-danger"><?php echo $totalpump4a = $_REQUEST['closepump4a'] - $_REQUEST['openpump4a']; ?> KG</td>
                                                <td class="text-danger"><?php echo $totalpump4b = $_REQUEST['closepump4b'] - $_REQUEST['openpump4b']; ?> KG</td>
                                               
                                            </tr>
                                            
                                           
                                            </tbody>
											
											<tbody>
                                            
                                            <tr>
                                                <td colspan="4" style="text-align: right"><strong>TOTAL KG SOLD</strong></td>
                                                <td colspan="2"><strong><?php echo $totalpump1a + $totalpump1b + $totalpump2 + $totalpump3 + $totalpump4a + $totalpump4b; ?> KG</strong> </td>
                                                
                                               
                                            </tr>
                                            
                                           
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
