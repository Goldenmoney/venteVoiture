<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../vue/design/style.css">
  <meta charset="utf-8">
  <title>Formulaire</title>
</head>
<body id="form">
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
      <p>Formulaire</p>
    </div>
  </div>
  <div class="contenu">

    <form action="../controleur/formulaire.ctrl.php" method="post">
      <div>
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" />
        <div>
          <div>
            <label for="niveau">Niveau :</label>
            <input type="text" id="niveau" name="niveau" />
          </div>
          <div>
            <label for="pass">mot-de-passe :</label>
            <input name="pass" type="password" id="pass" size="20" />
          </div>
          <button type="submit" name="compte" value="monCompte" class="button">S'inscrire !</button>

      </div>
    </div>
  </form>

  </div>
  <footer>
    <p>le pied de page d'un site réalisé par des gens</p>
  </footer>

</body>
</html>
