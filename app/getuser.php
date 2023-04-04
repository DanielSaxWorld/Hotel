<?php
include('db_conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','akure_aascmsl','akure_aascmsl2019','faan');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"faan");
$sql="SELECT * FROM loan WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Loan ID</th>
<th>UIN</th>
<th>FULLNAME</th>
<th>Bank</th>
<th>Loan Date</th>
<th>Loan Type</th>
<th>Due Date</th>
<th>Loan Amount</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['loan_id'] . "</td>";
    echo "<td>" . $row['uin'] . "</td>";
    echo "<td>" . $row['fullname'] . "</td>";
    echo "<td>" . $row['bank'] . "</td>";
    echo "<td>" . $row['loan_date'] . "</td>";
	echo "<td>" . $row['loan_type'] . "</td>";
	echo "<td>" . $row['due_date'] . "</td>";
	echo "<td>" . $row['loan_amount'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>