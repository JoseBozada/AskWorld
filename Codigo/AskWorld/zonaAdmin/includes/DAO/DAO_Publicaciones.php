<?php

    function mostrarPublicaciones($conexion){
        $consulta = "SELECT * FROM publicaciones";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarPublicacionesPorID($conexion, $idPublicacion){
        $consulta = "SELECT * FROM Publicaciones WHERE idPublicacion = '$idPublicacion'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarPublicacion($conexion, $idPublicacion){
        $consulta = "DELETE FROM publicaciones WHERE (`idPublicacion` = '$idpublicacion')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
?>