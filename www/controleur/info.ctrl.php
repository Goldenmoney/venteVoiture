<?php
require_once("../modele/Voiture.class.php");
$vectVoiture = new VoitureDAO;

$selectVoiture = $vectVoiture->getFctNom($_GET["info"]);
$nom = $selectVoiture->getNom();
$prix = $selectVoiture->getPrix();
$nom = $selectVoiture->getNom();
$couleur = $selectVoiture->getCouleur();
$categorie = $selectVoiture->getCategorie();
$id = $selectVoiture->getId();
$nomMarque = $selectVoiture->getNomMarque();
$paysMarque = $vectVoiture->getPaysMarque($selectVoiture->getNomMarque());
$paysMarqueImage = $vectVoiture->getPaysMarque($selectVoiture->getNomMarque()).".png";
$logoMarque = $selectVoiture->getNomMarque().".png";

include('../vue/info.php');
 ?>
