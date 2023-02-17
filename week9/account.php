<!DOCTYPE html>
<html>

<head>
<title>My Profile</title>
<link rel="icon" type="image/x-icon" href="https://kanji.jitenon.jp/shotai3/019.gif">
<!-- CSS CONTAINER -->
<style>
body{
font-family: Calibri, Verdana;
background-image: url("https://ikipjember.ac.id/wp-content/uploads/2018/10/background-wallpaper-for-websites.jpg");
padding: 25px;

}

.account{
	background-color: #ffffff;
	position: relative;
	display:block;
	outline: #ffffff solid 10px;
}
.result{
		background-color: #ffffff;
	position: relative;
	display:block;
	outline: #ffffff solid 10px;
}

</style>
</head>
<!-- MAIN BODY -->
<body>




<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="account">
<a href="index.php" style="text-decoration: none;">Return to Home Page</a>
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>
<div class="result">

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</div>
</body>

<!-- git update command cycle:
git status
git add *
git commit -m "x"
git push 

then git pull on server bash on public_html\lab2\week3
-->


</html>