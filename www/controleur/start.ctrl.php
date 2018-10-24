<?php
require_once("../modele/Voiture.class.php");
$vectVoiture = new VoitureDAO;
$vectCat = $vectVoiture->getAllCat();

if(!isset($_GET["catChoisie"]) || $_GET["catChoisie"]=="toutes"){
  $garage = $vectVoiture->getAll();
} else{
  $cateChoisie =$_GET["catChoisie"];
  $garage = $vectVoiture->getFctCat($cateChoisie);
}



include('../vue/index.php');

  ?>
