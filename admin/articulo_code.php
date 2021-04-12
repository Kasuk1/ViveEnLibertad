<?php
include('../connect.php');


if(isset($_POST['btnAgregarArticulo'])){
    $id_categoria = $_POST['id-categoria'];
    $nombre_articulo = $_POST['nombre-articulo'];
    $titulo = $_POST['titulo'];

    $subtitulo1 = $_POST['subtitulo1'];
    $etiqueta1 = $_POST['etiqueta1'];
    $descripcion1 = $_POST['descripcion1'];
    $imagen1 = $_POST['imagen1'];

    $subtitulo2 = $_POST['subtitulo2'];
    $etiqueta2 = $_POST['etiqueta2'];
    $descripcion2 = $_POST['descripcion2'];
    $imagen2 = $_POST['imagen2'];

    $subtitulo3 = $_POST['subtitulo3'];
    $etiqueta3 = $_POST['etiqueta3'];
    $descripcion3 = $_POST['descripcion3'];
    $imagen3 = $_POST['imagen3'];

    $subtitulo4 = $_POST['subtitulo4'];
    $etiqueta4 = $_POST['etiqueta4'];
    $descripcion4 = $_POST['descripcion4'];
    $imagen4 = $_POST['imagen4'];

    $subtitulo5 = $_POST['subtitulo5'];
    $etiqueta5 = $_POST['etiqueta5'];
    $descripcion5 = $_POST['descripcion5'];
    $imagen5 = $_POST['imagen5'];

    $subtitulo6 = $_POST['subtitulo6'];
    $etiqueta6 = $_POST['etiqueta6'];
    $descripcion6 = $_POST['descripcion6'];
    $imagen6 = $_POST['imagen6'];

    $subtitulo7 = $_POST['subtitulo7'];
    $etiqueta7 = $_POST['etiqueta7'];
    $descripcion7 = $_POST['descripcion7'];
    $imagen7 = $_POST['imagen7'];

    $subtitulo8 = $_POST['subtitulo8'];
    $etiqueta8 = $_POST['etiqueta8'];
    $descripcion8 = $_POST['descripcion8'];
    $imagen8 = $_POST['imagen8'];

    $subtitulo9 = $_POST['subtitulo9'];
    $etiqueta9 = $_POST['etiqueta9'];
    $descripcion9 = $_POST['descripcion9'];
    $imagen9 = $_POST['imagen9'];

    $subtitulo10 = $_POST['subtitulo10'];
    $etiqueta10 = $_POST['etiqueta10'];
    $descripcion10 = $_POST['descripcion10'];
    $imagen10 = $_POST['imagen10'];

    $google_maps = $_POST['google-maps'];

    $imagen_nombre = $_FILES['data_imagen']['name'];
    $destino = '../images/' . $imagen_nombre;
    $destinobd = 'images/' . $imagen_nombre;
    $imagen_extension = pathinfo($imagen_nombre,PATHINFO_EXTENSION);


    $imagen = $_FILES['data_imagen']['tmp_name'];
    $imagen_size = $_FILES['data_imagen']['size'];

    if(!in_array($imagen_extension,['jpg'])){
        echo '<script type="text/javascript"> alert("Solo se permite archivos con extension .jpg. Verifique."); window.location = "gestion-articulos.php";</script>';
    }elseif($_FILES['data_imagen']['size'] > 30388608){
      echo '<script type="text/javascript"> alert("Solo puede subir archivos de hasta 25MB."); window.location = "gestion-articulos.php";</script>';
    }else{

        if(move_uploaded_file($imagen,$destino)){
            $query = "INSERT
                    INTO
                        articulos
                            (id_categoria, nombre_articulo, titulo,
                              desc_subtitulo1, etiqueta1, descripcion1, imagen1,
                              desc_subtitulo2, etiqueta2, descripcion2, imagen2,
                              desc_subtitulo3, etiqueta3, descripcion3, imagen3,
                              desc_subtitulo4, etiqueta4, descripcion4, imagen4,
                              desc_subtitulo5, etiqueta5, descripcion5, imagen5,
                              desc_subtitulo6, etiqueta6, descripcion6, imagen6,
                              desc_subtitulo7, etiqueta7, descripcion7, imagen7,
                              desc_subtitulo8, etiqueta8, descripcion8, imagen8,
                              desc_subtitulo9, etiqueta9, descripcion9, imagen9,
                              desc_subtitulo10, etiqueta10, descripcion10, imagen10,
                              imagen, google_maps)
                    VALUES
                        ('$id_categoria', '$nombre_articulo', '$titulo',
                          '$subtitulo1', '$etiqueta1', '$descripcion1', '$imagen1',
                          '$subtitulo2', '$etiqueta2', '$descripcion2', '$imagen2',
                          '$subtitulo3', '$etiqueta3', '$descripcion3', '$imagen3',
                          '$subtitulo4', '$etiqueta4', '$descripcion4', '$imagen4',
                          '$subtitulo5', '$etiqueta5', '$descripcion5', '$imagen5',
                          '$subtitulo6', '$etiqueta6', '$descripcion6', '$imagen6',
                          '$subtitulo7', '$etiqueta7', '$descripcion7', '$imagen7',
                          '$subtitulo8', '$etiqueta8', '$descripcion8', '$imagen8',
                          '$subtitulo9', '$etiqueta9', '$descripcion9', '$imagen9',
                          '$subtitulo10', '$etiqueta10', '$descripcion10', '$imagen10',
                          '$destinobd', '$google_maps')";

            $query_run = mysqli_query($conexion, $query);

            if($query_run)
            {
              echo '<script type="text/javascript"> alert("El artículo ha sido registrado."); window.location = "gestion-articulos.php";</script>';
            }
            else
            {
              echo '<script type="text/javascript"> alert("El artículo no pudo ser registrado."); window.location = "gestion-articulos.php";</script>';
            }
        }
        else{
          echo '<script type="text/javascript"> alert("Directorio no encontrado."); window.location = "gestion-articulos.php";</script>';
        }

    }


}



if(isset($_POST['updateArticulobtn'])){
    $id_articulo = $_POST['edit_id'];
    $edit_nombre = $_POST['edit_nombre'];
    $edit_categoria = $_POST['edit_categoria'];
    $edit_titulo = $_POST['edit_titulo'];

    $edit_subtitulo1 = $_POST['edit_subtitulo1'];
    $edit_etiqueta1 = $_POST['edit_etiqueta1'];
    $edit_descripcion1 = $_POST['edit_descripcion1'];
    $edit_imagen1 = $_POST['edit_imagen1'];

    $edit_subtitulo2 = $_POST['edit_subtitulo2'];
    $edit_etiqueta2 = $_POST['edit_etiqueta2'];
    $edit_descripcion2 = $_POST['edit_descripcion2'];
    $edit_imagen2 = $_POST['edit_imagen2'];

    $edit_subtitulo3 = $_POST['edit_subtitulo3'];
    $edit_etiqueta3 = $_POST['edit_etiqueta3'];
    $edit_descripcion3 = $_POST['edit_descripcion3'];
    $edit_imagen3 = $_POST['edit_imagen3'];

    $edit_subtitulo4 = $_POST['edit_subtitulo4'];
    $edit_etiqueta4 = $_POST['edit_etiqueta4'];
    $edit_descripcion4 = $_POST['edit_descripcion4'];
    $edit_imagen4 = $_POST['edit_imagen4'];

    $edit_subtitulo5 = $_POST['edit_subtitulo5'];
    $edit_etiqueta5 = $_POST['edit_etiqueta5'];
    $edit_descripcion5 = $_POST['edit_descripcion5'];
    $edit_imagen5 = $_POST['edit_imagen5'];

    $edit_subtitulo6 = $_POST['edit_subtitulo6'];
    $edit_etiqueta6 = $_POST['edit_etiqueta6'];
    $edit_descripcion6 = $_POST['edit_descripcion6'];
    $edit_imagen6 = $_POST['edit_imagen6'];

    $edit_subtitulo7 = $_POST['edit_subtitulo7'];
    $edit_etiqueta7 = $_POST['edit_etiqueta7'];
    $edit_descripcion7 = $_POST['edit_descripcion7'];
    $edit_imagen7 = $_POST['edit_imagen7'];

    $edit_subtitulo8 = $_POST['edit_subtitulo8'];
    $edit_etiqueta8 = $_POST['edit_etiqueta8'];
    $edit_descripcion8 = $_POST['edit_descripcion8'];
    $edit_imagen8 = $_POST['edit_imagen8'];

    $edit_subtitulo9 = $_POST['edit_subtitulo9'];
    $edit_etiqueta9 = $_POST['edit_etiqueta9'];
    $edit_descripcion9 = $_POST['edit_descripcion9'];
    $edit_imagen9 = $_POST['edit_imagen9'];

    $edit_subtitulo10 = $_POST['edit_subtitulo10'];
    $edit_etiqueta10 = $_POST['edit_etiqueta10'];
    $edit_descripcion10 = $_POST['edit_descripcion10'];
    $edit_imagen10 = $_POST['edit_imagen10'];

    $edit_google_maps = $_POST['edit_google_maps'];

    $archivo_nombre_edit = $_FILES['data_edit_imagen']['name'];
    $destino_edit = '../images/' . $archivo_nombre_edit;
    $destino_edit_bd = 'images/' . $archivo_nombre_edit;
    $archivo_extension_edit = pathinfo($archivo_nombre_edit,PATHINFO_EXTENSION);


    $archivo_edit = $_FILES['data_edit_imagen']['tmp_name'];
    $archivo_size_edit = $_FILES['data_edit_imagen']['size'];


    if(!in_array($archivo_extension_edit,['jpg'])){
        echo '<script type="text/javascript"> alert("Solo se permite archivos con extension .jpg. Verifique."); window.location = "gestion-articulos.php";</script>';

    }elseif($_FILES['data_edit_imagen']['size'] > 30388608){
        echo '<script type="text/javascript"> alert("Solo puede subir archivos de hasta 25MB."); window.location = "gestion-articulos.php";</script>';
    }else{

        if(move_uploaded_file($archivo_edit,$destino_edit)){
            $query = "UPDATE articulos SET id_categoria='$edit_categoria', nombre_articulo= '$edit_nombre', titulo='$edit_titulo' ,
            desc_subtitulo1 ='$edit_subtitulo1', etiqueta1 ='$edit_etiqueta1', descripcion1 ='$edit_descripcion1', imagen1 = '$edit_imagen1',
            desc_subtitulo2 ='$edit_subtitulo2', etiqueta2 ='$edit_etiqueta2', descripcion2 ='$edit_descripcion2', imagen2 = '$edit_imagen2',
            desc_subtitulo3 ='$edit_subtitulo3', etiqueta3 ='$edit_etiqueta3', descripcion3 ='$edit_descripcion3', imagen3 = '$edit_imagen3',
            desc_subtitulo4 ='$edit_subtitulo4', etiqueta4 ='$edit_etiqueta4', descripcion4 ='$edit_descripcion4', imagen4 = '$edit_imagen4',
            desc_subtitulo5 ='$edit_subtitulo5', etiqueta5 ='$edit_etiqueta5', descripcion5 ='$edit_descripcion5', imagen5 = '$edit_imagen5',
            desc_subtitulo6 ='$edit_subtitulo6', etiqueta6 ='$edit_etiqueta6', descripcion6 ='$edit_descripcion6', imagen6 = '$edit_imagen6',
            desc_subtitulo7 ='$edit_subtitulo7', etiqueta7 ='$edit_etiqueta7', descripcion7 ='$edit_descripcion7', imagen7 = '$edit_imagen7',
            desc_subtitulo8 ='$edit_subtitulo8', etiqueta8 ='$edit_etiqueta8', descripcion8 ='$edit_descripcion8', imagen8 = '$edit_imagen8',
            desc_subtitulo9 ='$edit_subtitulo9', etiqueta9 ='$edit_etiqueta9', descripcion9 ='$edit_descripcion9', imagen9 = '$edit_imagen9',
            desc_subtitulo10 ='$edit_subtitulo10', etiqueta10 ='$edit_etiqueta10', descripcion10 ='$edit_descripcion10', imagen10 = '$edit_imagen10',
            imagen='$destino_edit_bd', google_maps='$edit_google_maps' WHERE id_articulo ='$id_articulo'";

            $query_run = mysqli_query($conexion, $query);

            if($query_run){
                echo '<script type="text/javascript"> alert("El artículo ha sido actualizado."); window.location = "gestion-articulos.php";</script>';
            }else{
                echo '<script type="text/javascript"> alert("El artículo no ha sido actualizado."); window.location = "gestion-articulos.php";</script>';
            }
        }
        else{
            echo '<script type="text/javascript"> alert("Directorio no encontrado."); window.location = "gestion-articulos.php";</script>';
        }

    }

}



if(isset($_POST['deleteArticulobtn'])){
    $id_articulo = $_POST['delete_id'];

    $query = "DELETE FROM articulos WHERE id_articulo='$id_articulo' ";
    $query_run = mysqli_query($conexion, $query);

    if($query_run){
        echo '<script type="text/javascript"> alert("El artículo ha sido eliminado."); window.location = "gestion-articulos.php";</script>';
    }else{
        echo '<script type="text/javascript"> alert("El artículo ha sido eliminado."); window.location = "gestion-articulos.php";</script>';
    }
}
