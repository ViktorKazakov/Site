  <?PHP
  if (isset($_SESSION['connection'])) {
    header('Location: index.php');
  }else{
        
  }
   ?>
  <script>
  $(function() {
  $( "#datepicker" ).datepicker({
  altField: "#datepicker",
  closeText: 'Fermer',
  prevText: 'Précédent',
  nextText: 'Suivant',
  currentText: 'Aujourd\'hui',
  monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
  monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
  dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
  dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
  dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
  weekHeader: 'Sem.',
  dateFormat: 'dd/mm/yy'
  });
  });
  </script>
  <script src="js/create_account_form.js"></script>
  <body>

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-lg-4">
        <form id="form_create_account" action="create_account_trait.php" method="get">
          <div class="form-group">
            <label for="email">Pseudo : *</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email : *</label>
            <input type="text" name="email" id="email" placeholder="Email" class="form-control">
          </div>
          <div class="form-group">
            <label for="mdp">Mot de passe : *</label>
            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Adresse :</label>
            <input type="text" name="adresse" placeholder="Adresse" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Téléphone : *</label>
            <input type="text" name="telephone" id="telephone" placeholder="Téléphone" class="form-control">
          </div>
            <label class="checkbox-inline">
            <input type="radio" value="0" name="sexe" checked> Homme
          </label>
            <label class="checkbox-inline">
            <input type="radio" value="1" name="sexe"> Femme
          </label>
          <br><br>
          <label for="date">Date de naissance : *</label>
          <br>      
            <input type="text" id="datepicker" placeholder="01/03/2016" class="form-control" name="date">
          <br><br>
          <input type="button" value="Valider" class="btn btn-info" onclick="verifForm();"> 
        </form>
        <br>
        <label for="email">Champs obligatoires : *</label>
      </div>
    </div>
  </body>
