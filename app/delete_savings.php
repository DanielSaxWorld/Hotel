<?php
include('session.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);

if(isset($_REQUEST['id'])){
$sql = "SELECT * FROM savings WHERE id='$_REQUEST[id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$_REQUEST['uin']=$row['uin'];
?>

<?php

// sql to delete a record
$sql = "DELETE FROM savings WHERE id=$_REQUEST[id]";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Savings Successfully DELETED')
location.href='savings_history.php?uin=".$_REQUEST['uin']."'</script>";
} else {
    echo "Error deleting Savings: " . mysqli_error($conn);
}

mysqli_close($conn);
}

