<?php 
setcookie("user", "cookieMonster", time() + 600);
if (isset($_COOKIE["visits"]))
{
$num = $_COOKIE["visits"] + 1;
setcookie("visits", $num, time() + 600);
}
else
{
setcookie("visits", 1, time() + 600);
 //is the first time
}
session_start();
$_SESSION["user"] = "Sburton";



?>
<!DOCTYPE html>

<html>
<head>
</head>
<body>
This is a cookie page. 

<?php
$user = $_SESSION["user"];
print "You are user: $user";
echo $_COOKIE["user"];
?>
<br>
<?php
echo $_COOKIE["visits"];

if ($content = file_get_contents("/assignments/results.txt"))
{
print "$content";
}
else
{
echo "Can't find ";
}
?>
</body>
</html>