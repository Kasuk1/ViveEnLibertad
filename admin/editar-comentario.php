<?php
include('../connect.php');
require("session-check.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Comentario</title>
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


    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">EDITAR INFORMACIÓN DE COMENTARIO</h6>
            </div>

            <div class="card-body">

                <?php

                if(isset($_POST['edit_btn'])){
                    $id_comentario = $_POST['edit_id'];


                    $query = "SELECT c.id_comentario, a.nombre_articulo, c.nombre, c.email, c.contenido
                              FROM comentarios c INNER JOIN articulos a ON c.id_articulo = a.id_articulo
                              WHERE id_comentario = $id_comentario";
                    $query_run = mysqli_query($conexion, $query);

                    foreach($query_run as $row){
                    ?>

                    <form action="articulo_code.php" method="POST" enctype="multipart/form-data">
                      <div class="modal-header">
                        <h5 class="text-primary col-md-2">Datos de presentación</h5>
                      </div>

                        <hr style="background-color: #ffff">

                        <input type="hidden" name="edit_id" value="<?php echo $row['id_comentario']?>">

                        <div class="input-group">
                          <div class="form-group col-md-6">
                            <label class="text-primary font-weight-bold"> Nombre de Usuario </label>
                            <textarea required type="text" name="edit_nombre_usuario" rows="3" class="form-control text-justify" placeholder="Nombre de Usuario"><?php echo $row['nombre'] ?></textarea>
                          </div>
                          <div class="form-group col-md-6">
                            <label class="text-primary font-weight-bold">E-mail</label>
                            <input type="email" name="edit_email" class="form-control text-justify" placeholder="E-mail" value="<?php echo $row['email'] ?>">
                          </div>
                        </div>

                        <hr style="background-color: #ffff">

                        <div class="form-group">
                          <label class="text-primary font-weight-bold">Nombre de Artículo</label>
                          <textarea required disabled type="text" rows="3" class="form-control text-justify" placeholder="Nombre de artículo"><?php echo $row['nombre_articulo'] ?></textarea>
                        </div>

                        <hr style="background-color: #ffff">


                      <div class="form-group">
                        <label class="text-primary font-weight-bold">Contenido del comentario</label>
                        <textarea required type="text" name="edit_comentario" rows="5" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['contenido'] ?></textarea>
                      </div>


                        <hr style="background-color: #ffff">

                        <div class="form-group">
                            <a href="gestion-comentarios.php" class="btn btn-danger">Cancelar</a>
                            <button type="submit" name="updateComentarioBtn" class="btn btn-primary">Actualizar</button>
                        </div>

                    </form>

                    <?php
                    }
                }
                    ?>

            </div>
        </div>
    </div>


    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
