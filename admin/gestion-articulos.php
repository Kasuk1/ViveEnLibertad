<?php include('../connect.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gestión de Artículos</title>
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

    <!-- Modal -->
<div class="modal fade" id="articuloagregarmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-primary font-weight-bold" id="exampleModalLabel">Registrar Artículo</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <form action="articulo_code.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="modal-header">
                <h5 class="text-primary col-md-2">Datos de presentación</h5>
                <p class="">Antes de empezar a llenar los datos del artículo,
                  se recomienda tenerlo anotado en otra herramienta editora de texto y luego ir
                  copiando para evitar problemas futuros.</p>
              </div>

              <hr style="background-color: #ffff">

                  <div class="input-group">
                    <div class="form-group col-md-8">
                      <label class="text-primary font-weight-bold">Nombre de Artículo</label>
                        <textarea required type="text" name="nombre-articulo" rows="3" class="form-control text-justify" placeholder="Nombre de artículo"></textarea>
                    </div>

                    <hr style="background-color: #ffff">

                      <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Categoría</label>
                            <select required class="form-select my-1 mr-sm-2" name="id-categoria">
                              <option value="1">Urbano</option>
                              <option value="2">Cultura</option>
                              <option value="3">Gastronomía</option>
                              <option value="4">Aventura</option>
                            </select>
                      </div>
                  </div>

                  <hr style="background-color: #ffff">

                    <div class="form-group">
                      <label class="text-primary font-weight-bold">Título de Artículo</label>
                        <textarea required type="text" name="titulo" rows="3" class="form-control text-justify" placeholder="Título de artículo"></textarea>
                    </div>

                    <hr style="background-color: #ffff">

                    <div class="form-group">
                      <label class="text-primary font-weight-bold">Subir Imagen Principal</label>
                      <input required type="file" name="data_imagen" id="data_imagen" class="form-control">
                      <small class="form-text text-muted">Porfavor, suba un archivo con un nombre único y no extenso para cada artículo.
                                                          Recuerde también, solo puede subir imágenes con extensión .jpg con un máximo de 25MB.
                                                          Además, se recomienda que sea de alta resolución y evitar el fondo de color claro intenso.</small>
                    </div>

                    <hr style="background-color: #ffff">

                    <div class="modal-header">
                      <h5 class="text-primary col-md-2">Datos de contenido</h5>
                      <p class="">Se puede agregar un máximo de 10 secciones con sus respectivas imágenes en URL. Recuerde que
                                  solo la sección 1 es obligatoria no dejarlo vacío al momento de registrar.</p>
                    </div>

                    <hr style="background-color: #ffff">

                    <div class="input-group">
                      <div class="form-group col-md-4">
                        <label class="text-primary font-weight-bold">Subtitulo 1</label>
                        <textarea required type="text" name="subtitulo1" rows="3" class="form-control text-justify" placeholder="Subtitulo 1"></textarea>
                        <small class="form-text text-muted">Ingrese el subtitulo 1.</small>

                        <hr style="background-color: #ffff">

                        <label class="text-primary font-weight-bold">Etiquetas 1</label>
                        <input required type="text" name="etiqueta1" class="form-control text-justify" placeholder="Etiquetas 1">
                        <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                      </div>

                      <div class="form-group col-md-8 ml-10">
                        <label class="text-primary font-weight-bold">Descripción 1</label>
                        <textarea required type="text" name="descripcion1" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"></textarea>
                        <small class="form-text text-muted">Ingrese la descripción 1.</small>
                      </div>

                      <div class="form-group col-md-12">
                        <label class="text-primary font-weight-bold">Link de Imagen Sección 1</label>
                        <input required type="text" name="imagen1" class="form-control text-justify" placeholder="Link">
                        <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 1.</small>
                      </div>
                    </div>

                    <hr>

                    <div class="input-group">
                      <div class="form-group col-md-4">
                        <label class="text-primary font-weight-bold">Subtitulo 2</label>
                        <textarea  type="text" name="subtitulo2" rows="3" class="form-control text-justify" placeholder="Subtitulo 2"></textarea>
                        <small class="form-text text-muted">Ingrese el subtitulo 2.</small>

                        <hr style="background-color: #ffff">

                        <label class="text-primary font-weight-bold">Etiquetas 2</label>
                        <input  type="text" name="etiqueta2" class="form-control text-justify" placeholder="Etiquetas 2">
                        <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                      </div>

                      <div class="form-group col-md-8 ml-10">
                        <label class="text-primary font-weight-bold">Descripción 2</label>
                        <textarea  type="text" name="descripcion2" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"></textarea>
                        <small class="form-text text-muted">Ingrese la descripción 2.</small>
                      </div>

                      <div class="form-group col-md-12">
                        <label class="text-primary font-weight-bold">Link de Imagen Sección 2</label>
                        <input type="text" name="imagen2" class="form-control text-justify" placeholder="Link">
                        <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 2.</small>
                      </div>
                    </div>

                    <hr>

                    <div class="input-group">
                      <div class="form-group col-md-4">
                        <label class="text-primary font-weight-bold">Subtitulo 3</label>
                        <textarea  type="text" name="subtitulo3" rows="3" class="form-control text-justify" placeholder="Subtitulo 3"></textarea>
                        <small class="form-text text-muted">Ingrese el subtitulo 3.</small>

                        <hr style="background-color: #ffff">

                        <label class="text-primary font-weight-bold">Etiquetas 3</label>
                        <input  type="text" name="etiqueta3" class="form-control text-justify" placeholder="Etiquetas 3">
                        <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                      </div>

                      <div class="form-group col-md-8 ml-10">
                        <label class="text-primary font-weight-bold">Descripción 3</label>
                        <textarea  type="text" name="descripcion3" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"></textarea>
                        <small class="form-text text-muted">Ingrese la descripción 3.</small>
                      </div>

                      <div class="form-group col-md-12">
                        <label class="text-primary font-weight-bold">Link de Imagen Sección 3</label>
                        <input type="text" name="imagen3" class="form-control text-justify" placeholder="Link">
                        <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 3.</small>
                      </div>
                    </div>

                    <hr>

                    <div class="input-group">
                      <div class="form-group col-md-4">
                        <label class="text-primary font-weight-bold">Subtitulo 4</label>
                        <textarea  type="text" name="subtitulo4" rows="3" class="form-control text-justify" placeholder="Subtitulo 4"></textarea>
                        <small class="form-text text-muted">Ingrese el subtitulo 4.</small>

                        <hr style="background-color: #ffff">

                        <label class="text-primary font-weight-bold">Etiquetas 4</label>
                        <input  type="text" name="etiqueta4" class="form-control text-justify" placeholder="Etiquetas 4">
                        <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                      </div>

                      <div class="form-group col-md-8 ml-10">
                        <label class="text-primary font-weight-bold">Descripción 4</label>
                        <textarea  type="text" name="descripcion4" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"></textarea>
                        <small class="form-text text-muted">Ingrese la descripción 4.</small>
                      </div>

                      <div class="form-group col-md-12">
                        <label class="text-primary font-weight-bold">Link de Imagen Sección 4</label>
                        <input type="text" name="imagen4" class="form-control text-justify" placeholder="Link">
                        <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 4.</small>
                      </div>
                    </div>

                    <hr>

                    <div class="input-group">
                      <div class="form-group col-md-4">
                        <label class="text-primary font-weight-bold">Subtitulo 5</label>
                        <textarea  type="text" name="subtitulo5" rows="3" class="form-control text-justify" placeholder="Subtitulo 5"></textarea>
                        <small class="form-text text-muted">Ingrese el subtitulo 5.</small>

                        <hr style="background-color: #ffff">

                        <label class="text-primary font-weight-bold">Etiquetas 5</label>
                        <input  type="text" name="etiqueta5" class="form-control text-justify" placeholder="Etiquetas 5">
                        <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                      </div>

                      <div class="form-group col-md-8 ml-10">
                        <label class="text-primary font-weight-bold">Descripción 5</label>
                        <textarea  type="text" name="descripcion5" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"></textarea>
                        <small class="form-text text-muted">Ingrese la descripción 5.</small>
                      </div>

                      <div class="form-group col-md-12">
                        <label class="text-primary font-weight-bold">Link de Imagen Sección 5</label>
                        <input type="text" name="imagen5" class="form-control text-justify" placeholder="Link">
                        <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 5.</small>
                      </div>
                    </div>

                    <hr>

                    <div class="input-group">
                      <div class="form-group col-md-4">
                        <label class="text-primary font-weight-bold">Subtitulo 6</label>
                        <textarea  type="text" name="subtitulo6" rows="3" class="form-control text-justify" placeholder="Subtitulo 6"></textarea>
                        <small class="form-text text-muted">Ingrese el subtitulo 6.</small>

                        <hr style="background-color: #ffff">

                        <label class="text-primary font-weight-bold">Etiquetas 6</label>
                        <input type="text" name="etiqueta6" class="form-control text-justify" placeholder="Etiquetas 6">
                        <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                      </div>

                      <div class="form-group col-md-8 ml-10">
                        <label class="text-primary font-weight-bold">Descripción 6</label>
                        <textarea  type="text" name="descripcion6" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"></textarea>
                        <small class="form-text text-muted">Ingrese la descripción 6.</small>
                      </div>

                      <div class="form-group col-md-12">
                        <label class="text-primary font-weight-bold">Link de Imagen Sección 6</label>
                        <input type="text" name="imagen6" class="form-control text-justify" placeholder="Link">
                        <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 6.</small>
                      </div>
                    </div>

                    <hr>

                    <div class="input-group">
                      <div class="form-group col-md-4">
                        <label class="text-primary font-weight-bold">Subtitulo 7</label>
                        <textarea  type="text" name="subtitulo7" rows="3" class="form-control text-justify" placeholder="Subtitulo 7"></textarea>
                        <small class="form-text text-muted">Ingrese el subtitulo 7.</small>

                        <hr style="background-color: #ffff">

                        <label class="text-primary font-weight-bold">Etiquetas 7</label>
                        <input type="text" name="etiqueta7" class="form-control text-justify" placeholder="Etiquetas 7">
                        <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                      </div>

                      <div class="form-group col-md-8 ml-10">
                        <label class="text-primary font-weight-bold">Descripción 7</label>
                        <textarea  type="text" name="descripcion7" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"></textarea>
                        <small class="form-text text-muted">Ingrese la descripción 7.</small>
                      </div>

                      <div class="form-group col-md-12">
                        <label class="text-primary font-weight-bold">Link de Imagen Sección 7</label>
                        <input type="text" name="imagen7" class="form-control text-justify" placeholder="Link">
                        <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 7.</small>
                      </div>
                    </div>

                    <hr>

                    <div class="input-group">
                      <div class="form-group col-md-4">
                        <label class="text-primary font-weight-bold">Subtitulo 8</label>
                        <textarea type="text" name="subtitulo8" rows="3" class="form-control text-justify" placeholder="Subtitulo 8"></textarea>
                        <small class="form-text text-muted">Ingrese el subtitulo 8.</small>

                        <hr style="background-color: #ffff">

                        <label class="text-primary font-weight-bold">Etiquetas 8</label>
                        <input  type="text" name="etiqueta8" class="form-control text-justify" placeholder="Etiquetas 8">
                        <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                      </div>

                      <div class="form-group col-md-8 ml-10">
                        <label class="text-primary font-weight-bold">Descripción 8</label>
                        <textarea  type="text" name="descripcion8" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"></textarea>
                        <small class="form-text text-muted">Ingrese la descripción 8.</small>
                      </div>

                      <div class="form-group col-md-12">
                        <label class="text-primary font-weight-bold">Link de Imagen Sección 8</label>
                        <input type="text" name="imagen8" class="form-control text-justify" placeholder="Link">
                        <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 8.</small>
                      </div>
                    </div>

                    <hr>

                    <div class="input-group">
                      <div class="form-group col-md-4">
                        <label class="text-primary font-weight-bold">Subtitulo 9</label>
                        <textarea  type="text" name="subtitulo9" rows="3" class="form-control text-justify" placeholder="Subtitulo 9"></textarea>
                        <small class="form-text text-muted">Ingrese el subtitulo 9.</small>

                        <hr style="background-color: #ffff">

                        <label class="text-primary font-weight-bold">Etiquetas 9</label>
                        <input type="text" name="etiqueta9" class="form-control text-justify" placeholder="Etiquetas 9">
                        <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                      </div>

                      <div class="form-group col-md-8 ml-10">
                        <label class="text-primary font-weight-bold">Descripción 9</label>
                        <textarea type="text" name="descripcion9" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"></textarea>
                        <small class="form-text text-muted">Ingrese la descripción 9.</small>
                      </div>

                      <div class="form-group col-md-12">
                        <label class="text-primary font-weight-bold">Link de Imagen Sección 9</label>
                        <input type="text" name="imagen9" class="form-control text-justify" placeholder="Link">
                        <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 9.</small>
                      </div>
                    </div>

                    <hr>

                    <div class="input-group">
                      <div class="form-group col-md-4">
                        <label class="text-primary font-weight-bold">Subtitulo 10</label>
                        <textarea type="text" name="subtitulo10" rows="3" class="form-control text-justify" placeholder="Subtitulo 10"></textarea>
                        <small class="form-text text-muted">Ingrese el subtitulo 10.</small>

                        <hr style="background-color: #ffff">

                        <label class="text-primary font-weight-bold">Etiquetas 10</label>
                        <input type="text" name="etiqueta10" class="form-control text-justify" placeholder="Etiquetas 10">
                        <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                      </div>

                      <div class="form-group col-md-8 ml-10">
                        <label class="text-primary font-weight-bold">Descripción 10</label>
                        <textarea type="text" name="descripcion10" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"></textarea>
                        <small class="form-text text-muted">Ingrese la descripción 10.</small>
                      </div>

                      <div class="form-group col-md-12">
                        <label class="text-primary font-weight-bold">Link de Imagen Sección 10</label>
                        <input type="text" name="imagen10" class="form-control text-justify" placeholder="Link">
                        <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 10.</small>
                      </div>
                    </div>

                    <hr>

                  <div class="form-group">
                    <label class="text-primary font-weight-bold">Dirección</label>
                    <textarea required type="text" name="google-maps" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps. El formato debe similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6"></textarea>
                    <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de la función compartir de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato es similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6</small>
                  </div>

                  <hr style="background-color: #ffff">

                  <div class="custom-control custom-switch">
                    <input required type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label text-danger" for="customSwitch1">¿Está seguro de registrar?, recuerde que puede editarlo en el futuro.</label>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" name="btnAgregarArticulo" value="Upload Image/Data" class="btn btn-primary">Registrar</button>
            </div>
        </form>

    </div>
  </div>
</div>



<div class="container">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">Gestión de Artículos
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#articuloagregarmodal"> <i class="fas fa-plus-square"></i> </button>
    </h4>
  </div>

  <div class="card-body">

    <div class="table-responsive">
        <?php

            $query = "SELECT id_articulo, c.nombre_categoria, a.nombre_articulo, a.titulo
            FROM articulos a INNER JOIN categorias c on a.id_categoria = c.id_categoria ORDER BY a.id_articulo;";
            $query_run = mysqli_query($conexion, $query);
        ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Categoría </th>
            <th> Nombre </th>
            <th> </th>
          </tr>
        </thead>
          <tfoot>
          <tr>
            <th> ID </th>
            <th> Categoría </th>
            <th> Nombre </th>
            <th> </th>
          </tr>
        </tfoot>
        <tbody>

            <?php
                if(mysqli_num_rows($query_run) > 0){
                    while($row = mysqli_fetch_assoc($query_run)){
                     ?>
                        <tr>
                        <td><?php echo $row['id_articulo'] ?></td>
                        <td class="text-justify"><?php echo $row['nombre_categoria'] ?></td>
                        <td class="text-justify"><?php echo $row['nombre_articulo'] ?></td>
                        <td>
                            <form action="editar-articulo.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id_articulo'] ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success"> <i class="fas fa-edit"></i></button>

                            </form>

                            <form action="articulo_code.php" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id_articulo']; ?>">
                                <button type="submit" name="deleteArticulobtn" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>
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
