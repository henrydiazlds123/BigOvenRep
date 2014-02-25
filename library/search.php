<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
   <title>Search</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
<link rel="stylesheet" type="text/css" href="../css/search.css"> 
</head>
<body>
<?php include 'header.php';

$query = htmlspecialchars($_GET['query']);
$firstPart = "SELECT
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
   INNER JOIN location AS l ON b.location_id = l.location_id";
   

if ($_GET['searchType'] == 'general')
{
   if (!($_GET['loc'] == "default"))
   {
      $result = $mysqli->query("$firstPart WHERE b.location_id LIKE \"$_GET[loc]\" AND (b.summary LIKE '%" . $query . "%' OR b.title LIKE '%" . $query . "%' OR a.firstName LIKE '%" . $query . "%' OR a.lastName LIKE '%" . $query . "%')");
   }
   else
   {
      $result = $mysqli->query("$firstPart WHERE (b.summary LIKE '%" . $query . "%' OR b.title LIKE '%" . $query . "%' OR a.firstName LIKE '%" . $query . "%' OR a.lastName LIKE '%" . $query . "%')");
   }
}
else if ($_GET['searchType'] == "titleKey")
{
   
   if ((!($_GET['type'] == "default")) and (!($_GET['loc'] == "default")))
   {
      $result = $mysqli->query("$firstPart WHERE t.type LIKE \"$_GET[type]\" AND b.location_id LIKE \"$_GET[loc]\" AND (b.title LIKE '%" . $query . "%') ");
   }
   else if (!($_GET['loc'] == "default"))
   {
      $result = $mysqli->query("$firstPart WHERE b.location_id LIKE \"$_GET[loc]\" AND (b.title LIKE '%" . $query . "%') "); 
   }
   else if (!($_GET['type'] == "default"))
   {
      $result = $mysqli->query("$firstPart WHERE t.type LIKE \"$_GET[type]\" AND (b.title LIKE '%" . $query . "%') ");
   }
   else 
   {
      $result = $mysqli->query("$firstPart WHERE (b.title LIKE '%" . $query . "%') "); 
   }
   
}
else if ($_GET['searchType'] == "authorKey") 
{
   if ((!($_GET['type'] == "default")) and (!($_GET['loc'] == "default")))
   {
      $result = $mysqli->query("$firstPart WHERE t.type LIKE \"$_GET[type]\" AND b.location_id LIKE \"$_GET[loc]\" AND (a.firstName LIKE '%" . $query . "%' OR a.lastName LIKE '%" . $query . "%') ");
   }
   else if (!($_GET['type'] == "default")) 
   {
      $result = $mysqli->query("$firstPart WHERE t.type LIKE \"$_GET[type]\" AND (a.firstName LIKE '%" . $query . "%' OR a.lastName LIKE '%" . $query . "%') ");
   }
   else if (!($_GET['loc'] == "default"))
   {
      $result = $mysqli->query("$firstPart WHERE b.location_id LIKE \"$_GET[loc]\" AND (a.firstName LIKE '%" . $query . "%' OR a.lastName LIKE '%" . $query . "%') ");
   }
   else
   {
      $result = $mysqli->query("$firstPart WHERE (a.firstName LIKE '%" . $query . "%' OR a.lastName LIKE '%" . $query . "%') ");
   }
}
$count = 1;
echo "<table>";
while ($row = $result->fetch_assoc())
{
   echo "<tr><hr /><td> $count </td><td> <a href=\"catalog.php?bk=$row[book_id]\"><img src=\"$row[image]\" /> </a>";
   echo "</td><td><h3><a href=\"catalog.php?bk=$row[book_id]\">$row[title]</a><h3><a href=\"search.php?searchType=authorKey&query=$row[author_id]&type=default&loc=default\" >" ;
   if ($row[lastName])
   {
      echo "$row[lastName], ";
   }
   
   echo "$row[firstName] </a></td><td><br />";
   if ($row[type] == "DVD")
   {
      echo "<img class=icon src=\"http://static3.wikia.nocookie.net/__cb20130831224847/filmguide/images/9/92/DVD_logo.png\" / > ";
   }
   if ($row[type] == "book")
   {
      echo "<img class=icon src=\"http://www.doversherborn.org/doversherborn/image/Middle%20School%20Picts/Guidance/bookworm.jpg\" /> ";
   }
   echo "<div class=\"loc\"> Available at $row[name]</div><br />    ";
  // echo "<form action=\"addToList.php\"><input type=\"submit\" value=\"Add To My List\" /></form>";

   $chars = 0;
   while ($chars < 100)
   {
      echo $row[summary($chars)];
   }
   $count++;
   echo"</td></tr> ";
   
}
echo "</table>";
if ($count == 1)
{
   echo "Sorry no results were found for \"$query\"";
}
echo "<hr />";
 ?>
 </body>
 </html

