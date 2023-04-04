<?php
include('db_conn.php');
if(isset($_REQUEST['product_id'])){
$sql = "SELECT * FROM service WHERE product_id='$_REQUEST[product_id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<?php

// sql to delete a record
$sql = "DELETE FROM service WHERE product_id=$_REQUEST[product_id]";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Service Successfully DELETED')
location.href='superinventory_service.php'</script>";
} else {
    echo "Error deleting Record: " . mysqli_error($conn);
}

mysqli_close($conn);
}

