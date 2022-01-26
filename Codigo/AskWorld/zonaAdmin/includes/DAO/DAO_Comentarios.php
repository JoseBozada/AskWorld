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

    function insertarComentario($conexion, $idUsuario, $idPublicacion, $comentario){
        $consulta = "INSERT INTO `comentarios` (`idUsuario`, `idPublicacion`, `Comentario`, `Fecha`) VALUES ('$idUsuario', '$idPublicacion', '$comentario', 'now()')";
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