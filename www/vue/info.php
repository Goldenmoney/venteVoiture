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
        <div class="panier">
          <a href="../controleur/monCompte.ctrl.php"><p>panier</p></a>
        </div>
        <div class="inscrire">
          <a href="../controleur/formulaire.ctrl.php"><p>s'incrire</p></a>
        </div>

      </div>

      <div class="choix">
        <a href="../controleur/start.ctrl.php" style="color:white;">Retour au show room</a>
      </div>
    </div>
    <div class="contenu">
      <div class="information">
        <h1><?php echo $nom; ?></h1>
        <img src="../vue/design/images/<?php echo $id; ?>.jpg" alt="<?php echo $nom; ?>">
        <p>Prix : <?php echo $prix; ?></p>
        <p>Categorie : <?php echo $categorie; ?></p>
        <p>Couleur : <?php echo $couleur; ?></p>
        <p>Pays de la marque : <?php echo $paysMarque; ?></p>
      </div>
    </div>
    <footer>
      <p>le pied de page d'un site réalisé par des gens</p>
    </footer>
  </body>
</html>
