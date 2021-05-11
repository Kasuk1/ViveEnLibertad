<?php
require("connect.php");

if(isset($_POST["query"])) {
  $articuloSeleccionado = $_POST["query"];
  $query = "SELECT * FROM articulos WHERE nombre_articulo LIKE '%$articuloSeleccionado%'";
  $query_run = mysqli_query($conexion, $query);

  $query_check = mysqli_num_rows($query_run);

  if($query_check > 0) {
    while($row = mysqli_fetch_assoc($query_run)){

      echo "<li> <a href='vista-articulo.php?id_articulo_select=" .$row['id_articulo']. "&id_categoria_select=" .$row['id_categoria']. "'>" .$row['nombre_articulo']. "</a> </li> <hr>";
    }
  } else {
    echo "Ningún artículo similar";
  }
}

if(isset($_POST['publicar_comentario'])){
  $idArticulo = $_POST['id_articulo'];
  $comentarioNombre = $_POST['comentarioNombre'];
  $comentarioEmail = $_POST['comentarioEmail'];
  $comentarioContenido = $_POST['comentarioContenido'];

  $query = "INSERT INTO comentarios (id_articulo,
                                    nombre,
                                    email,
                                    contenido)
                   VALUES ('$idArticulo',
                          '$comentarioNombre',
                          '$comentarioEmail',
                          '$comentarioContenido')";

  $query_run = mysqli_query($conexion, $query);

  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Su comentario ha sido registrado. Muchas gracias! :) "); window.location = "index.php"; </script>';
  }
  else
  {
    echo '<script type="text/javascript"> alert("Su comentario no pudo ser registrado. :( ");</script>';
  }

}

?>
