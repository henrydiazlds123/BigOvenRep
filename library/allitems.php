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
<h1>All Items in the Library Catalog</h1>
<?php
$mysqli = new mysqli('localhost', 'phpUnicorn', 'movie', 'lib_db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}
$result = $mysqli->query("SELECT * FROM books");
while ($row = $result->fetch_assoc())
{
  echo "" . $row[title] . '<br />' . $row[summary] . '<br />';
  echo '<br />';
}


mysqli_close($mysqli);
?>
</div>
</body>
</html>