<!DOCTYPE html>
<html>
<head>
	<title>Guests</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" re="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
	integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	
</head>

<body>

	<div class="hero">
		<nav>
			<h2 class="logo">My<span>Profile</span></h2>
			<ul>
			<li><a href="index.php">About Me</a></li>
			<li><a href="favorites.php">My Favorites</a></li>
			<li><a href="#">Art and Photography</a></li>
			<li><a href="guests.php">Guests</a></li>
			<li><a href="contact.php">Contact</a></li>
			</ul>
			
			<a href="#" class="btn">Subscribe</a>
			
		</nav>
		
		<div class="content" style="background-color:white;">
			
		<h4>Guests</h4>
		
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

$sql = "SELECT id, name, email FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>Email: " . $row["email"]. "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>



		</div>
		<div class="share">
			<p>Lets Connect</p>
		
			<div class="social">
			<a href="#"><i class="fa-brands fa-facebook"></i></a>
			<a href="#"><i class="fa-brands fa-twitter"></i></a>
			<a href="#"><i class="fa-brands fa-discord"></i></a>
			<a href="#"><i class="fa-brands fa-youtube"></i></a>
			</div>	
		</div>
	</div>
	

</body>
</html>