<?php
include('db_conn.php');
if(isset($_REQUEST['transaction_id'])){
$sql = "SELECT * FROM dsales_order WHERE transaction_id='$_REQUEST[transaction_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$qty = $row['qty'];
$product_code = $row['product_code'];
$_REQUEST['product_code']= $row['product_code'];
?>

<?php
$sql3 = "SELECT * FROM pro_distributor WHERE product_code='$product_code'";
$result3 = mysqli_query($conn, $sql3);
$row=mysqli_fetch_array($result3);
$oldqty = $row['qty'];
$newqty = $oldqty + $qty;
?>

<?php
$sql2 = "UPDATE pro_distributor SET qty ='$newqty' WHERE product_code='$_REQUEST[product_code]'";

$result2 = mysqli_query($conn, $sql2);
?>


<?php

// sql to delete a record
$sql = "DELETE FROM dsales_order WHERE transaction_id=$_REQUEST[transaction_id]";
	
	

if (mysqli_query($conn, $sql)) {
	
	
    echo "<script>alert('Sales Order Successfully REVOKED')
location.href='super_admin.php'</script>";
} else {
    echo "Error deleting Record: " . mysqli_error($conn);
}
}

mysqli_close($conn);


