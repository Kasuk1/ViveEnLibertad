<?php
include('../connect.php');
session_start();

if(isset($_POST['submit'])){
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM usuario WHERE correo = '$correo' AND contrasena = '$contrasena'";
    $query_run = mysqli_query($conexion, $query);
    $query_check = mysqli_num_rows($query_run);
    $query_assoc = mysqli_fetch_assoc($query_run);



    if($query_check >= 1){

      /*LUEGO DE VERIFICAR SI EXISTEN DATOS REALIZADA LA CONSULTA SQL, ENTONCESSE ALMACENA LA INFORMACION EN ARRAY(FETCH_ASSOC) EN LA VARIABLE usuario*/
      session_start();
      $_SESSION['usuario'] = $query_assoc;

      header('Location: main-admin.php');
    }
    else{
        echo '<script type="text/javascript"> alert("Email o contraseña incorrectos, intente otra vez."); window.location = "index-admin.php";</script>';
    }
}
