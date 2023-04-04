<?php
session_start();
include('connect.php');
$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['qty'];
$w = $_POST['pt'];
$date = $_POST['date'];
$discount = $_POST['discount'];
$result = $db->prepare("SELECT * FROM pro_distributor WHERE product_id= :userid");
$result->bindParam(':userid', $b);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$asasa=$row['wsprice'];
$code=$row['product_code'];
$gen=$row['gen_name'];
$name=$row['product_name'];
$p=$row['wsprice'] - $row['o_price'];
}

//edit qty
$sql = "UPDATE pro_distributor
        SET qty=qty-?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($c,$b));
$fffffff=$asasa*$c;
$d=$fffffff-$discount;
$profit=$p*$c;
// query
$sql = "INSERT INTO dsales_order (invoice,product,qty,amount,name,price,profit,product_code,gen_name,date,discount) VALUES (:a,:b,:c,:d,:e,:f,:h,:i,:j,:k,$discount)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$name,':f'=>$asasa,':h'=>$profit,':i'=>$code,':j'=>$gen,':k'=>$date));
header("location: 2porder_sr.php?id=$w&invoice=$a");


?>