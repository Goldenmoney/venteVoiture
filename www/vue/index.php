<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../vue/design/style.css">
  <meta charset="utf-8">
  <title>Vente voiture</title>
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
    <FORM action="../controleur/start.ctrl.php">
      <p class="cat">Categorie :</p>
    <SELECT name="catChoisie" size="1">
      <option value="toutes"
      <?php if (!isset($_GET["catChoisie"]) || $_GET["catChoisie"]=="toutes") {
        echo "selected";
      } ?>>Toutes
      <?php
        foreach ($vectCat as $key => $value) {
          if ((isset($_GET["catChoisie"])) && ($_GET["catChoisie"] == $value[0])) {
            echo "<option value=\"$value[0]\" selected>".$value[0];
          } else {
            echo "<option value=\"$value[0]\">".$value[0];
          }

        }
        ?>
    </SELECT>
    <p class="cat">Trier par :</p>
    <SELECT name="trie" size="1">
      <option value="indiferent"
        <?php if (!isset($_GET["trie"]) || $_GET["trie"]=="indiferent") {
          echo "selected";
        } ?>>Indiférent
      <option value="prixCroissant"
        <?php if (isset($_GET["trie"]) && $_GET["trie"]=="prixCroissant") {
          echo "selected";
        } ?>
      >Prix croissant
    </SELECT>
    <button type="submit" class="button">Rechercher</button>
    </FORM>
    </div>
  </div>
  <div class="contenu">
    <?php
      foreach ($garage as $key => $value){
        // $voiture = $value->get($key);
        $couleur = $value->getCouleur();
        $prix = $value->getPrix();
        $nom = $value->getNom();
        $id = $value->getId();
        $image=$id.".jpg";

        echo "<div class=\"annonce\">";
          echo "<div class=\"image\">";
            echo "<img src=\"../vue/design/images/$image\" alt=\"$nom\">";
          echo"</div>";
          echo "<div class=\"info\">";
            echo "<p class=\"bold\">";
              echo $nom;
            echo "</p>";
            echo "<p>";
              echo "Prix : ".$prix."€";
            echo "</p>";
            echo "<div class=\"ajouter\">";
              echo "<a>";
                echo "<p>";
                  echo "Ajouter";
                echo "<p>";
              echo "</a>";
            echo"</div>";
          echo"</div>";
        echo"</div>";
        echo"<hr>";
      }
    ?>
  </div>
  <footer>
    <p>le pied de page d'un site réalisé par des gens</p>
  </footer>
</body>
</html>
