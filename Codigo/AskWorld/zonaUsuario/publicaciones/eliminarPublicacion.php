<?php
	//Incluimos el conector a la Base de datos 
    include "../../zonaAdmin/includes/Database.php";

    //Incluimos el fichero donde están las funciones
    require "../../zonaAdmin/includes/DAO/DAO_Publicaciones.php";

    //Recogemos el ID recibido por URL
    $idURL = $_GET["id"];

    //Buscamos la imagen de la publicación
    $get_publicacion = mostrarPublicacionesPorID($conexion, $idURL);
        
    $row_del = mysqli_fetch_assoc($get_publicacion);

    $Imagen = $row_del['ImagenPublicacion'];

    //Si eliminamos la publicación, eliminaremos también su imagen
    $consulta = eliminarPublicacion($conexion, $idURL);

	if($consulta){

        echo "<script>alert('Eliminando su publicación...')</script>";

        unlink($Imagen); //Eliminamos la imagen

		echo "<script>alert('Tu publicación ha sido eliminado correctamente.')</script>";

		echo "<script>window.open('publicaciones.php','_self')</script>";

	} else {

		echo "<script>alert('Tu publicación no se ha podido eliminar.')</script>";
            
        echo "<script>window.open('publicaciones.php','_self')</script>";
	}

?>