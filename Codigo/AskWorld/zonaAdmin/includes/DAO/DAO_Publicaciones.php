<?php

    function mostrarPublicaciones($conexion){
        $consulta = "SELECT * FROM publicaciones";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarPublicacionesPorID($conexion, $idPublicacion){
        $consulta = "SELECT * FROM publicaciones WHERE idPublicacion = '$idPublicacion'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarPublicacionesPorUsuario($conexion, $idUsuario){
        $consulta = "SELECT * FROM publicaciones WHERE idUsuario = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function insertarPublicacion($conexion, $idCategoria, $idUsuario, $nombrePublicacion, $descripcionPublicacion, $fechaPublicacion, $imagenPublicacion){
        $consulta = "INSERT INTO publicaciones (`idCategoria`, `idUsuario`, `NombrePublicacion`, `DescripcionPublicacion`, `FechaPublicacion`, `ImagenPublicacion`) VALUES ('$idCategoria', '$idUsuario', '$nombrePublicacion', '$descripcionPublicacion', '$fechaPublicacion', '$imagenPublicacion')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function actualizarPublicacion($conexion, $idCategoria, $nombrePublicacion, $descripcionPublicacion, $fechaPublicacion, $imagenPublicacion, $idPublicacion){
        $consulta = "UPDATE publicaciones SET `idCategoria` = '$idCategoria', `NombrePublicacion` = '$nombrePublicacion', `DescripcionPublicacion` = '$descripcionPublicacion', `FechaPublicacion` = '$fechaPublicacion', `ImagenPublicacion` = '$imagenPublicacion' WHERE (`idPublicacion` = '$idPublicacion')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarPublicacion($conexion, $idPublicacion){
        $consulta = "DELETE FROM publicaciones WHERE (`idPublicacion` = '$idPublicacion')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
?>