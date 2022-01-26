<?php
	//Incluimos el conector a la Base de datos 
    include "../../includes/Database.php";

    //Incluimos el fichero donde están las funciones
    require "../../includes/DAO/DAO_Admin.php";

    //Recogemos el ID recibido por URL
    $idURL = $_GET["id"];

    //Buscamos la imagen del admin
    $get_admin = mostrarAdminPorID($conexion, $idURL);
        
    $row_admin = mysqli_fetch_assoc($get_admin);
    
    $Imagen = $row_admin['Imagen'];

    $rutaEliminar = $Imagen;
    
    //Procedemos a eliminar al admin de la base de datos
    $consulta = eliminarAdmin($conexion, $idURL);

    //Si eliminamos la cuenta lo dirigiremos a la página principal de la página, sino volverá de nuevo a su perfil
	if($consulta){

        echo "<script>alert('Eliminando la cuenta...')</script>";

        unlink($rutaEliminar); //Eliminamos la imagen

		echo "<script>alert('Tu cuenta ha sido eliminada correctamente.')</script>";

		echo "<script>window.open('../../../index.php','_self')</script>";

        //Destruimos la sesión después de eliminar la cuenta
        session_start();

        session_destroy();

	} else {

		echo "<script>alert('Tu cuenta no se ha podido eliminar.')</script>";
            
        echo "<script>window.open('perfil.php','_self')</script>";
	}

?>