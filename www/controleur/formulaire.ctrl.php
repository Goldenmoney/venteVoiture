<?php
session_start();
include('../vue/formulaire.php');

var_dump($_POST["login"]);

if(isset($_POST["compte"])){
  $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

  // Insertion
  $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, pass, email, date_inscription) VALUES(:login, :niveau, :pass)');
  $req->execute(array(
      'login' => $login,
      'niveau' => $niveau,
      'pass' => $pass_hache));

}
 ?>
