<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evani";
$port = 3300;
$conn = new mysqli($servername, $username, $password, $dbname,  $port);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  // echo "Successfull";
}
?>