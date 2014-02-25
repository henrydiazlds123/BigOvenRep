<?php session_start();

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
$user = (isset($_SESSION[user]) ? $_SESSION[user] : null );
$result = $mysqli->query("SELECT * FROM users WHERE username = \"$user\"");
$userID = 0;
if ($row = $result->fetch_assoc())
{
   $userID = $row[user_id];
}
$id =(isset($_SESSION[id]) ? $_SESSION[id] : null );
$result = $mysqli->query("SELECT * FROM user_books where user_id = $userID AND book_id = $id");
if ($row = $result->fetch_assoc())
{
   unset($_SESSION[id]);
   header('Location: myList.php');

}
$result = $mysqli->query("INSERT INTO user_books (user_id, book_id) VALUES ($userID, $id)");
   unset($_SESSION[id]);
   header('Location: myList.php');

mysqli_close($mysqli);
?>
</form>
</div>
</body>
</html>