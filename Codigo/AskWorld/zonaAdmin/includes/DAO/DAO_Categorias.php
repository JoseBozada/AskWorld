<?php

    function mostrarCategorias($conexion){
        $consulta = "SELECT * FROM categoria";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarCategoriasPorID($conexion, $idCategoria){
        $consulta = "SELECT * FROM categoria WHERE (`idCategoria` = '$idCategoria')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    
    function buscarCategoriaRepetida($conexion, $nombreCategoria){
        $consulta = "SELECT * FROM categoria WHERE (`NombreCategoria` = '$nombreCategoria')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function insertarCategoria($conexion, $nombreCategoria){
        $consulta = "INSERT INTO categoria (`NombreCategoria`) VALUES ('$nombreCategoria')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function actualizarCategoria($conexion, $nombreCategoria, $idCategoria){
        $consulta = "UPDATE categoria SET NombreCategoria = '$nombreCategoria' WHERE (`idCategoria` = '$idCategoria')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarCategoria($conexion, $idCategoria){
        $consulta = "DELETE FROM categoria WHERE (`idCategoria` = '$idCategoria')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
?>