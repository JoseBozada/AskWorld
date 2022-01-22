<?php

    function mostrarUsuarios($conexion){
        $consulta = "SELECT * FROM `usuarios`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function mostrarUsuariosPorID($conexion, $idUsuario){
        $consulta = "SELECT * FROM `usuarios` WHERE (`idUsuario` = '$idUsuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
?>