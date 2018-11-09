<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../vue/design/style.css">
    <meta charset="utf-8">
    <title>information <?php echo $nom; ?></title>
  </head>
  <body>
    <div class="ban">
      <div class="title">
        <a href="../controleur/start.ctrl.php" class="title">
          <h1>Vente voiture</h1>
        </a>
      </div>

      <div class="navbar">
        <?php
        if($_SESSION['niveau'] != 2) {
          echo "<div class=\"inscrire\">";
          echo "<a href=\"../controleur/end.ctrl.php\"><p>Déconnexion</p></a>";
          echo "</div>";
        }
         ?>
         <?php
         if($_SESSION['niveau'] == 2) {
           echo "<div class=\"inscrire\">";
           echo "<a href=\"../controleur/formulaire.ctrl.php\"><p>s'incrire</p></a>";
           echo "</div>";
           echo "<div class=\"inscrire\">";
           echo "<a href=\"../controleur/connexion.ctrl.php\"><p>se connecter</p></a>";
           echo "</div>";
         }
          ?>

      </div>

      <div class="choix">
        <a href="../controleur/start.ctrl.php" style="color:white;">Retour au show room</a>
      </div>
    </div>
    <div class="contenu">
      <div class="information">
        <?php
        foreach ($arrayPanier as $key => $value) {
          $value = $value[0];
          $selectVoiture = $vectVoiture->getFctId($value);
          $nom = $selectVoiture->getNom();
          //$prix = $selectVoiture->getPrix();
          //$id = $selectVoiture->getId();
          echo "<p>Nom voiture : ".$nom."</p>";
        }
         ?>
        <!-- <h1><?php //echo $nom; ?></h1>
        <img src="../vue/design/images/<?php// echo $id; ?>.jpg" alt="<?php //echo $nom; ?>">
        <p>Prix : <?php //echo $prix; ?></p> -->

      </div>
    </div>
    <footer>
      <p>le pied de page d'un site réalisé par des gens</p>
    </footer>
  </body>
</html>
