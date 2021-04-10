<?php
include('../connect.php');
session_start();

if(isset($_POST['submit'])){
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM usuario WHERE correo = '$correo' AND contrasena = '$contrasena'";
    $query_run = mysqli_query($conexion, $query);
    $query_check = mysqli_num_rows($query_run);

    if($query_check){
      header('Location: gestion-articulos.php');
    }
    else{
        echo '<script type="text/javascript"> alert("Email o contraseña incorrectos, intente otra vez."); window.location = "index-admin.php";</script>';
    }
    mysqli_free_result($query_run);
    mysqli_close($conexion);
}
