<?php
include_once("db_conn.php");
if(isset($_POST['emp_id'])) {
	$emp_id = trim($_POST['emp_id']);	
	$sql = "DELETE FROM sales WHERE transaction_id IN ($emp_id)"
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	echo $emp_id;
}
?>