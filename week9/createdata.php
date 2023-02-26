<!DOCTYPE html>
<html>

<body>

<?php
	$servername = "192.168.150.213";
	$username = "webprogmi212";
	$password = "b3ntRhino98";


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE webprogmi212";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
</body>





</html>

