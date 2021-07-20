<?php
require("connect.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Vista de Artículo</title>
  <link rel="icon" href="images/logo-color.png">
  <!--META TAGS REDES SOCIALES -->
  <?php
    $id_articulo_select = $_GET['id_articulo_select'];
    $id_categoria_select = $_GET['id_categoria_select'];

    $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
    $query_run = mysqli_query($conexion, $query);
    $query_check = mysqli_num_rows($query_run);

    if($query_check > 0){
      while($row = mysqli_fetch_assoc($query_run)) {
  ?>
  <meta property="og:url"                content="https://viveenlibertad.pe/vista-articulo.php?id_articulo_select=<?php echo $row['id_articulo'] ?>&id_categoria_select=<?php echo $row['id_categoria'] ?>" />
  <meta property="og:type"               content="article" />
  <meta property="og:title"              content="<?php echo $row['nombre_articulo'] ?>" />
  <meta property="og:description"        content="<?php echo $row['titulo'] ?>" />
  <meta property="og:image"              content="https://viveenlibertad.pe/<?php echo $row['imagen'] ?>" />
  <?php
      }
    }
  ?>

  <!-- STYLES -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/lightslider.css">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/JQuery3.3.1.js" charset="utf-8"></script>
  <script src="js/lightslider.js" charset="utf-8"></script>
</head>

<body>
  <section class="menu-white">
    <div class="buscar">
      <button type="button" name="submit"><i class="fas fa-search"></i></button>
      <input class="buscar-input" type="text" name="articulos_buscar" id="articulos_buscar" placeholder="BUSCAR ARTÍCULO..." autocomplete="off">
      <div class="lista-articulos" id="listaArticulos">

      </div>
    </div>
    <div class="redes">
      <a href="https://www.facebook.com/viveenlibertad.pe" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/viveenlibertad.pe" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
  </section>



  <section class="header-vista-articulo">
    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {

      ?>
    <img class="vista-art-fondo" src=" <?php echo $row['imagen'] ?> ">
    <a href="index.php"><img class="logo-blanco-vista" src="images/logo-blanco.png"></a>
    <div class="text-header-vista-articulo">
      <h1> <?php echo $row['nombre_articulo'] ?> </h1>
      <h3> <?php echo $row['titulo'] ?> </h3>
      <button type="button">
        COMPARTIR EN:
        <i class="fab fa-facebook-f share-fb"></i>
        <i class="fab fa-twitter share-twitter"></i>
        <i class="fab fa-linkedin share-linkedin"></i>
      </button>
    </div>
    <?php
      }
    }
    ?>
  </section>


    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo1'] !== ""){

      ?>
  <section class="descripcion-articulo container">
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen1'] ?>"></img>

    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo1'] ?> </h2>
      <h4> <?php echo $row['etiqueta1'] ?> </h4>
      <p> <?php echo $row['descripcion1'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['maps1'] ?>" target="_blank"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a><li><i class="fas fa-map-marker-alt icon"></i><?php echo $row['direccion1'] ?></li></a>
        <a href="<?php echo $row['extra_link1'] ?>" target="_blank"><li><i class="fas fa-link icon"></i>VER LINK DE INTERÉS</li></a>
      </ul>
    </div>
  </section>
    <?php
        }
      }
    }
    ?>



    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo2'] !== ""){

      ?>
  <section class="descripcion-articulo2 container">
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen2'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo2'] ?> </h2>
      <h4> <?php echo $row['etiqueta2'] ?> </h4>
      <p> <?php echo $row['descripcion2'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['maps2'] ?>" target="_blank"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a><li><i class="fas fa-map-marker-alt icon"></i><?php echo $row['direccion2'] ?></li></a>
        <a href="<?php echo $row['extra_link2'] ?>" target="_blank"><li><i class="fas fa-link icon"></i>VER LINK DE INTERÉS</li></a>
      </ul>
    </div>
  </section>
    <?php
        }
      }
    }
    ?>


    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo3'] !== ""){

      ?>
  <section class="descripcion-articulo container">
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen3'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo3'] ?> </h2>
      <h4> <?php echo $row['etiqueta3'] ?> </h4>
      <p> <?php echo $row['descripcion3'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['masp3'] ?>" target="_blank"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a><li><i class="fas fa-map-marker-alt icon"></i><?php echo $row['direccion3'] ?></li></a>
        <a href="<?php echo $row['extra_link3'] ?>" target="_blank"><li><i class="fas fa-link icon"></i>VER LINK DE INTERÉS</li></a>
      </ul>
    </div>
  </section>
    <?php
        }
      }
    }
    ?>


    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo4'] !== ""){

      ?>
  <section class="descripcion-articulo2 container">
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen4'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo4'] ?> </h2>
      <h4> <?php echo $row['etiqueta4'] ?> </h4>
      <p> <?php echo $row['descripcion4'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['maps4'] ?>" target="_blank"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a><li><i class="fas fa-map-marker-alt icon"></i><?php echo $row['direccion4'] ?></li></a>
        <a href="<?php echo $row['extra_link4'] ?>" target="_blank"><li><i class="fas fa-link icon"></i>VER LINK DE INTERÉS</li></a>
      </ul>
    </div>
  </section>
    <?php
        }
      }
    }
    ?>


    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo5'] !== ""){

      ?>
  <section class="descripcion-articulo container">
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen5'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo5'] ?> </h2>
      <h4> <?php echo $row['etiqueta5'] ?> </h4>
      <p> <?php echo $row['descripcion5'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['maps5'] ?>" target="_blank"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a><li><i class="fas fa-map-marker-alt icon"></i><?php echo $row['direccion5'] ?></li></a>
        <a href="<?php echo $row['extra_link5'] ?>" target="_blank"><li><i class="fas fa-link icon"></i>VER LINK DE INTERÉS</li></a>
      </ul>
    </div>
  </section>
    <?php
        }
      }
    }
    ?>


    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo6'] !== ""){

      ?>
  <section class="descripcion-articulo2 container">
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen6'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo6'] ?> </h2>
      <h4> <?php echo $row['etiqueta6'] ?> </h4>
      <p> <?php echo $row['descripcion6'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['maps6'] ?>" target="_blank"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a><li><i class="fas fa-map-marker-alt icon"></i><?php echo $row['direccion6'] ?></li></a>
        <a href="<?php echo $row['extra_link6'] ?>" target="_blank"><li><i class="fas fa-link icon"></i>VER LINK DE INTERÉS</li></a>
      </ul>
    </div>
  </section>
    <?php
        }
      }
    }
    ?>


    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo7'] !== ""){

      ?>
  <section class="descripcion-articulo container">
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen7'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo7'] ?> </h2>
      <h4> <?php echo $row['etiqueta7'] ?> </h4>
      <p> <?php echo $row['descripcion7'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['maps7'] ?>" target="_blank"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a><li><i class="fas fa-map-marker-alt icon"></i><?php echo $row['direccion7'] ?></li></a>
        <a href="<?php echo $row['extra_link7'] ?>" target="_blank"><li><i class="fas fa-link icon"></i>VER LINK DE INTERÉS</li></a>
      </ul>
    </div>
  </section>
    <?php
        }
      }
    }
    ?>


    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo8'] !== ""){

      ?>
  <section class="descripcion-articulo2 container">
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen8'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo8'] ?> </h2>
      <h4> <?php echo $row['etiqueta8'] ?> </h4>
      <p> <?php echo $row['descripcion8'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['maps8'] ?>" target="_blank"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a><li><i class="fas fa-map-marker-alt icon"></i><?php echo $row['direccion8'] ?></li></a>
        <a href="<?php echo $row['extra_link8'] ?>" target="_blank"><li><i class="fas fa-link icon"></i>VER LINK DE INTERÉS</li></a>
      </ul>
    </div>
  </section>
    <?php
        }
      }
    }
    ?>


    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo9'] !== ""){

      ?>
  <section class="descripcion-articulo container">
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen9'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo9'] ?> </h2>
      <h4> <?php echo $row['etiqueta9'] ?> </h4>
      <p> <?php echo $row['descripcion9'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['maps9'] ?>" target="_blank"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a><li><i class="fas fa-map-marker-alt icon"></i><?php echo $row['direccion9'] ?></li></a>
        <a href="<?php echo $row['extra_link9'] ?>" target="_blank"><li><i class="fas fa-link icon"></i>VER LINK DE INTERÉS</li></a>
      </ul>
    </div>
  </section>
    <?php
        }
      }
    }
    ?>


    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo10'] !== ""){

      ?>
  <section class="descripcion-articulo2 container">
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen10'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo10'] ?> </h2>
      <h4> <?php echo $row['etiqueta10'] ?> </h4>
      <p> <?php echo $row['descripcion10'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['maps10'] ?>" target="_blank"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a><li><i class="fas fa-map-marker-alt icon"></i><?php echo $row['direccion10'] ?></li></a>
        <a href="<?php echo $row['extra_link10'] ?>" target="_blank"><li><i class="fas fa-link icon"></i>VER LINK DE INTERÉS</li></a>
      </ul>
    </div>
  </section>
    <?php
        }
      }
    }
    ?>




    <section class="caja-comentario">

      <form class="" action="logic.php" method="post">
        <h1>DEJA UN COMENTARIO:</h1>
        <div class="datos">
          <textarea required rows="10" placeholder="COMENTARIO" name="comentarioContenido" maxlength="350"></textarea>
          <input required type="text" placeholder="NOMBRE" name="comentarioNombre">
          <input required type="email" placeholder="EMAIL" name="comentarioEmail">
          <input type="hidden"  name="id_articulo" value="<?php echo $_GET['id_articulo_select'] ?>">
        </div>
        <div class="datos-button">
          <button type="submit" name="publicar_comentario">PUBLICAR</button>
        </div>

      </form>

    </section>


    <section class="caja-comentario">
      <h1>LO QUE OPINAN:</h1>
      <?php
        $id_articulo_select = $_GET['id_articulo_select'];

        $query = "SELECT * FROM comentarios WHERE id_articulo = $id_articulo_select";
        $query_run = mysqli_query($conexion, $query);
        $query_check = mysqli_num_rows($query_run);

        if($query_check > 0){
          while($row = mysqli_fetch_assoc($query_run)) {

        ?>
      <div class="lista-comentarios">
        <h3><?php echo $row["nombre"] ?></h3>
        <p><?php echo $row["contenido"] ?></p>
        <hr>
      </div>
      <?php
          }
        }
      ?>
    </section>






  <section class="slide-articulos">
    <ul id="autoWidth" class="cs-hidden">
      <?php
        $id_categoria_select = $_GET['id_categoria_select'];
        $id_articulo_select = $_GET['id_articulo_select'];

        $query = "SELECT * FROM articulos WHERE id_categoria = $id_categoria_select AND id_articulo != $id_articulo_select";
        $query_run = mysqli_query($conexion, $query);
        $query_check = mysqli_num_rows($query_run);

        if($query_check > 0) {
          while($row = mysqli_fetch_assoc($query_run)) {
      ?>
      <li class="item-a">
        <div class="box">
          <img src=" <?php echo $row['imagen'] ?> ">
          <div class="box-texto">
            <h3><?php echo substr($row['nombre_articulo'],0,55); ?>...</h3>
            <p> <?php echo substr($row['titulo'],0,180) ?>... </p>
            <a type="button" href="vista-articulo.php?id_articulo_select=<?php echo $row['id_articulo'] ?>&id_categoria_select=<?php echo $row['id_categoria'] ?>">LEER MÁS</a>
          </div>
        </div>
      </li>

      <?php
          }
        }
      ?>
    </ul>
  </section>

<?php include("includes/footer.php") ?>
