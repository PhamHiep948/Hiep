<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";
$dbPort = 3307;


$connect = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName, $dbPort);

/*
// Check connection
if ($mysqli -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}*/
?>