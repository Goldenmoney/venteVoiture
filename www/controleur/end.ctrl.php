<?php
if(isset($_SESSION)) {
  session_destroy();
}
header("Location:../controleur/start.ctrl.php");
exit;
 ?>
