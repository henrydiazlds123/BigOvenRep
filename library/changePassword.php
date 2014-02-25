<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 

</head>
<body>
<?php include 'header.php'; ?>

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
