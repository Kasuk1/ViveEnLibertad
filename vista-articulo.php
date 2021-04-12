<?php
require("connect.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Vista de Artículo</title>
  <link rel="icon" href="images/logo-color.png">
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
  <script src="js/JQuery3.3.1.js" charset="utf-8"></script>
  <script src="js/lightslider.js" charset="utf-8"></script>
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
      <button type="button" name="button">
        COMPARTIR <i class="fas fa-share-alt"></i>
      </button>
    </div>
    <?php
      }
    }
    ?>
  </section>

  <section class="descripcion-articulo container">
    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo1'] !== ""){

      ?>
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen1'] ?>"></img>

    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo1'] ?> </h2>
      <h4> <?php echo $row['etiqueta1'] ?> </h4>
      <p> <?php echo $row['descripcion1'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['google_maps'] ?>"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a href="#"><li><i class="fas fa-map-marker-alt icon"></i>DIRECCIÓN</li></a>
        <a href="#"><li><i class="far fa-calendar-alt icon"></i>HORARIO</li></a>
      </ul>
    </div>
    <?php
        }
      }
    }
    ?>
  </section>

  <section class="descripcion-articulo2 container">
    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo2'] !== ""){

      ?>
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen2'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo2'] ?> </h2>
      <h4> <?php echo $row['etiqueta2'] ?> </h4>
      <p> <?php echo $row['descripcion2'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['google_maps'] ?>"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a href="#"><li><i class="fas fa-map-marker-alt icon"></i>DIRECCIÓN</li></a>
        <a href="#"><li><i class="far fa-calendar-alt icon"></i>HORARIO</li></a>
      </ul>
    </div>
    <?php
        }
      }
    }
    ?>
  </section>

  <section class="descripcion-articulo container">
    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo3'] !== ""){

      ?>
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen3'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo3'] ?> </h2>
      <h4> <?php echo $row['etiqueta3'] ?> </h4>
      <p> <?php echo $row['descripcion3'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['google_maps'] ?>"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a href="#"><li><i class="fas fa-map-marker-alt icon"></i>DIRECCIÓN</li></a>
        <a href="#"><li><i class="far fa-calendar-alt icon"></i>HORARIO</li></a>
      </ul>
    </div>
    <?php
        }
      }
    }
    ?>
  </section>

  <section class="descripcion-articulo2 container">
    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo4'] !== ""){

      ?>
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen4'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo4'] ?> </h2>
      <h4> <?php echo $row['etiqueta4'] ?> </h4>
      <p> <?php echo $row['descripcion4'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['google_maps'] ?>"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a href="#"><li><i class="fas fa-map-marker-alt icon"></i>DIRECCIÓN</li></a>
        <a href="#"><li><i class="far fa-calendar-alt icon"></i>HORARIO</li></a>
      </ul>
    </div>
    <?php
        }
      }
    }
    ?>
  </section>

  <section class="descripcion-articulo container">
    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo5'] !== ""){

      ?>
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen5'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo5'] ?> </h2>
      <h4> <?php echo $row['etiqueta5'] ?> </h4>
      <p> <?php echo $row['descripcion5'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['google_maps'] ?>"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a href="#"><li><i class="fas fa-map-marker-alt icon"></i>DIRECCIÓN</li></a>
        <a href="#"><li><i class="far fa-calendar-alt icon"></i>HORARIO</li></a>
      </ul>
    </div>
    <?php
        }
      }
    }
    ?>
  </section>

  <section class="descripcion-articulo2 container">
    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo6'] !== ""){

      ?>
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen6'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo6'] ?> </h2>
      <h4> <?php echo $row['etiqueta6'] ?> </h4>
      <p> <?php echo $row['descripcion6'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['google_maps'] ?>"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a href="#"><li><i class="fas fa-map-marker-alt icon"></i>DIRECCIÓN</li></a>
        <a href="#"><li><i class="far fa-calendar-alt icon"></i>HORARIO</li></a>
      </ul>
    </div>
    <?php
        }
      }
    }
    ?>
  </section>

  <section class="descripcion-articulo container">
    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo7'] !== ""){

      ?>
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen7'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo7'] ?> </h2>
      <h4> <?php echo $row['etiqueta7'] ?> </h4>
      <p> <?php echo $row['descripcion7'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['google_maps'] ?>"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a href="#"><li><i class="fas fa-map-marker-alt icon"></i>DIRECCIÓN</li></a>
        <a href="#"><li><i class="far fa-calendar-alt icon"></i>HORARIO</li></a>
      </ul>
    </div>
    <?php
        }
      }
    }
    ?>
  </section>

  <section class="descripcion-articulo2 container">
    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo8'] !== ""){

      ?>
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen8'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo8'] ?> </h2>
      <h4> <?php echo $row['etiqueta8'] ?> </h4>
      <p> <?php echo $row['descripcion8'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['google_maps'] ?>"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a href="#"><li><i class="fas fa-map-marker-alt icon"></i>DIRECCIÓN</li></a>
        <a href="#"><li><i class="far fa-calendar-alt icon"></i>HORARIO</li></a>
      </ul>
    </div>
    <?php
        }
      }
    }
    ?>
  </section>

  <section class="descripcion-articulo container">
    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT * FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo9'] !== ""){

      ?>
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen9'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo9'] ?> </h2>
      <h4> <?php echo $row['etiqueta9'] ?> </h4>
      <p> <?php echo $row['descripcion9'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['google_maps'] ?>"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a href="#"><li><i class="fas fa-map-marker-alt icon"></i>DIRECCIÓN</li></a>
        <a href="#"><li><i class="far fa-calendar-alt icon"></i>HORARIO</li></a>
      </ul>
    </div>
    <?php
        }
      }
    }
    ?>
  </section>

  <section class="descripcion-articulo2 container">
    <?php
      $id_articulo_select = $_GET['id_articulo_select'];

      $query = "SELECT desc_subtitulo10, etiqueta10, descripcion10, imagen10 FROM articulos WHERE id_articulo = $id_articulo_select";
      $query_run = mysqli_query($conexion, $query);
      $query_check = mysqli_num_rows($query_run);

      if($query_check > 0){
        while($row = mysqli_fetch_assoc($query_run)) {
          if($row['desc_subtitulo10'] !== ""){


      ?>
    <div class="descripcion-imagenes">
      <img class="imagen-descripcion" src="<?php echo $row['imagen10'] ?>"></img>
    </div>
    <div class="descripcion-texto">
      <h2> <?php echo $row['desc_subtitulo10'] ?> </h2>
      <h4> <?php echo $row['etiqueta10'] ?> </h4>
      <p> <?php echo $row['descripcion10'] ?> </p>
      <button class="descripcion-imagenes-button" type="button" name="button">MÁS INFO</button>
      <ul class="mas-info">
        <a href="<?php echo $row['google_maps'] ?>"><li><i class="fas fa-external-link-alt icon"></i>ABRIR EN GOOGLE MAPS</li></a>
        <a href="#"><li><i class="fas fa-map-marker-alt icon"></i>DIRECCIÓN</li></a>
        <a href="#"><li><i class="far fa-calendar-alt icon"></i>HORARIO</li></a>
      </ul>
    </div>
    <?php
        }
      }
    }
    ?>
  </section>



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
      <?php
        $id_categoria_select = $_GET['id_categoria_select'];

        $query = "SELECT * FROM articulos WHERE id_categoria = $id_categoria_select";
        $query_run = mysqli_query($conexion, $query);
        $query_check = mysqli_num_rows($query_run);

        if($query_check > 0) {
          while($row = mysqli_fetch_assoc($query_run)) {
      ?>
      <li class="item-a">
        <div class="box">
          <img src=" <?php echo $row['imagen'] ?> ">
          <div class="box-texto">
            <h3> <?php echo $row['nombre_articulo'] ?> </h3>
            <p> <?php echo $row['titulo'] ?> </p>
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
