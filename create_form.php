 <?PHP
     if (!isset ($_SESSION['connection']) || isset($_SESSION['connection']) && $_SESSION['connection'] != 1 ) {
        header('Location: index.php?page=connexion');     
     }
 ?>
 <br>
   <form action="create_trait.php" method="get">
    <div class="form-group">
      <label for="titre">Titre:</label>
      <input type="text" name="titre" placeholder="Titre" class="form-control">
    </div>
  <br><br>
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
  <textarea id="summernote" name="article"></textarea>
  <button type="submit" class="btn btn-default">Valider</button>
  </form>
