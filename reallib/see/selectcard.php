<!DOCTYPE html>
<html>
<head>
   <title>Select Card</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
</head>
<body>
<ul>
<?php 
$mysqli = new mysqli('localhost', 'bookSmart', 'appleBook', 'lib_cards_db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}

$result = $mysqli->query("SELECT * FROM major");
while ($row = $result->fetch_assoc())
{
   echo "<li><a href=\"cards.php?id=$row[major_id]\">$row[major_name]</a></li>";
}
?> 
</ul>
</body>
</html>