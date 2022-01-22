<?php

    function mostrarComentarios($conexion){
        $consulta = "SELECT * FROM comentarios";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarComentarios($conexion, $idComentario){
        $consulta = "DELETE FROM comentarios WHERE (`idComentario` = '$idComentario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>