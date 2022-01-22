<?php

    function consultaAdmin($conexion, $usuario, $password){
        $consulta = "SELECT * FROM `usuarios` WHERE `Usuario` = '$usuario' AND `Contraseña` = '$password' AND `Rol` = 'Admin'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function consultaCorreoAdmin($conexion, $email){
        $consulta = "SELECT * FROM `usuarios` WHERE `Email` = '$email' AND `Rol` = 'Admin'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function ActualizarPasswordAdmin($conexion, $password, $token){
        $consulta = "UPDATE `usuarios` SET `Contraseña` = '$password' WHERE `Token` = '$token'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarAdminPorID($conexion, $idAdmin){
        $consulta = "SELECT * FROM `usuarios` WHERE `idUsuario` = '$idAdmin' AND `Rol` = 'Admin'";
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