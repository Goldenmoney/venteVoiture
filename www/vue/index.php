<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../vue/design/style.css">
  <meta charset="utf-8">
  <title>Vente voiture</title>
</head>
<body>
  <div class="ban">
    <a href="../controleur/start.ctrl.php" class="title">
      <h1>Vente voiture</h1>
    </a>
    <div class="choix">
      <p>ici on met tout les choix possible</p>
    </div>
  </div>
  <div class="contenu">
    <?php foreach ($variable as $key => $value): ?>
      echo "<div class=\"annonce\">";
      $image=$i.".jpg";
      echo "<div class=\"image\">";
      echo "<img src=\"../vue/design/images/$image\" alt=\"$nom\">";
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
    <?php endforeach; ?>
  </div>
  <footer>
    <p>le pied de page d'un site réalisé par des gens</p>
  </footer>
  <div class="compte">
    <a href="../controleur/formulaire.ctrl.php"><p>s'incrire</p></a>
  </div>
</body>
</html>
