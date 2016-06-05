  <?PHP
  if (isset($_SESSION['connection']) && $_SESSION['connection'] == 1) {
    header('Location: index.php');
  }
   ?>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-lg-4">
      <?PHP
          if (isset($_SESSION['connection']) && $_SESSION['connection'] == 0) {
          echo  '<div class="alert alert-danger" role="alert"><span class="label label-danger">!</span> Pseudo ou mot de passe erronnés</div>';
          }
      ?>
        <form action="connection_trait.php" method="get">
          <div class="form-group">
          <label for="pseudo/email">Pseudo/Email:</label>
          <input type="text" name="pseudo" placeholder="Pseudo/Email" class="form-control">
          </div>
          <div class="form-group">
          <label for="mdp">Mot de passe:</label>
          <input type="password" name="mdp" placeholder="Mot de passe" class="form-control">
          </div>
          <h6><a href="index.php?page=create_account">Ou créer un compte</a></h6>
          <br><br>
          <input type="submit" value="Valider" class="btn btn-info">
        </form>
      </div>
    </div>



    