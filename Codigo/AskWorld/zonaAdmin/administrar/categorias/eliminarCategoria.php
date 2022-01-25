<?php
	//Incluimos el conector a la Base de datos 
    include "../../includes/Database.php";

    //Incluimos el fichero donde están las funciones
    require "../../includes/DAO/DAO_Categorias.php";

    //Recogemos el ID recibido por URL
    $idURL = $_GET["id"];

    //Eliminamos la categoría
    $consulta = eliminarCategoria($conexion, $idURL);

	if($consulta){

		echo "<script>alert('La categoría ha sido eliminada correctamente.')</script>";

		echo "<script>window.open('categorias.php','_self')</script>";

	} else {

		echo "<script>alert('La categoría no se ha podido eliminar.')</script>";
            
        echo "<script>window.open('categorias.php','_self')</script>";
	}

?>