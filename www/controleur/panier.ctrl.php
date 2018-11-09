<?php
session_start();

require_once("../modele/Voiture.class.php");
$vectVoiture = new VoitureDAO;

//$req = $bdd->prepare("INSERT INTO panier(login, idVoiture) VALUES('$login', $idVoiture)");
//$req->execute();

$bdd = $vectVoiture->getDB();

if(isset($_GET['add'])) {
  if ($_GET['add'] == 'true') { //cas où on a appler ce ctrl pour ajouter au panier
    if (isset($_GET['id'])) {
      $login = $_SESSION['login'];
      $idVoiture = $_GET['id'];
      $req = $bdd->prepare("INSERT INTO panier(login, idVoiture) VALUES('$login', $idVoiture)");
      $req->execute();

      $selectVoiture = $vectVoiture->get($_GET['id']);
      // ????????????????????????????
      $nom = $selectVoiture->getNom();
      $prix = $selectVoiture->getPrix();
      $nom = $selectVoiture->getNom();
      $couleur = $selectVoiture->getCouleur();
      $categorie = $selectVoiture->getCategorie();

      //array_push($_SESSION['panier'], $_GET['nom']);
      header("Location:../controleur/start.ctrl.php");
      exit;
    }
  } else if ($_GET['add'] == 'false'){ //cas où on a appler ce ctrl pour afficher le panier
    $login = $_SESSION['login'];
    $arrayPanier = $vectVoiture->getIdFctLogin($login);
    include('../vue/panier.php');
  } else {
    //erreur
  }

} else {
  //ereur
}
// foreach ($_SESSION['panier'] as $value) {
//   $selectVoiture = $vectVoiture->getFctNom($value);
//   $nom = $selectVoiture->getNom();
//   $prix = $selectVoiture->getPrix();
//   $nom = $selectVoiture->getNom();
//   $id = $selectVoiture->getId();
// }//-->>>>a gerer dans le code html

//
  ?>
