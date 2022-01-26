<?php
	//Incluimos el conector a la Base de datos 
    include "../../includes/Database.php";

    //Incluimos el fichero donde están las funciones
    require "../../includes/DAO/DAO_Comentarios.php";

    //Recogemos el ID recibido por URL
    $idURL = $_GET["id"];

    //Eliminamos el comentario
    $consulta = eliminarComentario($conexion, $idURL);

	if($consulta){

		echo "<script>alert('El comentario ha sido eliminado correctamente.')</script>";

		echo "<script>window.open('comentarios.php','_self')</script>";

	} else {

		echo "<script>alert('El comentario no se ha podido eliminar.')</script>";
            
        echo "<script>window.open('comentarios.php','_self')</script>";
	}

?>