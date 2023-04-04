<?php
include('db_conn.php');
if(isset($_REQUEST['save'])){
	$checkbox = $_REQUEST['check'];
	for($i=0;$i<count($checkbox);$i++){
	$del_id = $checkbox[$i]; 
	mysqli_query($conn,"DELETE FROM sales WHERE transaction_id='".$del_id."'");
	
		echo "<script>alert('SELECTED Records Successfully DELETED')
location.href='revokesales.php'</script>";
		
		//$message = "Data deleted successfully !";
}
}
$result = mysqli_query($conn,"SELECT * FROM sales");
?>