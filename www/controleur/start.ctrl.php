<?php
require_once("../modele/Voiture.class.php");
$vectVoiture = new VoitureDAO;
$garage = $vectVoiture->getAll();
$vectCat = $vectVoiture->getAllCat();

include('../vue/index.php');

  ?>
