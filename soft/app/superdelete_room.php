

<?php

include('db_conn.php');
if(isset($_REQUEST['id'])){

// sql to delete a record
$sql = "DELETE FROM room_price, room
USING room_price INNER JOIN room
WHERE room_price.id = $_REQUEST[id]
    AND room.id = room_price.id";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('ROOM Successfully DELETED')
location.href='roomlist.php'</script>";
} else {
    echo "Error deleting Record: " . mysqli_error($conn);
}

mysqli_close($conn);
}

