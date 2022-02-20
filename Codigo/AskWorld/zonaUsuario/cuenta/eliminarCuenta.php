<?php
	//Incluimos el conector a la Base de datos 
    	include "../../zonaAdmin/includes/Database.php";

    	//Incluimos el fichero donde están las funciones
    	require "../../zonaAdmin/includes/DAO/DAO_Usuarios.php";
    	require "../../zonaAdmin/includes/DAO/DAO_Publicaciones.php";

    	//Recogemos el ID recibido por URL
   	$idURL = $_GET["id"];

    	//Buscamos las imágenes de las publicaciones del usuario y procedemos a eliminarlas.
    	$get_publicaciones = mostrarPublicacionesPorUsuario($conexion, $idURL);

    	while($row_publicaciones = mysqli_fetch_assoc($get_publicaciones)) {

		$imagenPublicacion = $row_publicaciones['ImagenPublicacion'];

		unlink($imagenPublicacion);
	    }

    	//Buscamos la imagen del Usuario
    	$get_usuario = mostrarUsuariosPorID($conexion, $idURL);
        
    	$row_usuario = mysqli_fetch_assoc($get_usuario);
    	
    	$imagenUsuario = $row_usuario['Imagen'];
    
    	//Procedemos a eliminar al usuario de la base de datos
    	$consulta = eliminarUsuario($conexion, $idURL);

    	//Si eliminamos la cuenta lo dirigiremos a la página principal de la página, sino volverá de nuevo a su perfil
	if($consulta){

        	echo "<script>alert('Eliminando la cuenta...')</script>";

        	unlink($imagenUsuario); //Eliminamos la imagen

		echo "<script>alert('Tu cuenta ha sido eliminada correctamente.')</script>";

		echo "<script>window.open('../../index.php?categoria=0','_self')</script>";

		//Destruimos la sesión después de eliminar la cuenta
		session_start();

		session_destroy();

	} else {

		echo "<script>alert('Tu cuenta no se ha podido eliminar.')</script>";
            
        	echo "<script>window.open('perfil.php','_self')</script>";
	}
?>
