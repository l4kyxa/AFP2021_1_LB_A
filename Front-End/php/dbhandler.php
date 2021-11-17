<?php

$serverName = "https://www.rackhost.hu/pma/19/index.php";
$dbUsername = "c22578keret";
$dBPassword = "c22578keret";
$dBName = "c22578DB";

$conn = mysqli_connect($serverName, $dBUsername, $dbPassword, $dBName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}