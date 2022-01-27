<?php
    //Incluimos el conector a la Base de datos e iniciamos la sesión
    include "../../includes/Database.php";
    session_start();

    //Incluimos los ficheros donde están las funciones
    include "../../includes/DAO/DAO_Valoraciones.php";
    include "../../includes/DAO/DAO_Publicaciones.php";
    
    //Esto impedirá que se acceda sin iniciar sesión y si el usuario logueado no tiene el rol de Admin volverá al login
    if (!($_SESSION['Rol'] == 'Admin')){
        
        echo "<script>window.open('../../login.php','_self')</script>";
        
    }else{
?>

<?php include "../../includes/header.php"; ?>

<br>
<div class="card text-center">
    <div class="card-header">
        Insertar Valoración
    </div>
    <div class="card-body">
        <img src="../../img/Valoracion.png" width="150" height="150" style="border-radius: 20px;">
        <form id="insertarPublicacion" enctype="multipart/form-data" method="post"> 
            <h5 align="left"></i> Publicación</h5>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-post" viewBox="0 0 16 16">
                    <path d="M4 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-8z"/>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                </svg>
                </span>
                <select name="publicacion" class="form-control" id="publicacion" required>
                    <option value=""> Seleccione una publicación </option>
                    <?php

                        $get_publicaciones = mostrarPublicaciones($conexion);

                        while ($row_publicaciones = mysqli_fetch_assoc($get_publicaciones)){

                            $idPublicacion = $row_publicaciones['idPublicacion'];

                            $nombrePublicacion = $row_publicaciones['NombrePublicacion'];

                            echo "<option value='$idPublicacion'> $nombrePublicacion </option>";
                        }
                    ?>
                </select>
            </div>
            <br>
            <h5 align="left"></i> Valoración</h5>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                </span>
                <select name="valoracion" class="form-control" id="valoracion" required>
                    <option value=""> Seleccione una </option>
                    <option value="1">1 estrella</option>
                    <option value="2">2 estrellas</option>
                    <option value="3">3 estrellas</option>
                    <option value="4">4 estrellas</option>
                    <option value="5">5 estrellas</option>
                </select>
            </div>
            <br>
            <input name="insertar" value="Insertar Valoración" type="submit" class="btn btn-warning form-control" style="border: black 2px solid">
        </form>        
    </div>
    <div class="card-footer text-muted">
        <a href="valoraciones.php">Ir a las valoraciones</a>
    </div>
</div>

<?php include "../../includes/footer.php"; ?>

<?php } ?>

<?php
if(isset($_POST['insertar'])){

    //Guardamos los datos recibidos en el formulario junto al ID del admin que haya iniciado sesión
    $publicacion = $_POST['publicacion'];

    $valoracion = $_POST['valoracion'];

    $idAdmin = $_SESSION['idUsuario'];

    //Comprobamos si el usuario ya ha valorado una publicación, si lo hizo no se insertará una nueva.
    $comprueba = buscarValoracionUsuario($conexion, $publicacion, $idAdmin);

    if(mysqli_num_rows($comprueba) == 1){
        
        echo "<script>alert('No se puede insertar tu valoración porque ya valoraste esta publicación.')</script>";
        
        echo "<script>window.open('valoraciones.php','_self')</script>";

    } else {
        
        $consulta = insertarValoracion($conexion, $publicacion, $idAdmin, $valoracion);

        echo "<script>alert('Tu valoración se ha insertado correctamente.')</script>";

        echo "<script>window.open('valoraciones.php','_self')</script>"; 
    }
    
}

?>