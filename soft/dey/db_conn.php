<?php

//$mysqli = new mysqli("example.com", "user", "password", "database");

	$conn = new mysqli("localhost", "imperia4_suser", "soft@2022", "imperia4_softdb");

//	 check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

	/* or die("Could not connect: " . mysqli_error($conn));
	mysqli_select_db($conn,$dbname) or die("cannot connect to DataBase");*/

?>

