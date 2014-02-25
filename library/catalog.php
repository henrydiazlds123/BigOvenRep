<?php session_start(); 
?>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
<link rel="stylesheet" type="text/css" href="../css/catalog.css"> 
<?php
include 'header.php'; 
echo "<style>";
include '../css/libraryMain.css';
echo "</style>";
$mysqli = new mysqli('localhost', 'phpUnicorn', 'movie', 'lib_db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}
$id = 0;
$id = $_GET['bk'];
$result = $mysqli->query("SELECT
 b.book_id,
 b.type_id,
 b.title,
 b.summary,
 b.image,
 b.isIn,
 t.type_id,
 t.type,
 t.length,
 b.author_id,
 a.firstName,
 a.lastName,
 a.aliveDuring,
 a.author_id,

 b.location_id,
 l.location_id,
 l.name,
 l.city,
 l.state
 
FROM books AS b
   INNER JOIN type AS t ON b.type_id = t.type_id
   INNER JOIN author AS a ON b.author_id = a.author_id
   INNER JOIN location AS l ON b.location_id = l.location_id
WHERE b.book_id = " . $id . " LIMIT 1 ");
$row = $result->fetch_assoc();
echo "<div class=\"together\">";
echo "<div class=\"showBook\"><img src=\"" . $row[image] . " \" class=\"pic\"></div><br />";
echo "<div class=\"info\">";
if ($row[type] == "DVD")
{
   echo "<img class=icon src=\"http://static3.wikia.nocookie.net/__cb20130831224847/filmguide/images/9/92/DVD_logo.png\" / > ";
}
 if ($row[type] == "book")
{
   echo "<img class=icon src=\"http://www.doversherborn.org/doversherborn/image/Middle%20School%20Picts/Guidance/bookworm.jpg\" /> ";
}
echo "<h1>$row[title] </h1><br /><br />
By: ";
if ($row[lastName])
{
   echo "$row[lastName], ";
}
echo "$row[firstName] <br /><br />";
echo "$row[summary] <br /> <br />";
echo "Avaliable at: <br />";
echo "$row[name]  - $row[city], $row[state]";
if(isset($_SESSION["user"]))
{
      $_SESSION[id] = $row[book_id];
}
$user = (isset($_SESSION[user]) ? $_SESSION[user] : null );
$result = $mysqli->query("SELECT * FROM users WHERE username = \"$user\"");
$userID = 0;
if ($row = $result->fetch_assoc())
{
   $userID = $row[user_id];
}
$id = $user = (isset($_SESSION[id]) ? $_SESSION[id] : null );
$result = $mysqli->query("SELECT * FROM user_books where user_id = $userID AND book_id = $id");
if ($row = $result->fetch_assoc())
{
   echo "<form action=\"deletefrom.php\"><input type=\"submit\" value=\"Delete From My List\" /></form>";
}
else
{
   echo "<form action=\"addToList.php\"><input type=\"submit\" value=\"Add To My List\" /></form>";
}
echo "</div>";
echo "</div>";
?>
