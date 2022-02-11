<?php

    function mostrarComentarios($conexion){
        $consulta = "SELECT * FROM comentarios";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarComentariosPorID($conexion, $idComentario){
        $consulta = "SELECT * FROM comentarios WHERE (`idComentario` = '$idComentario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarComentariosPorPublicacion($conexion, $idPublicacion){
        $consulta = "SELECT * FROM comentarios WHERE (`idPublicacion` = '$idPublicacion')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarComentariosPorUsuario($conexion, $idUsuario){
        $consulta = "SELECT * FROM comentarios WHERE idUsuario = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function insertarComentario($conexion, $idUsuario, $idPublicacion, $comentario){
        $consulta = "INSERT INTO `comentarios` (`idUsuario`, `idPublicacion`, `Comentario`) VALUES ('$idUsuario', '$idPublicacion', '$comentario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function actualizarComentario($conexion, $idComentario, $comentario){
        $consulta = "UPDATE comentarios SET Comentario = '$comentario' WHERE (`idComentario` = '$idComentario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarComentario($conexion, $idComentario){
        $consulta = "DELETE FROM comentarios WHERE (`idComentario` = '$idComentario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>
