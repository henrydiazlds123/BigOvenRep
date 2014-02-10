<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 

</head>
<body>
<div class="top">
<a href="signIn.php">Sign In</a>
<a href="signUp.php">Sign Up</a>
</div>
<div class="nav">
   <ul>
      <li class="firstUL">Library Catalog</li>
      <li>How It Works</li>
      <li>About Us</li>
      <li>Contact Us</li>
   </ul>
</div>
<div class="bottom">
<?php
$mysqli = new mysqli('localhost', 'phpUnicorn', 'movie', 'lib_db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}
$result ="INSERT INTO users (username, password, first, last, isBlock) VALUES 
('$_POST[username]','$_POST[password]','$_POST[first]','$_POST[last]',1)";

if (!mysqli_query($mysqli,$result))
{
   die('Error: ' . mysqli_error($mysqli));
}
echo "Thank you for signing up. Please give us 24-48 hours to verify your account then you may start requesting to check items out.";

mysqli_close($mysqli);
?>
</div>
</body>
</html>