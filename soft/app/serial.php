<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	
$serial =  shell_exec('wmic DISKDRIVE GET SerialNumber 2>&1');

echo  $serial;

?>
	
</body>
</html>