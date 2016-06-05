<?PHP
  session_start();
  require_once('connexion.php');
  require_once('convert_date.php');
  
?>
<!DOCTYPE html>
<HTML lang="fr">
  <head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/fonctions.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
  <link href="css/summernote_pers.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
  <script src="lang/summernote-fr-FR.js"></script>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>
  
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php?page=home">Site</a>
    </div>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php?page=texte">Article</a></li>
        <!--<li><a href="index.php?page=photo">Photo</a></li>-->
      </ul>
      <form class="navbar-form navbar-right" action="index.php?page=texte" role="search" method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="search" placeholder="Recherche">
        </div>
        <button type="submit" class="btn btn-default">Valider</button>
      </form>
      <?PHP
      if (!isset ($_SESSION['connection']) || isset($_SESSION['connection']) && $_SESSION['connection'] != 1 ) {
        echo '<ul class="nav navbar-nav navbar-right">';
        echo '<li><a href="index.php?page=connexion">Connexion / Inscription</a></li>'; 
        echo '</ul>';
      }else{
            echo '<ul class="nav navbar-nav navbar-right">';
            echo '<li class="dropdown">';
            echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['pseudo'].' '.'<span class="caret"></span></a>';
            echo '<ul class="dropdown-menu">';
            echo '<li><a href="index.php?page=update_account">Mon compte</a></li>';
            echo '<li><a href="index.php?page=create_form">Création d\'article</a></li>';
            echo '<li role="separator" class="divider"></li>';
            echo '<li><a href="deco_trait.php">D&eacute;connexion</a></li>';            
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
      }
      ?>
    </div>
  </div>
  </nav>
  <div class="container">
  <?PHP
    /*if(isset($_REQUEST['page']) && $_REQUEST['page'] == "photo"){
      require_once('photo.php');
    }*/
     if(isset($_REQUEST['page']) && $_REQUEST['page'] == "texte"){
      require_once('articles.php');
    }    
    if(!isset($_REQUEST['page'])){
      require_once('home.php');
    }
    if(isset($_REQUEST['page']) && $_REQUEST['page'] == "home"){
      require_once('home.php');
    }
    if(isset($_REQUEST['page']) && $_REQUEST['page'] == "connexion"){
      require_once('connection_form.php');
    }
    if(isset($_REQUEST['page']) && $_REQUEST['page'] == "create_account"){
      require_once('create_account_form.php');
    }
    if(isset($_REQUEST['page']) && $_REQUEST['page'] == "create_form"){
      require_once('create_form.php');
    }
    if(isset($_REQUEST['page']) && $_REQUEST['page'] == "texte_delete"){
      require_once('delete_trait.php');
    }
    if(isset($_REQUEST['page']) && $_REQUEST['page'] == "update"){
      require_once('update_form.php');
    }
    if(isset($_REQUEST['page']) && $_REQUEST['page'] == "update_account"){
      require_once('update_account_form.php');
    }
  ?>
  </div>
  </body>
</HTML>

