<?php
include('../connect.php');
require("session-check.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gestión de Comentarios</title>
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

    <div class="container">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Gestión de Comentarios</h4>
      </div>

      <div class="card-body">

        <div class="table-responsive">
            <?php

                $query = "SELECT id_comentario, nombre, contenido FROM comentarios ORDER BY id_comentario;";
                $query_run = mysqli_query($conexion, $query);
            ?>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Contenido</th>
                <th> </th>
              </tr>
            </thead>
              <tfoot>
              <tr>
                <th>ID</th>
                <th>Nombre de Visitante</th>
                <th>Contenido</th>
                <th> </th>
              </tr>
            </tfoot>
            <tbody>

                <?php
                    if(mysqli_num_rows($query_run) > 0){
                        while($row = mysqli_fetch_assoc($query_run)){
                         ?>
                            <tr>
                            <td><?php echo $row['id_comentario'] ?></td>
                            <td class="text-justify"><?php echo $row['nombre'] ?></td>
                            <td class="text-justify"><?php echo $row['contenido'] ?></td>
                            <td>
                                <form action="editar-comentario.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id_comentario'] ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success"> <i class="fas fa-edit"></i></button>

                                </form>

                                <form action="articulo_code.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id_comentario']; ?>">
                                    <button type="submit" name="deleteComentarioBtn" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>
                                </form>

                            </td>
                            </tr>
                        <?php
                        }
                    }
                    else{
                        echo "No record Found";
                    }
                ?>

            </tbody>
          </table>
        </div>

      </div>

    </div>

    </div>

  <script type="text/javascript" src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
