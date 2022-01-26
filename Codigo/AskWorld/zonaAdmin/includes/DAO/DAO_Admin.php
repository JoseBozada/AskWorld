<?php

    function consultaAdmin($conexion, $usuario, $password){
        $consulta = "SELECT * FROM `usuarios` WHERE `Usuario` = '$usuario' AND `Contrasena` = '$password' AND `Rol` = 'Admin'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function consultaCorreoAdmin($conexion, $email){
        $consulta = "SELECT * FROM `usuarios` WHERE `Email` = '$email' AND `Rol` = 'Admin'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarAdminPorID($conexion, $idAdmin){
        $consulta = "SELECT * FROM `usuarios` WHERE `idUsuario` = '$idAdmin' AND `Rol` = 'Admin'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function ActualizarAdmin($conexion, $usuario, $nombre, $apellido1, $apellido2, $email, $imagen, $fecha, $direccion, $telefono, $provincia, $poblacion, $idAdmin){
        $consulta = "UPDATE `usuarios` SET `Usuario` = '$usuario', `Nombre` = '$nombre', `Apellido1` = '$apellido1', `Apellido2` = '$apellido2', `Email` = '$email', `Imagen` = '$imagen', `FechaNacimiento` = '$fecha', `Direccion` = '$direccion', `Telefono` = '$telefono', `Provincia` = '$provincia', `Poblacion` = '$poblacion' WHERE (`idUsuario` = '$idAdmin') AND `Rol` = 'Admin'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function ActualizarPasswordAdmin($conexion, $password, $token){
        $consulta = "UPDATE `usuarios` SET `Contrasena` = '$password' WHERE `Token` = '$token'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarAdmin($conexion, $idAdmin){
        $consulta = "DELETE FROM `usuarios` WHERE `idUsuario` = '$idAdmin' AND `Rol` = 'Admin'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function crearSesion($usuario){
        //Queremos que el id de sesión sea su usuario
        session_id($usuario['Usuario']);
        //Creamos la conexion
        session_start();
        //Almacenamos en la sesión los datos del usuario
        foreach($usuario as $indice=>$valor){
            $_SESSION[$indice] = $valor;
        }
    }

?>