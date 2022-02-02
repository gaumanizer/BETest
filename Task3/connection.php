<?php 
$dbHost = "localhost";
$dbName = "db1";
$dbUsername = "root";
$dbPassword = "";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
	die("Database Not FOund!" . $conn->connect_error);
}


?>