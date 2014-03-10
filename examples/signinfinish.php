<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>

</head>
<body>
<?php
$mysqli = new mysqli('localhost', 'phpUnicorn', 'movie', 'Examples_Db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}
$password = hash("sha256", $_POST[password]);
$result = $mysqli->query("SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$password'");
while ($row = $result->fetch_assoc())
{
  echo "" . $row[username];
}

echo 'NOPe' . $password . '     $result';




mysqli_close($mysqli);
?>
</div>
</body>
</html>