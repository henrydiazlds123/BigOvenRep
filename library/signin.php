<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
   <title>Gabi's Library</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
</head>
<body>
<?php include 'header.php';?>
<h3>Welcome! Please enter your username and password.</h3>
<form action="signinfin.php" method="Post">
<?php 
   if (isset($_SESSION["note"]))
   {
     // echo "<div class=\"red\">$_SESSION[\"note\"]</div>";
   }
?>
Username: <input type="text" name="users" /><br />
Password: <input type="password" name="pass" /><br />
<input type="submit" value="Submit" />
</form>
</body>
</html>
