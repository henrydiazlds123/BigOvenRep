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
<h1>Change Password</h1>
<form id = "form1" action="changed.php" method="Post">
Username: <input type="text" name="username"/><br />
Old Password: <input type="password" name="oldPassword"/><br />
New Password: <input type="password" name="newPassword"/><br />
Confirm Password: <input type="password" name="conPassword"/><br />
<input type="submit">
</form>

</div>
</body>
</html>
