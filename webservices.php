<?php
  // Allow remote access
  header('Access-Control-Allow-Origin: *');
   
  require_once('connexion.php');
    
  //if (isset($_REQUEST['function']))
  $_REQUEST['function']();
      
  function verifPseudo()
  {
    global $connexion;
    
    $retour = true;
    
    $request = 'SELECT * FROM utilisateurs WHERE PSEUDO ="'.$_REQUEST['pseudo'].'"';
    $result  = $connexion->query($request);
    $enreg   = $result->fetch(PDO::FETCH_ASSOC);
    $nb      = $result->rowCount();
      
    if ($nb != 0)
    {
      $retour = false;
    }
    
    echo json_encode($nb);
  }
  
    function verifEmail()
  {
    global $connexion;
    
    $retour = true;
    
    $request = 'SELECT * FROM utilisateurs WHERE EMAIL = "'.$_REQUEST['email'].'" ';
    $result  = $connexion->query($request);
    $enreg   = $result->fetch(PDO::FETCH_ASSOC);
    $nb      = $result->rowCount();
    
    if ($nb != 0)
    {
      $retour = false;
    }
    
    echo json_encode($nb);
  }
?>
