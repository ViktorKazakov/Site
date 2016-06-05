<?PHP
  require_once('connexion.php');
  $requete = 'DELETE FROM articles WHERE ID = '.$_REQUEST['id'];
  $resultat= $connexion->query($requete); 
  header('Location: index.php?page=texte');
  
?>