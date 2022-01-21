<?php

    function mostrarComentarios($conexion){
        $consulta = "SELECT * FROM comentarios";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarComentarios($conexion, $idComentarios){
        $consulta = "DELETE FROM comentarios WHERE (`idComentarios` = '$idComentarios')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarUsuariosPorID($conexion, $idUsuario){
        $consulta = "SELECT * FROM usuarios WHERE idUsuarios = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarPostPorID($conexion, $idPost){
        $consulta = "SELECT * FROM post WHERE idPost = '$idPost'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>