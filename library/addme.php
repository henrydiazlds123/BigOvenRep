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

<?php

   $mysqli = new mysqli('localhost', 'phpUnicorn', 'movie', 'lib_db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}
$title = (isset($_POST['title']) ? htmlspecialchars($_POST['title']) : null );
$summary = (isset($_POST['summary']) ? htmlspecialchars($_POST['summary']) : null);
$image = (isset($_POST['image']) ? htmlspecialchars($_POST['image']) : null);

$result = $mysqli->query("SELECT * FROM books WHERE title = \"$title\"");
if ($result->fetch_assoc())
{
   echo "ERROR: this item already exists in the database";
}
else 
{
   $result = $mysqli->query("INSERT INTO books (type_id, title, author_id, summary, location_id, image, Date_Recieved) 
   VALUES ($_POST[type], 
   \"$title\", 
   $_POST[author], 
   \"$summary\", 
   $_POST[loc], 
   \"$image\", 
   CURDATE() )");
   
echo "result :  $result";
echo "$title   00000000 ";
   
   $result = $mysqli->query("SELECT * FROM books where title = \"$title\"");

   if ($row = $result->fetch_assoc())
   {
      header('Location: catalog.php?bk=' . $row[book_id]);
   }
   else
   {
      echo "<h3>There was an error with inserting it into the database, please go back and try again.</h3>" . mysqli_error($mysqli);
   }
}   
mysqli_close($mysqli);
?>
</form>
</div>
</body>
</html>