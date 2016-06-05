<?php
  $mois['01'] = 'janvier';
  $mois['02'] = 'février';
  $mois['03'] = 'mars';
  $mois['04'] = 'avril';
  $mois['05'] = 'mai';
  $mois['06'] = 'juin';
  $mois['07'] = 'juillet';
  $mois['08'] = 'août';
  $mois['09'] = 'septembre';
  $mois['10'] = 'octobre';
  $mois['11'] = 'novembre';
  $mois['12'] = 'décembre';

  function convert_date($date)
  {
    global $mois;
    
    $datetime = explode(" ", $date);
    $date_raw = $datetime[0];
    //$heure = $datetime[1];
    $date_n = explode("-", $date_raw);
    $date_m = $mois[$date_n[1]];
        
    return $date_n[2].' '.$date_m.' '.$date_n[0];
  }

  function convert_time($date)
  {
    $datetime = explode(" ", $date);
    $heure = $datetime[1];
    return $heure;
  }    
?>