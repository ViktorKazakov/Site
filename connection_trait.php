<?PHP
  session_start();
  $connexion = new PDO('mysql:host=localhost;dbname=blog','blog','123'); 
  $requete='SELECT PSEUDO, EMAIL, MDP, ID FROM utilisateurs WHERE (PSEUDO = "'.$_REQUEST['pseudo'].'" OR EMAIL = "'.$_REQUEST['pseudo'].'") 
                                                               AND MDP = "'.$_REQUEST['mdp'].'" ';
	$resultat=$connexion->query($requete);
  $enreg = $resultat ->fetch(PDO::FETCH_ASSOC);
  if ($resultat->rowCount() == 1) {
      $_SESSION['connection'] = 1;
      $_SESSION['pseudo'] = $_REQUEST['pseudo'];
      $_SESSION['id'] = $enreg['ID'];
      header('Location: index.php');
  }else{
      $_SESSION['connection'] = 0;
      header('Location: index.php?page=connexion');
  }
  
  //$etat = $resultat->rowCount();
  //echo $etat;
  //header('Location: index.php');
  
?>
