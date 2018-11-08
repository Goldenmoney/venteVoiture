<?php
session_start();
include('../vue/connexion.php');

//appel base de donnees
require_once("../modele/Voiture.class.php");
$dao = new VoitureDAO;
$bdd = $dao->getDB();

if(isset($_POST["connexion"])){

  $login = $_POST['login'];
  //  Récupération de l'utilisateur et de son pass hashé
  $req = $bdd->prepare("SELECT niveau, pass FROM utilisateur WHERE login = :login");
  $req->execute(array('login' => $login));

  $resultat = $req->fetch();
  // Comparaison du pass envoyé via le formulaire avec la base
  $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

  if (!$resultat)
  {
    echo 'Mauvais identifiant ou mot de passe !';
  }
  else{
    if ($isPasswordCorrect) {
      $_SESSION['niveau'] = $resultat['niveau'];
      $_SESSION['login'] = $login;
      $_SESSION['panier'] = [];

      echo 'Vous êtes connecté !';
      header("Location:../controleur/start.ctrl.php");
      exit;
    }
    else {
      echo 'Mauvais identifiant ou mot de passe !';
    }
  }
}

?>
