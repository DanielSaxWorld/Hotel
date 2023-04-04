<?php
include('db_conn.php');
if(isset($_REQUEST['id'])){
$sql = "SELECT * FROM charges WHERE id='$_REQUEST[id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$fullname=$row['fullname'];
$lodge_id=$row['lodge_id'];
$amount=$row['amount'];
?>

<?php
$sql = "SELECT * FROM check_in WHERE lodge_id='$lodge_id'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$debit=$row['debit'];
$newpayment =$debit-$amount;
?>

<?php

// sql to delete a record
$sql = "UPDATE `charges` SET `status`='Paid' WHERE id=$_REQUEST[id]";

$sql2 = "UPDATE `check_in` SET `debit`='$newpayment' WHERE lodge_id='$lodge_id'";
$sql3 = "UPDATE `active_check_in` SET `debit`='$newpayment' WHERE lodge_id='$lodge_id'";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}

	$result2 = mysqli_query($conn, $sql2);
	$result3 = mysqli_query($conn, $sql3);

// if successfully update
if($result2 && $result3) {

    echo "<script>alert('$fullname bill paid')
location.href='super_admin.php'</script>";
} else {
    echo "Error making payment: " . mysqli_error($conn);
}

}
mysqli_close($conn);


