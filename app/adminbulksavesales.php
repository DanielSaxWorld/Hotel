<?php
	include('connect.php');
	$result = $db->prepare("SELECT *, SUM( qty ) AS TOTAL_KG FROM `sales_order` WHERE `invoice` = '$_POST[invoice]'");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>

<?php
session_start();
include('connect.php');
$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
$d = $_POST['ptype'];
$e = $_POST['amount'];
$z = $_POST['profit'];
$cname = $_POST['cname'];
$imei = $_POST['imei'];
$qty = $row['TOTAL_KG'];
$product = $row['product_code'];
$service = $row['name'];
$gen_name = $row['gen_name'];
if($d=='credit') {
$f = $_POST['due'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name,imei,qty,product_code,service,gen_name) VALUES (:a,:b,:c,:d,:e,:z,:f,:g,:h,:i,:j,:k,:l)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':f'=>$f,':g'=>$cname,':h'=>$imei,':i'=>$qty,':j'=>$product,':k'=>$service,':l'=>$gen_name));
header("location: preview.php?invoice=$a");
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name,imei,qty,product_code,service,gen_name) VALUES (:a,:b,:c,:d,:e,:z,:f,:g,:h,:i,:j,:k,:l)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':f'=>$f,':g'=>$cname,':h'=>$imei,':i'=>$qty,':j'=>$product,':k'=>$service,':l'=>$gen_name));
header("location: adminbulkpreview2.php?invoice=$a");
exit();
}
		}
// query

?>