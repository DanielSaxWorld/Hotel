<?php
include('db_conn.php');
if(isset($_REQUEST['id'])){
// sql to delete a record
$sql = "DELETE FROM booking WHERE id=$_REQUEST[id]";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('GUEST BOOKING Successfully DELETED')
location.href='super_admin.php'</script>";
} else {
    echo "Error deleting Record: " . mysqli_error($conn);
}

mysqli_close($conn);
}

?>