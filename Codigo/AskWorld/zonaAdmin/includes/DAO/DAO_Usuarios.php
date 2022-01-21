<?php

    function mostrarUsuarios($conexion){
        $consulta = "SELECT * from `usuarios`";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>