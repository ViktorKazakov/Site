<?php 
  session_start();
  unset($_SESSION['connection'] );
  header('Location: index.php?page=connexion');
?>