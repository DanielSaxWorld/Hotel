<?php
$conn = new mysqli('localhost', 'imperia4_suser', 'soft@2022', 'imperia4_softdb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>