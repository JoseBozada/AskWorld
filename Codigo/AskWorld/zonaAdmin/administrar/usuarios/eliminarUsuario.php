<?php
    //Incluimos el conector a la Base de datos 
    include "../../includes/Database.php";

    //Incluimos los ficheros donde están las funciones
    require '../../includes/DAO/DAO_Usuarios.php';
    require '../../includes/DAO/DAO_Publicaciones.php';

    //Recogemos el ID recibido por URL
    $idURL= $_GET["id"];

    //Buscamos las imágenes de sus publicaciones y procedemos a eliminarlas.
    $get_publicaciones = mostrarPublicacionesPorUsuario($conexion, $idURL);

    while($row_publicaciones = mysqli_fetch_assoc($get_publicaciones)) {

        $imagenPublicacion = $row_publicaciones['ImagenPublicacion'];

        unlink($imagenPublicacion);
    }

    //Imagen Usuario: Primero borramos la ruta que tiene guardada y después añadimos la ruta que necesitamos.
    $get_usuario = mostrarUsuariosPorID($conexion, $idURL);
        
    $row_del = mysqli_fetch_assoc($get_usuario);
    
    $imagenUsuario = $row_del['Imagen'];

    $eliminarRuta = str_replace("../", "", $imagenUsuario);

    $imagenRuta = "../../../" . $eliminarRuta;
    
    //Procedemos a eliminar al usuario de la base de datos
    $consulta = eliminarUsuario($conexion, $idURL);

    if($consulta){

        echo "<script>alert('Eliminando usuario...')</script>";

        unlink($imagenRuta);  //Eliminamos la imagen del usuario

        echo "<script>alert('El usuario ha sido eliminado correctamente.')</script>";

        echo "<script>window.open('usuarios.php','_self')</script>";

    } else {

        echo "<script>alert('El usuario no se ha podido eliminar.')</script>";
            
        echo "<script>window.open('usuarios.php','_self')</script>";
    }
?>
