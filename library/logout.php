<?php session_start();

      unset($_SESSION[user]);
      unset($_SESSION['fn']);
      unset($_SESSION[priv]);

      header('Location: index.php');
?>
