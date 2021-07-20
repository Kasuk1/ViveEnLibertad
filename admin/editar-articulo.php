<?php
include('../connect.php');
require("session-check.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Artículo</title>
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
                                      a.desc_subtitulo1, a.etiqueta1, a.descripcion1, a.imagen1, a.maps1, a.direccion1, a.extra_link1,
                                      a.desc_subtitulo2, a.etiqueta2, a.descripcion2, a.imagen2, a.maps2, a.direccion2, a.extra_link2,
                                      a.desc_subtitulo3, a.etiqueta3, a.descripcion3, a.imagen3, a.maps3, a.direccion3, a.extra_link3,
                                      a.desc_subtitulo4, a.etiqueta4, a.descripcion4, a.imagen4, a.maps4, a.direccion4, a.extra_link4,
                                      a.desc_subtitulo5, a.etiqueta5, a.descripcion5, a.imagen5, a.maps5, a.direccion5, a.extra_link5,
                                      a.desc_subtitulo6, a.etiqueta6, a.descripcion6, a.imagen6, a.maps6, a.direccion6, a.extra_link6,
                                      a.desc_subtitulo7, a.etiqueta7, a.descripcion7, a.imagen7, a.maps7, a.direccion7, a.extra_link7,
                                      a.desc_subtitulo8, a.etiqueta8, a.descripcion8, a.imagen8, a.maps8, a.direccion8, a.extra_link8,
                                      a.desc_subtitulo9, a.etiqueta9, a.descripcion9, a.imagen9, a.maps9, a.direccion9, a.extra_link9,
                                      a.desc_subtitulo10, a.etiqueta10, a.descripcion10, a.imagen10, a.maps10, a.direccion10, a.extra_link10,
                                      a.imagen
                    FROM articulos a INNER JOIN categorias c on a.id_categoria = c.id_categoria WHERE a.id_articulo = $id_articulo
                    ORDER BY a.id_articulo;";
                    $query_run = mysqli_query($conexion, $query);

                    foreach($query_run as $row){
                    ?>

                    <form action="articulo_code.php" method="POST" enctype="multipart/form-data">
                      <div class="modal-header">
                        <h5 class="text-primary col-md-2">Datos de presentación</h5>
                        <p class="">Antes de empezar a editar los datos del artículo,
                          se recomienda tenerlos anotados en otra herramienta editora de texto y luego ir
                          copiando para evitar problemas futuros.</p>
                      </div>

                        <hr style="background-color: #ffff">

                        <input type="hidden" name="edit_id" value="<?php echo $row['id_articulo']?>">

                        <div class="input-group">
                          <div class="form-group col-md-8">
                              <label class="text-primary font-weight-bold"> Nombre de Artículo </label>
                              <textarea required type="text" name="edit_nombre" rows="3" class="form-control text-justify" placeholder="Nombre de artículo"><?php echo $row['nombre_articulo'] ?></textarea>
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

                        <hr style="background-color: #ffff">

                        <div class="form-group">
                          <label class="text-primary font-weight-bold">Título de Artículo</label>
                            <textarea required type="text" name="edit_titulo" rows="3" class="form-control text-justify" placeholder="Título de artículo"><?php echo $row['titulo'] ?></textarea>
                        </div>

                        <hr style="background-color: #ffff">

                        <div class="form-group">
                            <label class="text-primary font-weight-bold">Subir Imagen Principal</label>
                            <input required type="file" name="data_edit_imagen" id="data_edit_imagen" class="form-control">
                            <small class="form-text text-muted">Tendra que ingresar la nueva o anterior imagen para editar el artículo y recuerde,
                                                                solo puede subir archivos con extensión .jpg con un máximo de 25MB. Además,
                                                                se recomienda sea de alta resolución y evitar el fondo de color claro intenso.</small>
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

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Imagen Sección 1</label>
                            <input required type="text" name="edit_imagen1" class="form-control text-justify" placeholder="Link" value="<?php echo $row['imagen1'] ?>">
                            <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 1.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección en Google Maps 1</label>
                            <textarea type="text" name="edit_maps1" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['maps1'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato es similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección Escrita 1</label>
                            <input type="text" name="edit_direccion1"class="form-control text-justify" placeholder="Dirección Escrita" value="<?php echo $row['direccion1'] ?>">
                            <small class="form-text text-muted">Debe ingresar una dirección válida y no mucho texto</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Interés 1</label>
                            <textarea  type="text" name="edit_extralink1" rows="3" class="form-control text-justify"><?php echo $row['extra_link1'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de una página web, de lo contrario no se desplegará correctamente en la página para el usuario.</small>
                          </div>
                        </div>

                        <hr>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 2</label>
                            <textarea type="text" name="edit_subtitulo2" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo2'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 2.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 2</label>
                            <input type="text" name="edit_etiqueta2" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta2'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 2</label>
                            <textarea type="text" name="edit_descripcion2" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion2'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 2.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Imagen Sección 2</label>
                            <input type="text" name="edit_imagen2" class="form-control text-justify" placeholder="Link" value="<?php echo $row['imagen2'] ?>">
                            <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 2.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección en Google Maps 2</label>
                            <textarea type="text" name="edit_maps2" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['maps2'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato es similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección Escrita 2</label>
                            <input type="text" name="edit_direccion2"class="form-control text-justify" placeholder="Dirección Escrita" value="<?php echo $row['direccion2'] ?>">
                            <small class="form-text text-muted">Debe ingresar una dirección válida y no mucho texto</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Interés 2</label>
                            <textarea  type="text" name="edit_extralink2" rows="3" class="form-control text-justify"><?php echo $row['extra_link2'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de una página web, de lo contrario no se desplegará correctamente en la página para el usuario.</small>
                          </div>
                        </div>

                        <hr>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 3</label>
                            <textarea type="text" name="edit_subtitulo3" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo3'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 3.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 3</label>
                            <input type="text" name="edit_etiqueta3" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta3'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 3</label>
                            <textarea type="text" name="edit_descripcion3" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion3'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 3.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Imagen Sección 3</label>
                            <input type="text" name="edit_imagen3" class="form-control text-justify" placeholder="Link" value="<?php echo $row['imagen3'] ?>">
                            <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 3.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección en Google Maps 3</label>
                            <textarea type="text" name="edit_maps3" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['maps3'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato es similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección Escrita 3</label>
                            <input type="text" name="edit_direccion3"class="form-control text-justify" placeholder="Dirección Escrita" value="<?php echo $row['direccion3'] ?>">
                            <small class="form-text text-muted">Debe ingresar una dirección válida y no mucho texto</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Interés 3</label>
                            <textarea  type="text" name="edit_extralink3" rows="3" class="form-control text-justify"><?php echo $row['extra_link3'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de una página web, de lo contrario no se desplegará correctamente en la página para el usuario.</small>
                          </div>
                        </div>

                        <hr>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 4</label>
                            <textarea type="text" name="edit_subtitulo4" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo4'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 4.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 4</label>
                            <input type="text" name="edit_etiqueta4" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta4'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 4</label>
                            <textarea type="text" name="edit_descripcion4" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion4'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 4.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Imagen Sección 4</label>
                            <input type="text" name="edit_imagen4" class="form-control text-justify" placeholder="Link" value="<?php echo $row['imagen4'] ?>">
                            <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 4.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección en Google Maps 4</label>
                            <textarea type="text" name="edit_maps4" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['maps4'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato es similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección Escrita 4</label>
                            <input type="text" name="edit_direccion4"class="form-control text-justify" placeholder="Dirección Escrita" value="<?php echo $row['direccion4'] ?>">
                            <small class="form-text text-muted">Debe ingresar una dirección válida y no mucho texto</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Interés 4</label>
                            <textarea  type="text" name="edit_extralink4" rows="3" class="form-control text-justify"><?php echo $row['extra_link4'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de una página web, de lo contrario no se desplegará correctamente en la página para el usuario.</small>
                          </div>
                        </div>

                        <hr>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 5</label>
                            <textarea type="text" name="edit_subtitulo5" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo5'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 5.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 5</label>
                            <input type="text" name="edit_etiqueta5" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta5'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 5</label>
                            <textarea type="text" name="edit_descripcion5" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion5'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 5.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Imagen Sección 5</label>
                            <input type="text" name="edit_imagen5" class="form-control text-justify" placeholder="Link" value="<?php echo $row['imagen5'] ?>">
                            <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 5.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección en Google Maps 5</label>
                            <textarea type="text" name="edit_maps5" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['maps5'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato es similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección Escrita 5</label>
                            <input type="text" name="edit_direccion5"class="form-control text-justify" placeholder="Dirección Escrita" value="<?php echo $row['direccion5'] ?>">
                            <small class="form-text text-muted">Debe ingresar una dirección válida y no mucho texto</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Interés 5</label>
                            <textarea  type="text" name="edit_extralink5" rows="3" class="form-control text-justify"><?php echo $row['extra_link5'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de una página web, de lo contrario no se desplegará correctamente en la página para el usuario.</small>
                          </div>
                        </div>

                        <hr>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 6</label>
                            <textarea type="text" name="edit_subtitulo6" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo6'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 6.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 6</label>
                            <input type="text" name="edit_etiqueta6" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta6'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 6</label>
                            <textarea type="text" name="edit_descripcion6" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion6'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 6.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Imagen Sección 6</label>
                            <input type="text" name="edit_imagen6" class="form-control text-justify" placeholder="Link" value="<?php echo $row['imagen6'] ?>">
                            <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 6.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección en Google Maps 6</label>
                            <textarea type="text" name="edit_maps6" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['maps6'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato es similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección Escrita 6</label>
                            <input type="text" name="edit_direccion6"class="form-control text-justify" placeholder="Dirección Escrita" value="<?php echo $row['direccion6'] ?>">
                            <small class="form-text text-muted">Debe ingresar una dirección válida y no mucho texto</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Interés 6</label>
                            <textarea  type="text" name="edit_extralink6" rows="3" class="form-control text-justify"><?php echo $row['extra_link6'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de una página web, de lo contrario no se desplegará correctamente en la página para el usuario.</small>
                          </div>
                        </div>

                        <hr>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 7</label>
                            <textarea type="text" name="edit_subtitulo7" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo7'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 7.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 7</label>
                            <input type="text" name="edit_etiqueta7" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta7'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 7</label>
                            <textarea type="text" name="edit_descripcion7" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion7'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 7.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Imagen Sección 7</label>
                            <input type="text" name="edit_imagen7" class="form-control text-justify" placeholder="Link" value="<?php echo $row['imagen7'] ?>">
                            <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 7.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección en Google Maps 7</label>
                            <textarea type="text" name="edit_maps7" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['maps7'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato es similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección Escrita 7</label>
                            <input type="text" name="edit_direccion7"class="form-control text-justify" placeholder="Dirección Escrita" value="<?php echo $row['direccion7'] ?>">
                            <small class="form-text text-muted">Debe ingresar una dirección válida y no mucho texto</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Interés 7</label>
                            <textarea  type="text" name="edit_extralink7" rows="3" class="form-control text-justify"><?php echo $row['extra_link7'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de una página web, de lo contrario no se desplegará correctamente en la página para el usuario.</small>
                          </div>
                        </div>

                        <hr>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 8</label>
                            <textarea type="text" name="edit_subtitulo8" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo8'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 8.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 8</label>
                            <input type="text" name="edit_etiqueta8" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta8'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 8</label>
                            <textarea type="text" name="edit_descripcion8" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion8'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 8.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Imagen Sección 8</label>
                            <input type="text" name="edit_imagen8" class="form-control text-justify" placeholder="Link" value="<?php echo $row['imagen8'] ?>">
                            <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 8.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección en Google Maps 8</label>
                            <textarea type="text" name="edit_maps8" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['maps8'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato es similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección Escrita 8</label>
                            <input type="text" name="edit_direccion8"class="form-control text-justify" placeholder="Dirección Escrita" value="<?php echo $row['direccion8'] ?>">
                            <small class="form-text text-muted">Debe ingresar una dirección válida y no mucho texto</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Interés 8</label>
                            <textarea  type="text" name="edit_extralink8" rows="3" class="form-control text-justify"><?php echo $row['extra_link8'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de una página web, de lo contrario no se desplegará correctamente en la página para el usuario.</small>
                          </div>
                        </div>

                        <hr>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 9</label>
                            <textarea type="text" name="edit_subtitulo9" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo9'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 9.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 9</label>
                            <input type="text" name="edit_etiqueta9" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta9'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 9</label>
                            <textarea type="text" name="edit_descripcion9" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion9'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 9.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Imagen Sección 9</label>
                            <input type="text" name="edit_imagen9" class="form-control text-justify" placeholder="Link" value="<?php echo $row['imagen9'] ?>">
                            <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 9.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección en Google Maps 9</label>
                            <textarea type="text" name="edit_maps9" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['maps9'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato es similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección Escrita 9</label>
                            <input type="text" name="edit_direccion9"class="form-control text-justify" placeholder="Dirección Escrita" value="<?php echo $row['direccion9'] ?>">
                            <small class="form-text text-muted">Debe ingresar una dirección válida y no mucho texto</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Interés 9</label>
                            <textarea  type="text" name="edit_extralink9" rows="3" class="form-control text-justify"><?php echo $row['extra_link9'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de una página web, de lo contrario no se desplegará correctamente en la página para el usuario.</small>
                          </div>
                        </div>

                        <hr>

                        <div class="input-group">
                          <div class="form-group col-md-4">
                            <label class="text-primary font-weight-bold">Subtitulo 10</label>
                            <textarea type="text" name="edit_subtitulo10" rows="3" class="form-control text-justify" placeholder="Subtitulo"><?php echo $row['desc_subtitulo10'] ?></textarea>
                            <small class="form-text text-muted">Ingrese el subtitulo 10.</small>

                            <hr style="background-color:#ffff">
                            <label class="text-primary font-weight-bold">Etiquetas 10</label>
                            <input type="text" name="edit_etiqueta10" class="form-control text-justify" placeholder="Etiquetas" value="<?php echo $row['etiqueta10'] ?>">
                            <small class="form-text text-muted">Ingrese máximo 4 palabras como etiqueta.</small>
                          </div>

                          <div class="form-group col-md-8 ml-10">
                            <label class="text-primary font-weight-bold">Descripción 10</label>
                            <textarea type="text" name="edit_descripcion10" rows="15" class="form-control text-justify" placeholder="Descripción o Contenido"><?php echo $row['descripcion10'] ?></textarea>
                            <small class="form-text text-muted">Ingrese la descripción 10.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Imagen Sección 10</label>
                            <input type="text" name="edit_imagen10" class="form-control text-justify" placeholder="Link" value="<?php echo $row['imagen10'] ?>">
                            <small class="form-text text-muted">Ingrese el link URL de la imagen que se desglosará en la sección 10.</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección en Google Maps 10</label>
                            <textarea type="text" name="edit_maps10" rows="3" class="form-control text-justify" placeholder="Dirección en Google Maps"><?php echo $row['maps10'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de Google Maps, de lo contrario no se desplegará correctamente en la página para el usuario. El formato es similar a este: https://goo.gl/maps/tJDiJ9M2pbcmdGeG6</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Dirección Escrita 10</label>
                            <input type="text" name="edit_direccion10"class="form-control text-justify" placeholder="Dirección Escrita" value="<?php echo $row['direccion10'] ?>">
                            <small class="form-text text-muted">Debe ingresar una dirección válida y no mucho texto</small>
                          </div>

                          <div class="form-group col-md-12">
                            <label class="text-primary font-weight-bold">Link de Interés 10</label>
                            <textarea  type="text" name="edit_extralink10" rows="3" class="form-control text-justify"><?php echo $row['extra_link10'] ?></textarea>
                            <small class="form-text text-muted">Debe ingresar una dirección copiada directamente de una página web, de lo contrario no se desplegará correctamente en la página para el usuario.</small>
                          </div>
                        </div>

                        <hr>

                      <hr style="background-color: #ffff">

                        <div class=" form-group custom-control custom-switch">
                            <input required type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label text-danger" for="customSwitch1">¿Seguro de editar el artículo?</label>
                        </div>

                        <hr style="background-color: #ffff">

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
