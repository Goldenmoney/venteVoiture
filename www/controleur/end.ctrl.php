<?php
session_start();
if(isset($_SESSION)) {
  $_SESSION = array();
  session_destroy();
}
header("Location:../controleur/start.ctrl.php");
exit;
 ?>
