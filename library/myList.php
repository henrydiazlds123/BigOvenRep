<?php session_start();

?>
<!DOCTYPE html>
<html>
<head>
   <title>My List</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
</head>
<body>

<?php
include 'header.php';

   $mysqli = new mysqli('localhost', 'phpUnicorn', 'movie', 'lib_db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}
$user = (isset($_SESSION[user]) ? $_SESSION[user] : null );
$result = $mysqli->query("SELECT * FROM users WHERE username = \"$user\"");
$userID = 0;
if ($row = $result->fetch_assoc())
{
   $userID = $row[user_id];
}

echo "<h1>My List</h1>";

$firstPart = "SELECT
 ub.user_id,
 ub.book_id,
 b.book_id,
 b.type_id,
 b.title,
 b.summary,
 b.image

FROM user_books AS ub
   INNER JOIN books AS b ON b.book_id = ub.book_id";
$result = $mysqli->query("$firstPart WHERE ub.user_id = $userID");
$count = 0;
while ($row = $result->fetch_assoc())
{
   if ($count == 5)
   {
      $count = 0;
      echo "<br />";
   }
   echo "<a href=\"catalog.php?bk=" . $row[book_id] . "\"><img src=\"" . $row[image] . "\"></a>";
   $count++;
}

mysqli_close($mysqli);
?>
</form>
</div>
</body>
</html>