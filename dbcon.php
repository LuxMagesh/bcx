<?php

$dbServerName = "sql106.epizy.com";
$dbUserName = "epiz_32274987";
$dbPassword = "4iXyEBG49VaxM";
$dbName = "epiz_32274987_bcx";

$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "";
?>