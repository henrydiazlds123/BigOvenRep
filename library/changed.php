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
if ($_POST[newPassword] == $_POST[conPassword])
{
   $result ="UPDATE users SET password = '$_POST[newPassword]'
   WHERE username = '$_POST[username]'";

   if (!mysqli_query($mysqli,$result))
   {
      die('Error: ' . mysqli_error($mysqli));
   }
   echo "Password Successfully changed!";
    
}
else
{
   echo "Error: The new password didn't change due to it not being the same in the new and confirm password fields. 
   Please go back and do it again.";
}

mysqli_close($mysqli);
?>
</div>
</body>
</html>
