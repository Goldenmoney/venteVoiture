<?php
session_start();

require_once("../modele/Voiture.class.php");
$vectVoiture = new VoitureDAO;
var_dump($_SESSION['panier']);

if (isset($_GET["nom"])) {
  array_push($_SESSION['panier'], $_GET["nom"]);
}

foreach ($_SESSION['panier'] as $value) {
  $selectVoiture = $vectVoiture->getFctNom($value);
  $nom = $selectVoiture->getNom();
  $prix = $selectVoiture->getPrix();
  $nom = $selectVoiture->getNom();
  $id = $selectVoiture->getId();
}//-->>>>a gerer dans le code html

include('../vue/panier.php');
  ?>
