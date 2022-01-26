<?php

    function mostrarUsuarios($conexion){
        $consulta = "SELECT * FROM `usuarios` WHERE Rol = 'Usuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarUsuariosPorID($conexion, $idUsuario){
        $consulta = "SELECT * FROM `usuarios` WHERE (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function insertarUsuario($conexion, $usuario, $password, $nombre, $apellido1, $apellido2, $email, $imagen, $fecha, $direccion, $telefono, $provincia, $poblacion, $dni, $token){
        $consulta = "INSERT INTO `usuarios` (`Usuario`, `Contrasena`, `Nombre`, `Apellido1`, `Apellido2`, `Email`, `Imagen`, `FechaNacimiento`, `Direccion`, `Telefono`, `Provincia`, `Poblacion`, `DNI`, `Token`, `Rol`) VALUES ('$usuario', '$password', '$nombre', '$apellido1', '$apellido2', '$email', '$imagen', '$fecha', '$direccion', '$telefono', '$provincia', '$poblacion', '$dni', '$token', 'Usuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function ActualizarUsuario($conexion, $usuario, $password, $nombre, $apellido1, $apellido2, $email, $imagen, $fecha, $direccion, $telefono, $provincia, $poblacion, $idUsuario){
        $consulta = "UPDATE `usuarios` SET `Usuario` = '$usuario', `Contrasena` = '$password', `Nombre` = '$nombre', `Apellido1` = '$apellido1', `Apellido2` = '$apellido2', `Email` = '$email', `Imagen` = '$imagen', `FechaNacimiento` = '$fecha', `Direccion` = '$direccion', `Telefono` = '$telefono', `Provincia` = '$provincia', `Poblacion` = '$poblacion' WHERE (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarUsuario($conexion, $idUsuario){
        $consulta = "DELETE FROM `usuarios` WHERE `idUsuario` = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
?>