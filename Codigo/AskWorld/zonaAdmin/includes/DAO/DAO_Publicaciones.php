<?php

    function mostrarPublicaciones($conexion){
        $consulta = "SELECT * FROM post";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarPublicacion($conexion, $idPublicacion){
        $consulta = "DELETE FROM post WHERE (`idPost` = '$idPublicacion')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarCategoriasPorID($conexion, $idCategoria){
        $consulta = "SELECT * FROM categoria WHERE idCategoria = '$idCategoria'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarUsuariosPorID($conexion, $idUsuario){
        $consulta = "SELECT * FROM usuarios WHERE idUsuarios = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>