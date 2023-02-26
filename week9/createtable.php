<!DOCTYPE html>
<html>

<body>

<?php
	$servername = "192.168.150.213";
	$username = "webprogmi212";
	$password = "b3ntRhino98";
	$dbname = "webprogmi212";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE jrsolomon_Guests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
website VARCHAR(50),
comment TEXT,
gender varchar(11),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table jrsolomon_Guests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
</body>





</html>

