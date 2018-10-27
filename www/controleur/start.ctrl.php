<?php
require_once("../modele/Voiture.class.php");
$vectVoiture = new VoitureDAO;
$vectCat = $vectVoiture->getAllCat();

if (isset($_GET["catChoisie"])) {
  $selectCat = $_GET["catChoisie"];
} else {
  $selectCat="toutes";
}

if (isset($_GET["trie"])) {
  $selectTrie = $_GET["trie"];
} else {
  $selectTrie = "indiferent";
}

if($selectCat=="toutes"){
  $garage = $vectVoiture->getAll($selectTrie);
} else{
  $garage = $vectVoiture->getFctCat($selectCat, $selectTrie);
}

include('../vue/index.php');
  ?>
