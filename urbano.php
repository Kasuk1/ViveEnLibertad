<?php
require("connect.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Urbano</title>
    <link rel="icon" href="images/logo-color.png">
    <link rel="stylesheet" href="css/categorias-styles.css">
    <link rel="stylesheet" href="css/lightslider.css">
    <!--JQUERY-->
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>
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
      <div class="text-header">
        <h1>10 COSAS QUE HACER EN HUANCHACO</h1>
        <h3>UNO DE LOS BALNEARIOS MÁS FAMOSOS QUE TIENE LA ZONA NORTEÑA DEL PERÚ</h3>
        <button type="button" name="button">
          COMPARTIR <i class="fas fa-share-alt"></i>
        </button>
      </div>
    </section>

    <section class="categories">
      <ul class="categ-icon">
        <a class="active" href="urbano.php"><li><img src="images/urbano-white.png" />URBANO</li></a>
        <a href="cultura.php"><li><img src="images/cultura-white.png" />CULTURA</li></a>
        <a href="gastronomia.php"><li><img src="images/gastronomia-white.png" />GASTRONOMÍA</li></a>
        <a href="aventura.php"><li><img src="images/aventura-white.png" />AVENTURA</li></a>
      </ul>
    </section>

    <section class="articulos">
      <?php
        $query = "SELECT * FROM articulos WHERE id_categoria = 1";
        $query_run = mysqli_query($conexion, $query);
        $query_check = mysqli_num_rows($query_run);

        if($query_check > 0) {
          while($row = mysqli_fetch_assoc($query_run)) {
      ?>

      <div class="articulo">
        <img src=" <?php echo $row['imagen'] ?> ">
        <div class="articulo-text">
          <h1> <?php echo $row['nombre_articulo'] ?> </h1>
          <h4>ETIQUETA 1, ETIQUETA 21, ETIQUETA 3</h4>
          <p> <?php echo $row['descripcion'] ?> </p>
          <button type="button" name="button">MAS INFO</button>
          <ul>
            <a href="#"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
            <a href="#"><li><i class="fas fa-map-marker-alt icon"></i>DIRECCIÓN</li></a>
            <a href="#"><li><i class="far fa-calendar-alt icon"></i>HORARIO</li></a>
          </ul>
        </div>
      </div>

      <?php
          }
        }
      ?>

    </section>

    <div class="compartir">
      <h4>COMPARTIR EN: </h4>
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-whatsapp"></i>
    </div>

    <section class="caja-comentario">
      <h1>DEJA UN COMENTARIO:</h1>
      <textarea rows="10" cols="50" placeholder="COMENTARIO"></textarea>
      <div class="datos">
        <input type="text" placeholder="NOMBRE">
        <input type="email" placeholder="EMAIL">
      </div>
      <button type="button">PUBLICAR</button>
    </section>

    <section class="slide-articulos">
      <ul id="autoWidth" class="cs-hidden">
        <li class="item-a">
          <div class="box">
            <img src="images/articulo-simple1.png">
            <div class="box-texto">
              <h3>UN PASEITO POR HUANCHACO</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas...
              </p>
              <button type="button">LEER MÁS</button>
            </div>
          </div>
        </li>
        <li class="item-a">
          <div class="box">
            <img src="images/articulo-simple2.png">
            <div class="box-texto">
              <h3>EXCURSIÓN A CASCAS</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas...
              </p>
              <button type="button">LEER MÁS</button>
            </div>
          </div>
        </li>
        <li class="item-a">
          <div class="box">
            <img src="images/articulo-simple3.png">
            <div class="box-texto">
              <h3>MUSEO DEL JUGUETE ANTIGUO</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas...
              </p>
              <button type="button">LEER MÁS</button>
            </div>
          </div>
        </li>
        <li class="item-a">
          <div class="box">
            <img src="images/articulo-simple4.png">
            <div class="box-texto">
              <h3>PALACIO ITURREGUI</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas...
              </p>
              <button type="button">LEER MÁS</button>
            </div>
          </div>
        </li>
        <li class="item-a">
          <div class="box">
            <img src="images/articulo-simple5.png">
            <div class="box-texto">
              <h3>EXCURSIÓN A CASCAS</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas...
              </p>
              <button type="button">LEER MÁS</button>
            </div>
          </div>
        </li>
        <li class="item-a">
          <div class="box">
            <img src="images/articulo-simple6.png">
            <div class="box-texto">
              <h3>EXCURSIÓN A CASCAS</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                Risus commodo viverra maecenas...
              </p>
              <button type="button">LEER MÁS</button>
            </div>
          </div>
        </li>
      </ul>

    </section>

    <section class="footer">
          <img src="images/logo-blanco.png" class="logo-footer">
          <div class="list-footer">
            <h3>BLOG</h3>
            <ul>
              <a href="urbano.php"><li>Urbano</li></a>
              <a href="cultura.php"><li>Cultural</li></a>
              <a href="gastronomia.php"><li>Gastronomía</li></a>
              <a href="aventura.php"><li>Aventura</li></a>
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

    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
