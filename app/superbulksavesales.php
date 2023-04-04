<?php
	include('connect.php');
	$result = $db->prepare("SELECT *, SUM( qty ) AS TOTAL_SALES FROM `sales_order` WHERE `invoice` = '$_POST[invoice]'");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>


<?php
session_start();
include('db_conn.php');
$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
$d = $_POST['ptype'];
$e = $_POST['amount'];
$z = $_POST['profit'];
$y = $row['price'];
$cname = $_POST['cname'];
$imei = $_POST['imei'];
$qty = $row['TOTAL_SALES'];
$product = $row['product_code'];
$service = $row['name'];
$gen_name = $row['gen_name'];
$f = $_POST['cash'];

//Check for duplicate record in database before inserting New Record
$check=mysqli_query($conn, "SELECT * FROM sales WHERE invoice_number='$_POST[invoice]'");
$checkrows=mysqli_num_rows($check);

if($checkrows>0) {
echo "<script>alert('Receipt Number Already captured in Sales Table')
location.href='super_admin.php'</script>";
} else {

$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name,imei,qty,product_code,service,gen_name,price) VALUES (:a,:b,:c,:d,:e,:z,:f,:g,:h,:i,:j,:k,:l,:y)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':z'=>$z,':f'=>$f,':g'=>$cname,':h'=>$imei,':i'=>$qty,':j'=>$product,':k'=>$service,':l'=>$gen_name,':y'=>$y));
header("location: superbulkpreview2.php?invoice=$a");
exit();
}
		}
// query

?>