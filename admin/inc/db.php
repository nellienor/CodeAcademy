<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'Codeacademy';

$db = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if (!$db)
  {
  die('Could not connect: ' . mysql_error());
  }
$db-> set_charset("utf8");
?>