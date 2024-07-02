<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "shop";

// Create connection
$conn = mysqli_connect($host, $user, $pw,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>