<?php
include('db_conn.php');
if(isset($_REQUEST['transaction_id'])){
$sql = "SELECT * FROM dsales WHERE transaction_id='$_REQUEST[transaction_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
?>



<?php

// sql to delete a record
$sql = "DELETE FROM dsales WHERE transaction_id=$_REQUEST[transaction_id]";
	
	

if (mysqli_query($conn, $sql)) {
	
	
    echo "<script>alert('Sales Successfully REVOKED')
location.href='admin.php'</script>";
} else {
    echo "Error deleting Record: " . mysqli_error($conn);
}
}

mysqli_close($conn);


