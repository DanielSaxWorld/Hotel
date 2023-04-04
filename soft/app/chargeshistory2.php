<?php
include('session_reception.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>

<?php
include('db_conn.php');
if(isset($_REQUEST['lodge_id'])){
$sql6 = "SELECT * FROM charges WHERE lodge_id='$_REQUEST[lodge_id]'";
$result = mysqli_query($conn, $sql6);
$row=mysqli_fetch_array($result);

        $guestfullname =$row['fullname'];

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $guestfullname; ?> | Charges History</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.fw.png" type="text/javascript">

</head>

<body>

   <?php  include 'menus6.php'; ?>



        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><img src="img/hgl_logo.fw.png" height="25"> <?php echo $guestfullname; ?> | Charges History</h5>
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
                    <th >ID</th>
                    <th >Date</th>
                    <th >Trans ID</th>
                        <th >Lodge ID</th>
                         <th >Fullname</th>
                         <th >Phone</th>
                         <th >Room</th>
                         <th >Department</th>
                         <th >Description</th>
                         <th style="text-align:right">Status</th>
                         <th style="text-align:left">Amount</th>
                         <th style="text-align:left">Action</th>
                    </tr>
                    </thead>

                    <tbody>
<?php
$sql = "SELECT * FROM `charges` WHERE `lodge_id`='$_REQUEST[lodge_id]'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_array($result)) {
        //$discount =$row['room_price'] * $row['night'] * $row['discount']/100;

?>



                    <tr class="gradeA">
                    <td><?php echo $row['id']; ?></td>
                    <td class="text-navy"><?php echo date('d-M-Y h:i:s a', strtotime($row['time'])); ?></td>
                    <td><?php echo $row['transid']; ?></td>
                    <td><?php echo $row['lodge_id']; ?></td>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['room_name']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['status']; ?></td>

                        <td>&#8358;<?php echo number_format($row['amount'],2); ?></td>

<?php
if($row['status']=='Not Paid'){
echo "<td><a href='paycharges2.php?id=$row[id]' title='Pay Now'><button type='button' class='btn btn-outline btn-danger btn-xs' onclick='return confirm(Are you sure to pay this bill?)'>Pay Now </button></a></td>";
} else{
    echo "<td><button type='button' class='btn btn-outline btn-primary btn-xs'>Paid </button></td>";
}
?>




                    </tr>

<?php
}
}
}
?>
                    </tbody>
                    <tbody>
<?php
 $sql = "SELECT *, sum(amount) as GRAND_amount FROM charges WHERE `lodge_id`='$_REQUEST[lodge_id]'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

?>

<tr>
<th colspan="10" style=" text-align:right">GRAND TOTAL</th>
<th colspan="2" style=" text-align:left">&#8358;<?php echo number_format($row['GRAND_amount'], 2); ?></th>

</tr>




<?php
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
                    {extend: 'excel', title: 'HGL_Guest_List'},
                    {extend: 'pdf', title: 'HGL_Guest_List'},

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
