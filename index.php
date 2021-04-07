<?php
require("connect.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Vive En Libertad</title>
  <link rel="icon" href="images/logo-color.png">
  <link rel="stylesheet" href="css/styles.css">
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
</head>

<body>
  <section class="menu-white">
    <div class="buscar">
      <i class="fas fa-search"></i>
      <input class="buscar-input" type="text" name="" value="" placeholder="BUSCAR...">
    </div>
    <div class="redes">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-instagram"></i>
    </div>
  </section>

  <section class="header">
    <a href="index.php"><img class="logo-blanco" src="images/logo-blanco.png"></a>
    <div class="row g-0">
      <div class="col-lg-6">
        <img src="images/banner-nube.png" class="banner-nube">
      </div>
      <div class="col-lg-6">
        <img src="images/banner-frase.png" class="banner-frase">
      </div>
    </div>
  </section>

  <section class="categories">
    <h2 class="categ-titulo">CATEGORÍAS</h2>
    <div class="border-titulo"></div>
    <ul class="categ-icon">
      <a href="urbano.php"><li><img src="images/urbano-white.png" />URBANO</li></a>
      <a href="cultura.php"><li><img src="images/cultura-white.png" />CULTURA</li></a>
      <a href="gastronomia.php"><li><img src="images/gastronomia-white.png" />GASTRONOMÍA</li></a>
      <a href="aventura.php"><li><img src="images/aventura-white.png" />AVENTURA</li></a>
    </ul>
  </section>

  <section class="articulos">
    <?php
      $query = "SELECT * FROM articulos";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0) {
        while($row = mysqli_fetch_assoc($query_run)) {
    ?>

    <div class="articulo-simple">
      <img src="<?php echo $row['imagen'] ?>">
      <div class="articulo-texto">
        <h1> <?php echo $row['nombre_articulo']; ?> </h1>
        <p> <?php echo $row['descripcion'] ?> </p>
        <button type="button" name="button">LEER MÁS</button>
      </div>
    </div>

    <?php
        }
      }
    ?>

  </section>

  <div class="cargar-mas">
    <a href="#"><h3>CARGAR MÁS</h3></a>

  </div>

  <section class="footer">
        <img src="images/logo-blanco.png" class="logo-footer">
        <div class="list-footer">
          <h3>BLOG</h3>
          <ul>
            <a href="#"><li>Urbano</li></a>
            <a href="#"><li>Cultural</li></a>
            <a href="#"><li>Gastronomía</li></a>
            <a href="aventura.html"><li>Aventura</li></a>
          </ul>
        </div>
        <div class="list-footer">
          <h3>ENLACES DE INTERES</h3>
          <ul>
            <a href="https://www.regionlalibertad.gob.pe/conoce"><li>Gercetur</li></a>
            <a href="https://www.ytuqueplanes.com/"><li>¿Y tú que planes?</li></a>
          </ul>
        </div>
        <div class="list-footer">
          <h3>REDES SOCIALES</h3>
          <ul>
            <a href="#"><li>Facebook</li></a>
            <a href="#"><li>Instagram</li></a>
          </ul>
        </div>

      <div class="copyright">
        <p>© 2021 ViveEnLibertad Todos los derechos reservados</p>
      </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
