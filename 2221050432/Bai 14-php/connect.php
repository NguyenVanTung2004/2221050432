<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbname = 'netflix';

// Create connection
$conn = mysqli_connect($serverName, $userName, $password, $dbname);

// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
// echo 'Connected successfully';
?>