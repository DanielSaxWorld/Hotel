<?php
include('db_conn.php');
$sql = "SELECT * FROM staff_id";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<?php

// sql to delete a record
$sql = "UPDATE staff_id SET `status`='Suspend' WHERE designation != 'Super Admin'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('All Login Accounts Successfully SUSPENDED')
location.href='superaccountlist.php'</script>";
} else {
    echo "Error deleting Record: " . mysqli_error($conn);
}

mysqli_close($conn);


