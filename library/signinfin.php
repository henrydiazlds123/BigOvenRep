<?php  session_start(); 

 include 'header.php';
   echo "1";
   $result = $mysqli->query("SELECT * from users WHERE username = \"$_POST[users]\" AND password = \"$_POST[pass]\"");
    echo "2";
   if($row = $result->fetch_assoc())
   {
      echo "sucess";        
      $_SESSION[user] = $_POST["users"];
      $_SESSION['fn'] = $row[first];
      $_SESSION[priv] = $row[priv];
      
      echo $_SESSION[user] . " d " . $_SESSION['fn'] . "d" . $_SESSOION["priv"];
      header('Location: index.php');
   }
else
{      $_SESSION["note"] = "Invalid username/password combination";
       header('Location: signin.php');
   
   }
  // $result = $mysqli->query("SELECT priv from users");

?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
<link rel="stylesheet" type="text/css" href="../css/libraryMain.css"> 
</head>
<body>
</body>
</html>