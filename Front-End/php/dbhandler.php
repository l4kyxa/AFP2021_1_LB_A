<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dBName = "teszteles";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dBName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>