<!DOCTYPE html>
<html>
<head>
<title>Best Movie Actors of 2014!!</title>
<script type="text/javascript" src="movies.js"></script>

</head>
<body>
The Best Actors of 2014!!!! <br />

<form id = "form1">
<select name = "actor" onChange="handleChange(this);">
<?php
$mysqli = new mysqli('localhost', 'phpUnicorn', 'movie', 'Examples_Db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}

$result = $mysqli->query("SELECT * FROM Actor");
while ($row = $result->fetch_assoc())
{
  echo "<option value= \"" . $row["Actor_ID"] . "\">" . $row["Name"] . "</option>";
}

?>
</select>
</form>
</body>
</html>