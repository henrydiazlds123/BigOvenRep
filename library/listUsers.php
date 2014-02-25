<?php session_start();
   if(isset($_SESSION["user"]))
   {
      if (!($_SESSION["priv"] == "adm"))
      {
         header('Location: notAllowed.php');
      }
   }
   else
   {
      header('Location: notAllowed.php');   
   }
?>

<!DOCTYPE html>
<html>
<head>
   <title>List Of Users</title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
</head>
<body>
<?php include 'header.php'; ?>
<div class="bottom">
<table>
   <tr>
      <td>Account ID</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Username </td>
      <td>Admin</td>
   </tr>
<?php 

$result = $mysqli->query("SELECT * FROM users");
while ($row = $result->fetch_assoc())
{
   echo "<tr><td>$row[user_id]</td>";
   echo "<td>$row[first]</td>";
   echo "<td>$row[last]</td>";
   echo "<td>$row[username]</td>";
   
   if ($row[priv] == "adm")
   {
      echo "<td>Yes</td>";
   }
   else
   {
      echo "<td>No</td>";
   }
   echo "</tr>";
   
}


?>
</table>
</div>
</body>
</html>