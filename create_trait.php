<?php
  session_start();
	require_once('connexion.php');
  
  $datetime = date('Y-m-d H:i:s');
  
  $requete = 'INSERT INTO articles (TITRE, ARTICLE, AUTEUR, DATE) VALUES (:titre, :article, :pseudo, :datetime)';
  $prepare = $connexion->prepare($requete);
  $prepare->bindValue('titre', $_REQUEST['titre'], PDO::PARAM_STR);
  $prepare->bindValue('article', $_REQUEST['article'], PDO::PARAM_STR);
  $prepare->bindValue('pseudo', $_SESSION['pseudo'], PDO::PARAM_STR);
  $prepare->bindValue('datetime', $datetime, PDO::PARAM_STR);
	$resultat=$prepare->execute();
  echo $requete;
  header('Location: index.php?page=texte');
?>
