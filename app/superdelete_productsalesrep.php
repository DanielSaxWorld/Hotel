<?php
include('db_conn.php');
if(isset($_REQUEST['product_id'])){
$sql = "SELECT * FROM products_salesrep WHERE product_id='$_REQUEST[product_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$_REQUEST['salesrep_id']=$row['salesrep_id'];
?>

<?php

// sql to delete a record
$sql = "DELETE FROM products_salesrep WHERE product_id=$_REQUEST[product_id]";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Product Successfully DELETED')
location.href='viewsalesrep_product.php?salesrep_id=$row[salesrep_id]'</script>";
} else {
    echo "Error deleting Record: " . mysqli_error($conn);
}

mysqli_close($conn);
}

