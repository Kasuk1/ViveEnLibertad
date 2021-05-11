<?php include("includes/header.php") ?>

<title>Gastronomía</title>

    <section class="categories">
      <h2 class="categ-titulo">CATEGORÍAS</h2>
      <div class="border-titulo"></div>
      <ul class="categ-icon">
        <a href="urbano.php"><li><img src="images/urbano-white.png" />URBANO</li></a>
        <a href="cultura.php"><li><img src="images/cultura-white.png" />CULTURA</li></a>
        <a class="active" href="gastronomia.php"><li><img src="images/gastronomia-white.png" />GASTRONOMÍA</li></a>
        <a href="aventura.php"><li><img src="images/aventura-white.png" />AVENTURA</li></a>
      </ul>

      <div class="burger">
        <div class="line1">▼</div>
      </div>
    </section>

    <section class="articulos2 container">
      <?php
        $query = "SELECT * FROM articulos WHERE id_categoria = 3";
        $query_run = mysqli_query($conexion, $query);
        $query_check = mysqli_num_rows($query_run);

        if($query_check > 0) {
          while($row = mysqli_fetch_assoc($query_run)) {
      ?>

      <div class="articulo2">
        <img src=" <?php echo $row['imagen'] ?> ">
        <div class="articulo2-text">
          <h4> <?php echo substr($row['nombre_articulo'],0,70); ?>...</h4>
          <p> <?php echo substr($row['titulo'],0,100); ?>... </p>
          <a type="button" href="vista-articulo.php?id_articulo_select=<?php echo $row['id_articulo'] ?>&id_categoria_select=<?php echo $row['id_categoria'] ?>">LEER MÁS</a>
        </div>
      </div>

      <?php
          }
        }
      ?>

    </section>

<?php include("includes/footer.php") ?>
