<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
   <title>My Account</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
</head>
<body>
<?php include 'header.php'; 
if (isset($_SESSION["priv"]) and ($_SESSION["priv"]== "adm"))
   {
      echo "<h1> Welcome Admin!</h1>";
      echo "<a href=\"addItem.php\">Add Item</a><br />
            <a href=\"listUsers.php\">List Of Users</a><br />
            <a href=\"myList.php\">My List</a>
            <a href=\"changePassword.php\">Change Password</a>";

   }
   else
   {
      echo "<h1> Welcome $_SESSION[fn]!!</h1>";
      echo "<a href=\"myList.php\">My List</a>";
      echo "<a href=\"changePassword.php\">Change Password</a>";
   }
?>
</body>
</html>