<?php
    //Traemos la sesión anterior
    session_start();

    //Destruimos la sesión para que el usuario tenga que loguearse de nuevo
    session_destroy();

    echo "<script>alert('Desconectándose.')</script>";
    
    echo "<script>window.open('../../index.php?categoria=0','_self')</script>";
?>