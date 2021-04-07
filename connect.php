<?php

$servername = "localhost";
$username = "viveenlibertad_igor_admin";
$password = "AM0NfcWpOuBR";
$dbname = "viveenlibertad_main_db";

$conexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexion) {
  echo "<h1>No es posible conectar</h1>";
}

?>
