<?php
$conn = new mysqli('localhost', 'imperia4_user', 'boni@2022', 'imperia4_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>