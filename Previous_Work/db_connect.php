<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>