<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
   <title>Gabi's Library</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
</head>
<body>
<?php include 'header.php'; ?>
<div class="bottom">
<div class="newItems"><br /><br />
<h1>New Items Added to our Catalog</h1>
<table>
<tr>

<?php 

$count = 0;
$result = $mysqli->query("SELECT * FROM books order by Date_Recieved DESC LIMIT 5");

while ($row = $result->fetch_assoc())
{
     echo "<td><a href=\"catalog.php?bk=" . $row[book_id] . "\"><img src=\"" . $row[image] . "\"></a></td>"; 
}
mysqli_close($mysqli);


?>
</tr>

</table>

<h1>To see all of our items, <a href="allitems.php">Click Here</a></h1>

</div>
</div>
</body>
</html>