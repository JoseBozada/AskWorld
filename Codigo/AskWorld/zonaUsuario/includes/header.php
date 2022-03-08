<?php

	//Incluimos el conector a la Base de datos e iniciamos la sesión
    	include "../../zonaAdmin/includes/Database.php";
    	session_start();
    
	//Incluimos los ficheros donde están las funciones
	include "../../zonaAdmin/includes/DAO/DAO_Publicaciones.php";
	include "../../zonaAdmin/includes/DAO/DAO_Categorias.php";
	include "../../zonaAdmin/includes/DAO/DAO_Usuarios.php";
	include "../../zonaAdmin/includes/DAO/DAO_Valoraciones.php";
	include "../../zonaAdmin/includes/DAO/DAO_Comentarios.php";  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AskWorld</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../../css/estilos.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="../../zonaAdmin/librerias/datatable/dataTables.bootstrap5.min.css">
    
</head>
<body>
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="../../index.php?categoria=0">
                <img src="../../img/logo.png" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <?php
                      if(isset($_SESSION['Usuario'])){

                            echo "
                                <li class='nav-item'>
                                    <a class='nav-link' href='../../index.php?categoria=0'> <span class='fas fa-home' style='color: white'></span> Inicio</a>
                                </li>

                                <li class='nav-item'>
                                    <a class='nav-link' href='../publicaciones/publicaciones.php'> <span class='fas fa-file' style='color: yellow'></span> Mis Publicaciones</a>
                                </li>

                                <li class='nav-item'>
                                    <a class='nav-link' href='../comentarios/comentarios.php'> <span class='fas fa-comments' style='color: yellow'></span> Mis Comentarios</a>
                                </li>

                                <li class='nav-item'>
                                    <a class='nav-link' href='../valoraciones/valoraciones.php'> <span class='fas fa-star' style='color: yellow'></span> Mis Valoraciones</a>
                                </li>

                                <li class='nav-item'>
                                    <a class='nav-link' href='../cuenta/perfil.php'> <span class='fas fa-address-card' style='color: white'></span> Mi Cuenta </a>
                                </li>

                                <li class='nav-item'>
                                    <a class='nav-link' href='../sesion/salir.php' style='color: red'><span class='fas fa-power-off'></span> Salir</a>
                                </li>
                            ";
                        }else{
                            
                            echo "
                                <li class='nav-item'>
                                    <a class='nav-link' href='../../index.php?categoria=0'><span class='fas fa-home' style='color: white'></span> Inicio</a>
                                </li>

                                <li class='nav-item'>
                                    <a class='nav-link' href='../sesion/login.php'><span class='fas fa-sign-in-alt' style='color: yellow'></span> Iniciar Sesión</a>
                                </li>
                                
                                <li class='nav-item'>
                                    <a class='nav-link' href='../sesion/registro.php'><span class='fas fa-user-plus' style='color: yellow'></span> Registrarme</a>
                                </li>

                                <li class='nav-item'>
                                    <a class='nav-link' href='../recuperacion/recuperarPassword.php'><span class='fas fa-envelope' style='color: yellow'></span> Recuperar Contraseña</a>
                                </li>
                            ";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
