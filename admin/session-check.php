<?php
session_start();

if(!isset($_SESSION['usuario'])){
  echo '<script type="text/javascript"> alert("Necesita iniciar sesión para acceder a esta página, intente otra vez."); window.location = "index-admin.php";</script>';
}else {
}


?>
