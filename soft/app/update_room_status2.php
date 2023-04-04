<?php
include('db_conn.php');
if(isset($_REQUEST['lodge_id'])){
$sql = "SELECT * FROM room WHERE lodge_id='$_REQUEST[lodge_id]'";
// $sql = "SELECT * FROM `room` WHERE uin = '$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$_REQUEST['room_name']=$row['room_name'];
$room_name=$row['room_name'];
$fullname=$row['fullname'];
$lodge_id = $row['lodge_id'];
$phone = $row['phone'];

?>


<?php

/*Start Here - SMS API Integration */
$email = "info@enpre.com.ng";
$password = "enpre@2022";

    $message= "Welcome ".$fullname." to Imperial Boni Hotels & Resorts, we hope you will enjoy your stay in our ".$room_name." Room with Logde ID: ".$lodge_id.". Thanks!";

    $sender_name = "Imperial";
    $recipients = $phone;
    $forcednd = "1";
    $data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
    $data_string = json_encode($data);
    $ch = curl_init('https://api.bulksmslive.com/v2/app/sms'); curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string))); $result = curl_exec($ch); $res_array = json_decode($result);
    //print_r($res_array);
/*Ends Here - SMS API Integration */

$sql2 = "UPDATE `check_in` SET `room_name`='$_REQUEST[room_name]' WHERE lodge_id='$lodge_id'";

$sql3="UPDATE `active_check_in` SET `room_name`='$_REQUEST[room_name]' WHERE lodge_id='$lodge_id'";

// if (mysqli_query($conn, $sql2)) {

$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);

if($result2 && $result3) {
    echo "<script>alert('GUEST Checked In Successfully')
    location.href='receipt2.php?lodge_id=".$lodge_id."'</script>";
} else {
    echo "Error Updating Record: " . mysqli_error($conn);
}

mysqli_close($conn);
}

