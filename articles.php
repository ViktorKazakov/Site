<?php

   if (!isset ($_SESSION['connection']) || isset($_SESSION['connection']) && $_SESSION['connection'] != 1 ) {
      header('Location: index.php?page=connexion');     
   }
   
  $search = "";
  if (isset($_REQUEST['search']) && $_REQUEST['search'] != null){
  $search = $_REQUEST['search'];
  }
  $requete='SELECT * FROM articles WHERE TITRE LIKE "%'.$search.'%" OR 
                                       ARTICLE LIKE "%'.$search.'%" OR
                                       AUTEUR LIKE "%'.$search.'%"
                                       ORDER BY DATE DESC'; 

  //$requete="SELECT * FROM articles ORDER BY DATE DESC";
  $resultat=$connexion->query($requete);
  while ($ligne = $resultat ->fetch(PDO::FETCH_ASSOC)) {
      echo '<div class="panel panel-default">';
      echo '<div class="panel-heading">';
      echo '<h3 class="panel-title">';  
      echo $ligne['TITRE'];
      echo '</h3>';
      echo '</div>';
      echo '<div class="panel-body">';
      echo $ligne['ARTICLE'];
      echo '</div>';
      echo '<div class="panel-footer">';
      echo $ligne['AUTEUR'].', ';
      $date = convert_date($ligne['DATE']);
      $heure = convert_time($ligne['DATE']);          
      echo $date.' à '.$heure.'     ';
      echo '<a href="index.php?page=update&id='.$ligne['ID'].'">'.'Editer'.'</a>'.' / '.'<a href="index.php?page=texte_delete&id='.$ligne['ID'].'" onclick="return validate();">'.'Supprimer'.'</a>';
      echo '</div>';
      echo '</div>';
   }
?>

