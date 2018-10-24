<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="design/style.css">
  <meta charset="utf-8">
  <title>Vente voiture</title>
</head>
<body>
  <div class="ban">
    <a href="index.php" class="title">
      <h1>Vente voiture</h1>
    </a>
    <div class="choix">
      <p>ici on met tout les choix possible</p>
    </div>
  </div>
  <div class="contenu">
    <?php
    require_once("../modele/Voiture.class.php");
    $m = new VoitureDAO;
    for ($i=1; $i < 11; $i++) {
      $m = $garage->get($i);

      $couleur=$m->getCouleur();
      $prix=$m->getPrix();
      echo "<div class=\"annonce\">";
      $image=$i.".jpg";
      $nom = $m->getNom();
      echo "<div class=\"image\">";
      echo "<img src=\"design/images/$image\" alt=\"$nom\">";
      echo"</div>";
      echo "<div class=\"info\">";
      echo "<p class=\"bold\">";
      echo $nom;
      echo "</p>";
      echo "<p>";
      echo " Ainsi que son prix : ".$prix;
      echo "</p>";
      echo"</div>";
      echo"</div>";
      echo"<hr>";
    }
    ?>
  </div>
  <footer>
    <p>le pied de page d'un site réalisé par des gens</p>
  </footer>
  <div class="compte">
    <a href="formulaire.php"><p>mon compte</p></a>
  </div>
</body>
</html>
