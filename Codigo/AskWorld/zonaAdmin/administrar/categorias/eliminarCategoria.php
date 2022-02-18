<?php

	//Incluimos el conector a la Base de datos 
    	include "../../includes/Database.php";

	//Incluimos los ficheros donde están las funciones
	require "../../includes/DAO/DAO_Categorias.php";
	require "../../includes/DAO/DAO_Publicaciones.php";

	//Recogemos el ID recibido por URL
	$idURL = $_GET["id"];

	//Buscamos las imágenes de las publicaciones y procedemos a eliminarlas.
	$get_publicaciones = mostrarPublicacionesPorCategoria($conexion, $idURL);

	while($row_publicaciones = mysqli_fetch_assoc($get_publicaciones)) {

		$imagenPublicacion = $row_publicaciones['ImagenPublicacion'];

		unlink($imagenPublicacion);
	    }

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
