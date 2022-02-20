<?php
	//Incluimos el conector a la Base de datos 
    	include "../../zonaAdmin/includes/Database.php";

    	//Incluimos el fichero donde están las funciones
    	require "../../zonaAdmin/includes/DAO/DAO_Comentarios.php";

    	//Recogemos el ID recibido por URL
    	$idURL = $_GET["id"];

    	//Eliminamos el comentario
    	$consulta = eliminarComentario($conexion, $idURL);

	if($consulta){

		echo "<script>alert('Tu comentario ha sido eliminado correctamente.')</script>";

		echo "<script>window.open('comentarios.php','_self')</script>";

	} else {

		echo "<script>alert('Tu comentario no se ha podido eliminar.')</script>";
            
        	echo "<script>window.open('comentarios.php','_self')</script>";
	}
?>
