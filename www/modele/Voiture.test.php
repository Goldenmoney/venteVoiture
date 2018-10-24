<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      img{
        width: 200px;
        height: 200px;
      }
    </style>
    <title>Garage</title>
  </head>
  <body>
    <h1>Garage</h1>
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
  </body>
</html>
