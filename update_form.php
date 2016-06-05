<?php
  require_once('connexion.php');
	$requete="SELECT * FROM articles WHERE ID = ".$_REQUEST['id'];
	$resultat=$connexion->query($requete);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
?>


  <form action="update_trait.php?id=<?php echo $ligne['ID'] ?>" method="post">
  <div class="form-group">
     <label for="titre">Titre:</label>
     <input type="text" name="titre" placeholder="Titre" class="form-control" value="<?php echo $ligne['TITRE'] ?>">
  </div>
  <br>
  <script>
  $(document).ready(function() {
    $('#summernote').summernote({
      lang: 'fr-FR', // default: 'en-US'
      height: 250,                 // set editor height
      width : 750,
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true,                  // set focus to editable area after initializing summernote
      placeholder: '',
    });
  });
  </script>
  <textarea id="summernote" name="article"><?php echo $ligne['ARTICLE'] ?></textarea>
  <button type="submit" class="btn btn-default">Valider</button>
  </form>
