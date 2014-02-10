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
<form id = "form1" action="signupfinish.php" method="Post">
First Name: <input type="text" name="first"/><br />
Last Name: <input type="text" name="last"/><br />
Username: <input type="text" name="username"/><br />
Password: <input type="password" name="password"/><br />
<input type="submit">

</form>
</div>
</body>
</html>