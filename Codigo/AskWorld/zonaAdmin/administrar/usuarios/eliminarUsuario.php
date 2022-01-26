<?php
    //Incluimos el conector a la Base de datos 
    include("../../includes/Database.php");

    //Incluimos el fichero donde están las funciones
    require '../../includes/DAO/DAO_Usuarios.php';

    //Recogemos el ID recibido por URL
    $idURL= $_GET["id"];

    //Buscamos la imagen del Usuario
    $get_usuario = mostrarUsuariosPorID($conexion, $idURL);
        
    $row_del = mysqli_fetch_assoc($get_usuario);

    $Imagen = $row_del['Imagen'];

    $rutaEliminar = $Imagen;
    
    //Procedemos a eliminar al usuario de la base de datos
    $consulta = eliminarUsuario($conexion, $idURL);

    if($consulta){

        echo "<script>alert('Eliminando usuario...')</script>";

        unlink($rutaEliminar);

        echo "<script>alert('El usuario ha sido eliminado correctamente.')</script>";

        echo "<script>window.open('usuarios.php','_self')</script>";

    } else {

        echo "<script>alert('El usuario no se ha podido eliminar.')</script>";
            
        echo "<script>window.open('usuarios.php','_self')</script>";
    }

?>