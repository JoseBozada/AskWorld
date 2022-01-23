<?php
	//Incluimos el conector a la Base de datos 
    include "../../includes/Database.php";

    //Incluimos el fichero donde están las funciones
    require "../../includes/DAO/DAO_Admin.php";

    //Recogemos el ID recibido por URL y borramos al administrador de la base de datos
    $idURL = $_GET["id"];

    $Consulta = eliminarAdmin($conexion, $idURL);

    //Si eliminamos la cuenta lo dirigiremos a la página principal de la página, sino volverá de nuevo a su perfil
	if($consulta==0){

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