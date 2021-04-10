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


    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">EDITAR INFORMACIÓN DE ARTÍCULO</h6>
            </div>

            <div class="card-body">


                <?php

                if(isset($_POST['edit_btn'])){
                    $id_articulo = $_POST['edit_id'];


                    $query = "SELECT a.id_articulo, a.id_categoria, c.nombre_categoria, a.nombre_articulo, a.titulo,
                                      a.desc_subtitulo1, a.etiqueta1, a.descripcion1,
                                      a.desc_subtitulo2, a.etiqueta2, a.descripcion2,
                                      a.desc_subtitulo3, a.etiqueta3, a.descripcion3,
                                      a.desc_subtitulo4, a.etiqueta4, a.descripcion4,
                                      a.desc_subtitulo5, a.etiqueta5, a.descripcion5,
                                      a.desc_subtitulo6, a.etiqueta6, a.descripcion6,
                                      a.desc_subtitulo7, a.etiqueta7, a.descripcion7,
                                      a.desc_subtitulo8, a.etiqueta8, a.descripcion8,
                                      a.desc_subtitulo9, a.etiqueta9, a.descripcion9,
                                      a.desc_subtitulo10, a.etiqueta10, a.descripcion10,
                                      a.imagen, a.google_maps
                    FROM articulos a INNER JOIN categorias c on a.id_categoria = c.id_categoria WHERE a.id_articulo = $id_articulo
                    ORDER BY a.id_articulo;";
                    $query_run = mysqli_query($conexion, $query);

                    foreach($query_run as $row){
                    ?>

                    <form action="articulo_code.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id_articulo']?>">

                        <div class="input-group">
                          <div class="form-group col-md-8">
                              <label class="text-primary font-weight-bold"> Nombre de Artículo </label>
                              <textarea required type="text" name="edit_nombre" rows="3" class="form-control text-justify" placeholder="Título de artículo"><?php echo $row['nombre_articulo'] ?></textarea>
                          </div>

                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Año</label>
                            <select required class="form-select my-1 mr-sm-2" name="edit_categoria">
                              <option value="<?php echo $row['id_categoria'] ?>"><?php echo $row['nombre_categoria'] ?></option>
                              <option value="1">Urbano</option>
                              <option value="2">Cultura</option>
                              <option value="3">Gastronomía</option>
                              <option value="4">Aventura</option>
                            </select>
                          </div>
                        </div>



                        <div class="form-group">
                          <label class="text-primary font-weight-bold">Título de Artículo</label>
                            <textarea required type="text" name="edit_titulo" rows="3" class="form-control text-justify" placeholder="Título de artículo"><?php echo $row['titulo'] ?></textarea>
                        </div>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 1</label>
                            <textarea required type="text" name="edit_subtitulo1" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo1'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 1.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 1</label>
                            <input required type="text" name="edit_etiqueta1" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta1'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 1</label>
                            <textarea required type="text" name="edit_descripcion1" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion1'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 1.</small>
                          </div>
                        </div>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 2</label>
                            <textarea required type="text" name="edit_subtitulo2" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo2'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 2.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 2</label>
                            <input required type="text" name="edit_etiqueta2" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta2'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 2</label>
                            <textarea required type="text" name="edit_descripcion2" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion2'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 2.</small>
                          </div>
                        </div>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 3</label>
                            <textarea required type="text" name="edit_subtitulo3" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo3'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 3.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 3</label>
                            <input required type="text" name="edit_etiqueta3" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta3'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 3</label>
                            <textarea required type="text" name="edit_descripcion3" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion3'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 3.</small>
                          </div>
                        </div>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 4</label>
                            <textarea required type="text" name="edit_subtitulo4" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo4'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 4.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 4</label>
                            <input required type="text" name="edit_etiqueta4" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta4'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 4</label>
                            <textarea required type="text" name="edit_descripcion4" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion4'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 4.</small>
                          </div>
                        </div>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 5</label>
                            <textarea required type="text" name="edit_subtitulo5" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo5'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 5.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 5</label>
                            <input required type="text" name="edit_etiqueta5" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta5'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 5</label>
                            <textarea required type="text" name="edit_descripcion5" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion5'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 5.</small>
                          </div>
                        </div>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 6</label>
                            <textarea required type="text" name="edit_subtitulo6" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo6'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 6.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 6</label>
                            <input required type="text" name="edit_etiqueta6" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta6'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 6</label>
                            <textarea required type="text" name="edit_descripcion6" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion6'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 6.</small>
                          </div>
                        </div>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 7</label>
                            <textarea required type="text" name="edit_subtitulo7" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo7'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 7.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 7</label>
                            <input required type="text" name="edit_etiqueta7" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta7'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 7</label>
                            <textarea required type="text" name="edit_descripcion7" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion7'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 7.</small>
                          </div>
                        </div>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 8</label>
                            <textarea required type="text" name="edit_subtitulo8" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo8'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 8.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 8</label>
                            <input required type="text" name="edit_etiqueta8" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta8'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 8</label>
                            <textarea required type="text" name="edit_descripcion8" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion8'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 8.</small>
                          </div>
                        </div>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 9</label>
                            <textarea required type="text" name="edit_subtitulo9" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo9'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 9.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 9</label>
                            <input required type="text" name="edit_etiqueta9" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta9'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 9</label>
                            <textarea required type="text" name="edit_descripcion9" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion9'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 9.</small>
                          </div>
                        </div>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 10</label>
                            <textarea required type="text" name="edit_subtitulo10" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo10'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 10.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 10</label>
                            <input required type="text" name="edit_etiqueta10" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta10'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 10</label>
                            <textarea required type="text" name="edit_descripcion10" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion10'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 10.</small>
                          </div>
                        </div>


                      <div class="form-group">
                        <label class="text-primary font-weight-bold">Dirección</label>
                        <textarea required type="text" name="edit_google_maps" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['google_maps'] ?></textarea>
                        <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato suele ser así: 28 de Julio 500, Cascas 13781</small>
                      </div>

                        <div class="form-group">
                            <label class="text-primary font-weight-bold">Subir Imagen</label>
                            <input required type="file" name="data_edit_imagen" id="data_edit_imagen" class="form-control">
                            <small class="form-text text-muted">Tendra que ingresar el nuevo o el mismo archivo para editar artículo y recuerde, solo puede subir archivos con extensión .jpg con un máximo de 25MB.</small>
                        </div>

                        <div class=" form-group custom-control custom-switch">
                            <input required type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label text-danger" for="customSwitch1">Deslize el control si está seguro de editar</label>
                        </div>

                        <div class="form-group">
                            <a href="gestion-articulos.php" class="btn btn-danger">Cancelar</a>
                            <button type="submit" name="updateArticulobtn" class="btn btn-primary">Actualizar</button>
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
