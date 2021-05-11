<?php
require("session-check.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Admin-Principal</title>
  <link rel="icon" href="../images/logo-color.png">
  <link rel="stylesheet" href="styles.css">
  <!-- Bootstrap Project -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Font Awesome - Material Design-->
  <script src="https://kit.fontawesome.com/e04169252f.js" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/mec4tub.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Manrope&display=swap" rel="stylesheet">
  <!--JQuery-->
  <script src="js/JQuery3.3.1.js" charset="utf-8"></script>
</head>

<body>

<div class="menu-admin">
  <h1>VIVEENLIBERTAD-ADMIN</h1>
  <ul>
    <li><a href="main-admin.php">Home</a></li>
    <li><a href="gestion-articulos.php">Artículos</a></li>
    <li><a href="gestion-comentarios.php">Comentarios</a></li>
    <li><a href="session-destroy.php">Cerrar sesión</a></li>
  </ul>
</div>

<div class="about">
  <h2>ACERCA DE:</h2>
  <p>La siguiente ventana es la principal del admin. En el menú de navegación localizado en la parte superior, se podrá apreciar
    todo los items que se pueden gestionar. Recuerde que toda funcionalidad va de la mano con la base de datos de VIVEENLIBERTAD,
    alojada en MySql y administrada en phpMyAdmin. Dicho esto en caso de presentarse errores en la gestión de estos items, se procederá
    a manipular directamente la base de datos. Porfavor, no olvide cerrar sesión cuando termine sus funciones.</p>
</div>


  <script type="text/javascript" src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
