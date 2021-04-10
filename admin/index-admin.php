<?php
require("../connect.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Admin-ViveEnLibertad</title>
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
  <div class="login-admin">
    <div class="imagen-admin">
      <img src="../images/admin-fondo.jpg">
    </div>
    <div class="datos-admin">
      <img src="../images/logo-color.png" alt="">
      <form class="form-admin" action="login-check.php" method="post">
        <input type="text" name="correo" placeholder="Ingrese Email" required>
        <input type="password" name="contrasena" placeholder="Ingrese Contraseña" required>
        <button type="submit" name="submit">Iniciar Sesión</button>
      </form>
    </div>
  </div>

</body>

</html>
