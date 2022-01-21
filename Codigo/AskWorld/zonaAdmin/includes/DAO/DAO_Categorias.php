<?php

    function mostrarCategorias($conexion){
        $consulta = "SELECT * FROM categoria";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarCategoria($conexion, $idCategoria){
        $consulta = "DELETE FROM categoria WHERE (`idCategoria` = '$idCategoria')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>