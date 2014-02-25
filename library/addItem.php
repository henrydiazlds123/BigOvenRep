<?php session_start();
   if(isset($_SESSION["user"]))
   {
      if (!($_SESSION["priv"] == "adm"))
      {
         header('Location: notAllowed.php');
      }
   }
   else
   {
      header('Location: notAllowed.php');   
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Gabi's Library</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
</head>
<body>
<?php include 'header.php'; ?>
<div class="bottom">
<h1>Add An Item To The Catalog</h1>
<form action="addme.php" method="Post">
<?php
$result = $mysqli->query("SELECT * FROM type");
echo "Type: <select name=\"type\">";
while ($row = $result->fetch_assoc())
{
   echo "<option value=\"$row[type_id]\">$row[type]</option>";
}
echo "</select><br />";
echo "Title: <input type=\"text\" name=\"title\" /><br />";

$result = $mysqli->query("SELECT * FROM author");
echo "Author: <select name=\"author\">";
while ($row = $result->fetch_assoc())
{
   echo "<option value=\"$row[author_id]\">";
   if ($row[lastName])
   {
      echo "$row[lastName], ";
   }
   echo "$row[firstName]</option>";
}
echo "</select><br />";
echo "Summary: <br /><textarea name=\"summary\"></textarea><br />";

$result = $mysqli->query("SELECT * FROM location");
echo "Location <select name=\"loc\">";
while ($row = $result->fetch_assoc())
{
   echo "<option value=\"$row[location_id]\">$row[name]</option>";
}
echo "</select><br />";
echo "Image: <input type=\"text\" size= 50 name=\"image\" /><br />";
echo "<input type=\"submit\" value=\"Add Item\" />";
mysqli_close($mysqli);
?>
</form>
</div>
</body>
</html>