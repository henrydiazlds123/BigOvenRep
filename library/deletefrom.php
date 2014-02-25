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

   $mysqli = new mysqli('localhost', 'php', 'phpYumYum', 'lib_db');
if ($mysqli->connect_errno)
{
   echo "Failed to connect to database";
}
echo "1 ";
$user = (isset($_SESSION[user]) ? $_SESSION[user] : null );
$result = $mysqli->query("SELECT * FROM users WHERE username = \"$user\"");
$userID = 0;
echo "2 ";
if ($row = $result->fetch_assoc())
{
   $userID = $row[user_id];
}
echo "2.5";
$id =(isset($_SESSION[id]) ? $_SESSION[id] : null );
echo "3 ";
$result = $mysqli->query("SELECT * FROM user_books where user_id = $userID AND book_id = $id");
$ubID = 0;

   $ubID = $row[id];
echo "the ubid: $ubID";

$result = $mysqli->query("DELETE FROM user_books where id=$ubID");
if ($result)
{
echo "yup :) ";
}
else
{
echo "what? " . mysql_error(). " ";
}
unset($_SESSION[id]);
// header('Location: myList.php');


mysqli_close($mysqli);
?>
</form>
</div>
</body>
</html>