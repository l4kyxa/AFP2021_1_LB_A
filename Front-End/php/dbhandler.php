<?php

$serverName = "mysql.rackhost.hu";
$dbUsername = "c22578keret";
$dbPassword = "c22578keret";
$dBName = "c22578DB";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dBName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "";
?>