<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
   <title>Gabi's Library</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
</head>
<body>
<?php include 'header.php'; ?>
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