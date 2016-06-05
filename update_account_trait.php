<?PHP
  require_once('connexion.php');  
  $requete = 'UPDATE utilisateurs SET PSEUDO = :pseudo, EMAIL = :email, ADRESSE = :adresse, TELEPHONE = :telephone WHERE ID = :id';
  $prepare = $connexion->prepare($requete);
  $prepare->bindValue('pseudo', $_REQUEST['pseudo'], PDO::PARAM_STR);
  $prepare->bindValue('email', $_REQUEST['email'], PDO::PARAM_STR);
  $prepare->bindValue('adresse', $_REQUEST['adresse'], PDO::PARAM_STR);
  $prepare->bindValue('telephone', $_REQUEST['telephone'], PDO::PARAM_STR);
  $prepare->bindValue('id', $_REQUEST['id'], PDO::PARAM_INT);
	$resultat=$prepare->execute();
  echo $requete;
  //echo htmlspecialchars($requete);
  header('Location: index.php');
?>