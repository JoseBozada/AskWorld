<?php
    function mostrarValoraciones($conexion){
        $consulta = "SELECT * FROM valoracion";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarValoracionesPorID($conexion, $idValoracion){
        $consulta = "SELECT * FROM valoracion WHERE (`idValoracion` = '$idValoracion')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarValoracionesPorUsuario($conexion, $idUsuario){
        $consulta = "SELECT * FROM valoracion WHERE idUsuario = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function buscarValoracionUsuario($conexion, $idPublicacion, $idUsuario){
        $consulta = "SELECT * FROM valoracion WHERE (`idPublicacion` = '$idPublicacion') AND (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function promedioValoracion($conexion, $idPublicacion){
        $consulta = "SELECT round(AVG(valoracion),1) FROM `valoracion` WHERE idPublicacion = '$idPublicacion'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function insertarValoracion($conexion, $idPublicacion, $idUsuario, $valoracion){
        $consulta = "INSERT INTO valoracion (`idPublicacion`, `idUsuario`, `valoracion`) VALUES ('$idPublicacion', '$idUsuario', '$valoracion')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function actualizarValoracion($conexion, $valoracion, $idValoracion){
        $consulta = "UPDATE valoracion SET valoracion = '$valoracion' WHERE (`idValoracion` = '$idValoracion')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function actualizarValoracionPublicacion($conexion, $valoracion, $idPublicacion, $idUsuario){
        $consulta = "UPDATE valoracion SET valoracion = '$valoracion' WHERE (`idPublicacion` = '$idPublicacion') AND idUsuario = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarValoracion($conexion, $idValoracion){
        $consulta = "DELETE FROM valoracion WHERE (`idValoracion` = '$idValoracion')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
?>
