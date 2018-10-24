<?php
    require_once("Voiture.class.php");
    $m = new VoitureDAO;

    for ($i=1; $i < 11; $i++) {
      $m = $garage->get($i);

      $couleur=$m->getCouleur();
      $prix=$m->getPrix();
      echo "Couleur de la voiture : ".$couleur;
      echo " Ainsi que son prix : ".$prix;
      echo"<hr>";
    }
?>
