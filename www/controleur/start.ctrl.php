<?php
require_once("../modele/Voiture.class.php");
$voiture = new VoitureDAO;
for ($i=1; $i < 11; $i++) {
  $voiture = $garage->get($i);
  $couleur = $voiture->getCouleur();
  $prix = $voiture->getPrix();
  $nom = $voiture->getNom();
}

include('../vue/index.php');

  ?>
