<?php
	//Incluimos el conector a la Base de datos 
    include "../../zonaAdmin/includes/Database.php";

    //Incluimos el fichero donde están las funciones
    require "../../zonaAdmin/includes/DAO/DAO_Valoraciones.php";

    //Recogemos el ID recibido por URL
    $idURL = $_GET["id"];

    //Eliminamos la valoración
    $consulta = eliminarValoracion($conexion, $idURL);

	if($consulta){

		echo "<script>alert('Tu valoración ha sido eliminada correctamente.')</script>";

		echo "<script>window.open('valoraciones.php','_self')</script>";

	} else {

		echo "<script>alert('Tu valoración no se ha podido eliminar.')</script>";
            
        echo "<script>window.open('valoraciones.php','_self')</script>";
	}

?>