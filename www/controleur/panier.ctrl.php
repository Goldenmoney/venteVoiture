<?php
session_start();
if (isset($_GET["nom"])) {
  array_push($_SESSION['panier'], $_GET["nom"]);
}
var_dump($_SESSION['panier']);
include('../vue/panier.php');
  ?>
