<?php

// require_once('db.php');
// $room_id =mysql_real_escape_string($_POST['room_id']);
// if($room_id!='')
// {
// 	$room_price_result = $conn->query('select * from room_price where room_id='.$room_id.'');
// 	//$options = "<option value=''>Select State</option>";
// 	while($row = $room_price_result->fetch_array()) {
// 	$options .= "<option value='".$row['price']."'>".$row['price']."</option>";
// 	}
// 	echo $options;
// }

?>


<?php
require_once "db.php";
$room_id = $_POST["room_id"];
$result = mysqli_query($conn,"SELECT * FROM room_price where room_id = $room_id");
?>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["price"];?>"><?php echo $row["price"];?></option>
<?php
}
?>
