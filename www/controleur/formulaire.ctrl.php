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
  $sql = "INSERT INTO utilisateur(login, niveau, pass) VALUES('$login', $niveau, '$pass_hache')";
  var_dump($sql);
  $req = $bdd->prepare("INSERT INTO utilisateur(login, niveau, pass) VALUES('$login', $niveau, '$pass_hache')");
  var_dump($req);
  $req->execute();
  $_SESSION['niveau'] =  $niveau;
  $_SESSION['login'] = $login;
  header("Location:../controleur/start.ctrl.php");
  exit;

      // 'login' => $login,
      // 'niveau' => $niveau,
      // 'pass' => $pass_hache));

} else {
  include('../vue/formulaire.php');
}



// public function get(int $id):Voiture{
//   $sql="SELECT * FROM voiture WHERE identifier=$id";
//   $sth=$this->dataBase->query($sql);
//   $result=$sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Voiture");
//   return $result[0];
// }
 ?>
