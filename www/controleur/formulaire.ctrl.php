<?php
session_start();
require_once("../modele/Voiture.class.php");
$dao = new VoitureDAO;
$bdd = $dao->getDB();


if(isset($_POST["compte"])){
  $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  // Insertion
  $login = $_POST['login'];
  $niveau = $_POST['niveau'];
   //lignes inutiles ???
   
  $req = $bdd->prepare("INSERT INTO utilisateur(login, niveau, pass) VALUES('$login', $niveau, '$pass_hache')");
  $req->execute();
  $_SESSION['niveau'] =  $niveau;
  $_SESSION['login'] = $login;
  $_SESSION['panier'] = [];

  header("Location:../controleur/start.ctrl.php");
  exit;

} else {
  include('../vue/formulaire.php');
}
 ?>
