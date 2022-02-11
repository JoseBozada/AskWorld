<?php

    function consultaUsuario($conexion, $usuario, $password){
        $consulta = "SELECT * FROM `usuarios` WHERE `Usuario` = '$usuario' AND `Contrasena` = '$password'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function consultaCorreoUsuario($conexion, $email){
        $consulta = "SELECT * FROM `usuarios` WHERE `Email` = '$email'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

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

    function buscarUsuarioRepetido($conexion, $usuario){
        $consulta = "SELECT * FROM usuarios WHERE (`Usuario` = '$usuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function buscarEmailRepetido($conexion, $email){
        $consulta = "SELECT * FROM usuarios WHERE (`Email` = '$email')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function buscarTelefonoRepetido($conexion, $telefono){
        $consulta = "SELECT * FROM usuarios WHERE (`Telefono` = '$telefono')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function buscarDniRepetido($conexion, $dni){
        $consulta = "SELECT * FROM usuarios WHERE (`DNI` = '$dni')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function insertarUsuario($conexion, $usuario, $password, $nombre, $apellido1, $apellido2, $email, $imagen, $fecha, $direccion, $telefono, $provincia, $poblacion, $dni, $token){
        $consulta = "INSERT INTO `usuarios` (`Usuario`, `Contrasena`, `Nombre`, `Apellido1`, `Apellido2`, `Email`, `Imagen`, `FechaNacimiento`, `Direccion`, `Telefono`, `Provincia`, `Poblacion`, `DNI`, `Token`, `Rol`) VALUES ('$usuario', '$password', '$nombre', '$apellido1', '$apellido2', '$email', '$imagen', '$fecha', '$direccion', '$telefono', '$provincia', '$poblacion', '$dni', '$token', 'Usuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function ActualizarUsuario($conexion, $usuario, $nombre, $apellido1, $apellido2, $email, $imagen, $fecha, $direccion, $telefono, $provincia, $poblacion, $idUsuario){
        $consulta = "UPDATE `usuarios` SET `Usuario` = '$usuario', `Nombre` = '$nombre', `Apellido1` = '$apellido1', `Apellido2` = '$apellido2', `Email` = '$email', `Imagen` = '$imagen', `FechaNacimiento` = '$fecha', `Direccion` = '$direccion', `Telefono` = '$telefono', `Provincia` = '$provincia', `Poblacion` = '$poblacion' WHERE (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function ActualizarPasswordUsuario($conexion, $password, $token){
        $consulta = "UPDATE `usuarios` SET `Contrasena` = '$password' WHERE `Token` = '$token'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarUsuario($conexion, $idUsuario){
        $consulta = "DELETE FROM `usuarios` WHERE `idUsuario` = '$idUsuario'";
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
