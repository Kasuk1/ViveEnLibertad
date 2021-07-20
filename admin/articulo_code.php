<?php
include('../connect.php');
require("session-check.php");


if(isset($_POST['btnAgregarArticulo'])){
    $id_categoria = $_POST['id-categoria'];
    $nombre_articulo = $_POST['nombre-articulo'];
    $titulo = $_POST['titulo'];

    $subtitulo1 = $_POST['subtitulo1'];
    $etiqueta1 = $_POST['etiqueta1'];
    $descripcion1 = $_POST['descripcion1'];
    $imagen1 = $_POST['imagen1'];
    $maps1 = $_POST['maps1'];
    $direccion1 = $_POST['direccion1'];
    $extralink1 = $_POST['extralink1'];

    $subtitulo2 = $_POST['subtitulo2'];
    $etiqueta2 = $_POST['etiqueta2'];
    $descripcion2 = $_POST['descripcion2'];
    $imagen2 = $_POST['imagen2'];
    $maps2 = $_POST['maps2'];
    $direccion2 = $_POST['direccion2'];
    $extralink2 = $_POST['extralink2'];

    $subtitulo3 = $_POST['subtitulo3'];
    $etiqueta3 = $_POST['etiqueta3'];
    $descripcion3 = $_POST['descripcion3'];
    $imagen3 = $_POST['imagen3'];
    $maps3 = $_POST['maps3'];
    $direccion3 = $_POST['direccion3'];
    $extralink3 = $_POST['extralink3'];

    $subtitulo4 = $_POST['subtitulo4'];
    $etiqueta4 = $_POST['etiqueta4'];
    $descripcion4 = $_POST['descripcion4'];
    $imagen4 = $_POST['imagen4'];
    $maps4 = $_POST['maps4'];
    $direccion4 = $_POST['direccion4'];
    $extralink4 = $_POST['extralink4'];

    $subtitulo5 = $_POST['subtitulo5'];
    $etiqueta5 = $_POST['etiqueta5'];
    $descripcion5 = $_POST['descripcion5'];
    $imagen5 = $_POST['imagen5'];
    $maps5 = $_POST['maps5'];
    $direccion5 = $_POST['direccion5'];
    $extralink5 = $_POST['extralink5'];

    $subtitulo6 = $_POST['subtitulo6'];
    $etiqueta6 = $_POST['etiqueta6'];
    $descripcion6 = $_POST['descripcion6'];
    $imagen6 = $_POST['imagen6'];
    $maps6 = $_POST['maps6'];
    $direccion6 = $_POST['direccion6'];
    $extralink6 = $_POST['extralink6'];

    $subtitulo7 = $_POST['subtitulo7'];
    $etiqueta7 = $_POST['etiqueta7'];
    $descripcion7 = $_POST['descripcion7'];
    $imagen7 = $_POST['imagen7'];
    $maps7 = $_POST['maps7'];
    $direccion7 = $_POST['direccion7'];
    $extralink7 = $_POST['extralink7'];

    $subtitulo8 = $_POST['subtitulo8'];
    $etiqueta8 = $_POST['etiqueta8'];
    $descripcion8 = $_POST['descripcion8'];
    $imagen8 = $_POST['imagen8'];
    $maps8 = $_POST['maps8'];
    $direccion8 = $_POST['direccion8'];
    $extralink8 = $_POST['extralink8'];

    $subtitulo9 = $_POST['subtitulo9'];
    $etiqueta9 = $_POST['etiqueta9'];
    $descripcion9 = $_POST['descripcion9'];
    $imagen9 = $_POST['imagen9'];
    $maps9 = $_POST['maps9'];
    $direccion9 = $_POST['direccion9'];
    $extralink9 = $_POST['extralink9'];

    $subtitulo10 = $_POST['subtitulo10'];
    $etiqueta10 = $_POST['etiqueta10'];
    $descripcion10 = $_POST['descripcion10'];
    $imagen10 = $_POST['imagen10'];
    $maps10 = $_POST['maps10'];
    $direccion10 = $_POST['direccion10'];
    $extralink10 = $_POST['extralink10'];

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
                              desc_subtitulo1, etiqueta1, descripcion1, imagen1, maps1, direccion1, extra_link1,
                              desc_subtitulo2, etiqueta2, descripcion2, imagen2, maps2, direccion2, extra_link2,
                              desc_subtitulo3, etiqueta3, descripcion3, imagen3, maps3, direccion3, extra_link3,
                              desc_subtitulo4, etiqueta4, descripcion4, imagen4, maps4, direccion4, extra_link4,
                              desc_subtitulo5, etiqueta5, descripcion5, imagen5, maps5, direccion5, extra_link5,
                              desc_subtitulo6, etiqueta6, descripcion6, imagen6, maps6, direccion6, extra_link6,
                              desc_subtitulo7, etiqueta7, descripcion7, imagen7, maps7, direccion7, extra_link7,
                              desc_subtitulo8, etiqueta8, descripcion8, imagen8, maps8, direccion8, extra_link8,
                              desc_subtitulo9, etiqueta9, descripcion9, imagen9, maps9, direccion9, extra_link9,
                              desc_subtitulo10, etiqueta10, descripcion10, imagen10, maps10, direccion10, extra_link10,
                              imagen)
                    VALUES
                        ('$id_categoria', '$nombre_articulo', '$titulo',
                          '$subtitulo1', '$etiqueta1', '$descripcion1', '$imagen1', '$maps1', '$direccion1', '$extralink1',
                          '$subtitulo2', '$etiqueta2', '$descripcion2', '$imagen2', '$maps2', '$direccion2', '$extralink2',
                          '$subtitulo3', '$etiqueta3', '$descripcion3', '$imagen3', '$maps3', '$direccion3', '$extralink3',
                          '$subtitulo4', '$etiqueta4', '$descripcion4', '$imagen4', '$maps4', '$direccion4', '$extralink4',
                          '$subtitulo5', '$etiqueta5', '$descripcion5', '$imagen5', '$maps5', '$direccion5', '$extralink5',
                          '$subtitulo6', '$etiqueta6', '$descripcion6', '$imagen6', '$maps6', '$direccion6', '$extralink6',
                          '$subtitulo7', '$etiqueta7', '$descripcion7', '$imagen7', '$maps7', '$direccion7', '$extralink7',
                          '$subtitulo8', '$etiqueta8', '$descripcion8', '$imagen8', '$maps8', '$direccion8', '$extralink8',
                          '$subtitulo9', '$etiqueta9', '$descripcion9', '$imagen9', '$maps9', '$direccion9', '$extralink9',
                          '$subtitulo10', '$etiqueta10', '$descripcion10', '$imagen10', '$maps10', '$direccion10', '$extralink10',
                          '$destinobd')";

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
    $edit_maps1 = $_POST['edit_maps1'];
    $edit_direccion1 = $_POST['edit_direccion1'];
    $edit_extralink1 = $_POST['edit_extralink1'];

    $edit_subtitulo2 = $_POST['edit_subtitulo2'];
    $edit_etiqueta2 = $_POST['edit_etiqueta2'];
    $edit_descripcion2 = $_POST['edit_descripcion2'];
    $edit_imagen2 = $_POST['edit_imagen2'];
    $edit_maps2 = $_POST['edit_maps2'];
    $edit_direccion2 = $_POST['edit_direccion2'];
    $edit_extralink2 = $_POST['edit_extralink2'];

    $edit_subtitulo3 = $_POST['edit_subtitulo3'];
    $edit_etiqueta3 = $_POST['edit_etiqueta3'];
    $edit_descripcion3 = $_POST['edit_descripcion3'];
    $edit_imagen3 = $_POST['edit_imagen3'];
    $edit_maps3 = $_POST['edit_maps3'];
    $edit_direccion3 = $_POST['edit_direccion3'];
    $edit_extralink3 = $_POST['edit_extralink3'];

    $edit_subtitulo4 = $_POST['edit_subtitulo4'];
    $edit_etiqueta4 = $_POST['edit_etiqueta4'];
    $edit_descripcion4 = $_POST['edit_descripcion4'];
    $edit_imagen4 = $_POST['edit_imagen4'];
    $edit_maps4 = $_POST['edit_maps4'];
    $edit_direccion4 = $_POST['edit_direccion4'];
    $edit_extralink4 = $_POST['edit_extralink4'];

    $edit_subtitulo5 = $_POST['edit_subtitulo5'];
    $edit_etiqueta5 = $_POST['edit_etiqueta5'];
    $edit_descripcion5 = $_POST['edit_descripcion5'];
    $edit_imagen5 = $_POST['edit_imagen5'];
    $edit_maps5 = $_POST['edit_maps5'];
    $edit_direccion5 = $_POST['edit_direccion5'];
    $edit_extralink5 = $_POST['edit_extralink5'];

    $edit_subtitulo6 = $_POST['edit_subtitulo6'];
    $edit_etiqueta6 = $_POST['edit_etiqueta6'];
    $edit_descripcion6 = $_POST['edit_descripcion6'];
    $edit_imagen6 = $_POST['edit_imagen6'];
    $edit_maps6 = $_POST['edit_maps6'];
    $edit_direccion6 = $_POST['edit_direccion6'];
    $edit_extralink6 = $_POST['edit_extralink6'];

    $edit_subtitulo7 = $_POST['edit_subtitulo7'];
    $edit_etiqueta7 = $_POST['edit_etiqueta7'];
    $edit_descripcion7 = $_POST['edit_descripcion7'];
    $edit_imagen7 = $_POST['edit_imagen7'];
    $edit_maps7 = $_POST['edit_maps7'];
    $edit_direccion7 = $_POST['edit_direccion7'];
    $edit_extralink7 = $_POST['edit_extralink7'];

    $edit_subtitulo8 = $_POST['edit_subtitulo8'];
    $edit_etiqueta8 = $_POST['edit_etiqueta8'];
    $edit_descripcion8 = $_POST['edit_descripcion8'];
    $edit_imagen8 = $_POST['edit_imagen8'];
    $edit_maps8 = $_POST['edit_maps8'];
    $edit_direccion8 = $_POST['edit_direccion8'];
    $edit_extralink8 = $_POST['edit_extralink8'];

    $edit_subtitulo9 = $_POST['edit_subtitulo9'];
    $edit_etiqueta9 = $_POST['edit_etiqueta9'];
    $edit_descripcion9 = $_POST['edit_descripcion9'];
    $edit_imagen9 = $_POST['edit_imagen9'];
    $edit_maps9 = $_POST['edit_maps9'];
    $edit_direccion9 = $_POST['edit_direccion9'];
    $edit_extralink9 = $_POST['edit_extralink9'];

    $edit_subtitulo10 = $_POST['edit_subtitulo10'];
    $edit_etiqueta10 = $_POST['edit_etiqueta10'];
    $edit_descripcion10 = $_POST['edit_descripcion10'];
    $edit_imagen10 = $_POST['edit_imagen10'];
    $edit_maps10 = $_POST['edit_maps10'];
    $edit_direccion10 = $_POST['edit_direccion10'];
    $edit_extralink10 = $_POST['edit_extralink10'];

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
            desc_subtitulo1 ='$edit_subtitulo1', etiqueta1 ='$edit_etiqueta1', descripcion1 ='$edit_descripcion1', imagen1 = '$edit_imagen1', maps1 = '$edit_maps1', direccion1 = '$edit_direccion1', extra_link1 = '$edit_extralink1',
            desc_subtitulo2 ='$edit_subtitulo2', etiqueta2 ='$edit_etiqueta2', descripcion2 ='$edit_descripcion2', imagen2 = '$edit_imagen2', maps2 = '$edit_maps2', direccion2 = '$edit_direccion2', extra_link2 = '$edit_extralink2',
            desc_subtitulo3 ='$edit_subtitulo3', etiqueta3 ='$edit_etiqueta3', descripcion3 ='$edit_descripcion3', imagen3 = '$edit_imagen3', maps3 = '$edit_maps3', direccion3 = '$edit_direccion3', extra_link3 = '$edit_extralink3',
            desc_subtitulo4 ='$edit_subtitulo4', etiqueta4 ='$edit_etiqueta4', descripcion4 ='$edit_descripcion4', imagen4 = '$edit_imagen4', maps4 = '$edit_maps4', direccion4 = '$edit_direccion4', extra_link4 = '$edit_extralink4',
            desc_subtitulo5 ='$edit_subtitulo5', etiqueta5 ='$edit_etiqueta5', descripcion5 ='$edit_descripcion5', imagen5 = '$edit_imagen5', maps5 = '$edit_maps5', direccion5 = '$edit_direccion5', extra_link5 = '$edit_extralink5',
            desc_subtitulo6 ='$edit_subtitulo6', etiqueta6 ='$edit_etiqueta6', descripcion6 ='$edit_descripcion6', imagen6 = '$edit_imagen6', maps6 = '$edit_maps6', direccion6 = '$edit_direccion6', extra_link6 = '$edit_extralink6',
            desc_subtitulo7 ='$edit_subtitulo7', etiqueta7 ='$edit_etiqueta7', descripcion7 ='$edit_descripcion7', imagen7 = '$edit_imagen7', maps7 = '$edit_maps7', direccion7 = '$edit_direccion7', extra_link7 = '$edit_extralink7',
            desc_subtitulo8 ='$edit_subtitulo8', etiqueta8 ='$edit_etiqueta8', descripcion8 ='$edit_descripcion8', imagen8 = '$edit_imagen8', maps8 = '$edit_maps8', direccion8 = '$edit_direccion8', extra_link8 = '$edit_extralink8',
            desc_subtitulo9 ='$edit_subtitulo9', etiqueta9 ='$edit_etiqueta9', descripcion9 ='$edit_descripcion9', imagen9 = '$edit_imagen9', maps9 = '$edit_maps9', direccion9 = '$edit_direccion9', extra_link9 = '$edit_extralink9',
            desc_subtitulo10 ='$edit_subtitulo10', etiqueta10 ='$edit_etiqueta10', descripcion10 ='$edit_descripcion10', imagen10 = '$edit_imagen10', maps10 = '$edit_maps10', direccion10 = '$edit_direccion10', extra_link10 = '$edit_extralink10',
            imagen='$destino_edit_bd' WHERE id_articulo ='$id_articulo'";

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
        echo '<script type="text/javascript"> alert("El artículo no pudo ser eliminado."); window.location = "gestion-articulos.php";</script>';
    }
}


if(isset($_POST['updateComentarioBtn'])){
    $id_comentario = $_POST['edit_id'];
    $edit_nombre_usuario = $_POST['edit_nombre_usuario'];
    $edit_email = $_POST['edit_email'];
    $edit_comentario = $_POST['edit_comentario'];


    $query = "UPDATE comentarios SET nombre='$edit_nombre_usuario', email= '$edit_email', contenido='$edit_comentario'
                                  WHERE id_comentario ='$id_comentario'";

    $query_run = mysqli_query($conexion, $query);

    if($query_run){
        echo '<script type="text/javascript"> alert("El comentario ha sido actualizado."); window.location = "gestion-comentarios.php";</script>';
    }else{
        echo '<script type="text/javascript"> alert("El comentario no ha sido actualizado."); window.location = "gestion-comentarios.php";</script>';
    }




}



if(isset($_POST['deleteComentarioBtn'])){
    $id_comentario = $_POST['delete_id'];

    $query = "DELETE FROM comentarios WHERE id_comentario = '$id_comentario' ";
    $query_run = mysqli_query($conexion, $query);

    if($query_run){
        echo '<script type="text/javascript"> alert("El comentario ha sido eliminado."); window.location = "gestion-comentarios.php";</script>';
    }else{
        echo '<script type="text/javascript"> alert("El comentario no pudo ser eliminado."); window.location = "gestion-comentarios.php";</script>';
    }
}

?>
