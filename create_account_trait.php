<?php
  require_once('connexion.php');
  
  $date= $_REQUEST['date'];
  $date = explode ( '/', $date);
  $date = $date[2].'-'.$date[1].'-'.$date[0];
  
  $requete = 'INSERT utilisateurs (PSEUDO , EMAIL, MDP, SEXE, ADRESSE, NAISSANCE, TELEPHONE) VALUES (:pseudo, :email, :mdp, :sexe, :adresse, :naissance, :telephone)';
  $prepare = $connexion->prepare($requete);
  $prepare->bindValue('pseudo', $_REQUEST['pseudo'], PDO::PARAM_STR);
  $prepare->bindValue('email', $_REQUEST['email'], PDO::PARAM_STR);
  $prepare->bindValue('mdp', $_REQUEST['mdp'], PDO::PARAM_STR);
  $prepare->bindValue('sexe', $_REQUEST['sexe'], PDO::PARAM_STR);
  $prepare->bindValue('adresse', $_REQUEST['adresse'], PDO::PARAM_STR);
  $prepare->bindValue('naissance', $date, PDO::PARAM_STR);
  $prepare->bindValue('telephone', $_REQUEST['telephone'], PDO::PARAM_STR);
	$resultat=$prepare->execute();
  //echo $requete;
  header('Location: index.php?page=home');

?>
