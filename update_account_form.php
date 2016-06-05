<?php
  require_once('connexion.php');
	$requete="SELECT * FROM utilisateurs WHERE ID = ".$_SESSION['id'];
	$resultat=$connexion->query($requete);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
?>
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-lg-4">
  <form action="update_account_trait.php?id=<?php echo $ligne['ID'] ?>" method="post">
  <div class="form-group">
     <label for="titre">Pseudo :</label>
     <input type="text" name="pseudo" class="form-control" value="<?php echo $ligne['PSEUDO'] ?>">
  </div>
   <div class="form-group">
     <label for="titre">Email :</label>
     <input type="text" name="email" class="form-control" value="<?php echo $ligne['EMAIL'] ?>">
  </div>
   <div class="form-group">
     <label for="titre">Adresse :</label>
     <input type="text" name="adresse" class="form-control" value="<?php echo $ligne['ADRESSE'] ?>">
  </div>
  <div class="form-group">
     <label for="titre">Téléphone :</label>
     <input type="text" name="telephone" class="form-control" value="<?php echo $ligne['TELEPHONE'] ?>">
  </div>
  <br>
  <button type="submit" class="btn btn-default">Valider</button>
  </form>
  </div>
  

