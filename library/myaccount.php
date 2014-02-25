<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
   <title>Gabi's Library</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
</head>
<body>
<?php include 'header.php'; 
if (isset($_SESSION["priv"]) and ($_SESSION["priv"]== "adm"))
   {
      echo "<h1> Welcome Admin!</h1>";
      echo "<a href=\"addItem.php\">Add Item</a><br />
            <a href=\"clearUsers.php\">Clear Users</a><br />
            <a href=\"changeUsers.php\">List Of User</a>";
   }
   else
   {
      echo "<h1> Welcome $_SESSION[\"fn\"]!!</h1>";
      echo "<a href=\"myList.php\">My List</a>";
   }
?>
</body>
</html>