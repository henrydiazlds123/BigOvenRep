<?php
# Filename="connect.php";

$hostname = 'cs313awesomesquared.cr3nazmupmxl.us-east-1.rds.amazonaws.com';
$database = 'BORecipies';
$username = 'guest';
$password = 'password';

mysql_connect($hostname,$username,$password)or die("Failed in connect");
mysql_select_db($database)or die("Failed in database selection");

$sql="SELECT ing_name FROM ingredient WHERE ing_name LIKE '%".$_REQUEST['term']."%' ";

$query=mysql_query($sql);

while($row=mysql_fetch_array($query))
{
   $results[]=array('label'=>$row['ing_name']);
}

echo json_encode($results);
?>

