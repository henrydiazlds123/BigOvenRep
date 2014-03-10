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
$result ="INSERT INTO users (username, password) VALUES ('$_POST[username]', '$password')";

if (!mysqli_query($mysqli,$result))
{
   die('Error: ' . mysqli_error($mysqli));
}
$newURL = "signin.php";
header('Location: ' . $newURL);
mysqli_close($mysqli);
?>
</div>
</body>
</html>