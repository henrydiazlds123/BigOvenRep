<?php session_start();

?>
<!DOCTYPE html>
<html>
<head>
   <title>Gabi's Library</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
<link rel="stylesheet" type="text/css" href="../css/allitems.css"> 
</head>
<body>

<?php include 'header.php';?>


<div class="bottom">
<h1>All Items in the Library Catalog</h1>
<?php
$mysqli = new mysqli('localhost', 'phpUnicorn', 'movie', 'lib_db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}
$result = $mysqli->query("SELECT * FROM books");
while ($row = $result->fetch_assoc())
{
  echo "<a href=\"catalog.php?bk=" . $row[book_id] . "\"><img src=\"" . $row[image] . "\"></a>"; 
  echo "" . $row[title] . '<br />' . $row[summary] . '<br />';
  echo '<br />';
}


mysqli_close($mysqli);
?>
</div>
</body>
</html>
