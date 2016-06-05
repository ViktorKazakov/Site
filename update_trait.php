<?PHP
  require_once('connexion.php');
  $requete = 'UPDATE articles SET TITRE="'.$_REQUEST['titre'].'", 
                                  ARTICLE="'.addslashes($_REQUEST['article']).'"  
                                  WHERE ID = '.$_REQUEST['id'];
	$resultat=$connexion->query($requete);                                  
  //echo htmlspecialchars($requete);
  header('Location: index.php?page=texte');
?>