<?php
    //Incluimos el conector a la Base de datos e iniciamos la sesión
    include "../../includes/Database.php";
    session_start();

    //Incluimos el fichero donde están las funciones
    include "../../includes/DAO/DAO_Comentarios.php";
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
        Insertar Comentario
    </div>
    <div class="card-body">
        <img src="../../img/Comentario.png" width="150" height="150" style="border-radius: 20px;">
        <form id="insertarComentario" method="post">
            <h5 align="left"></i> Comentario nuevo</h5>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                </svg>
                </span>
                <input type="text" name="comentario" id="comentario" class="form-control" placeholder="En mi opinión..." autofocus required>
            </div>  
            <br>

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
            <input name="insertar" value="Insertar Comentario" type="submit" class="btn btn-warning form-control" style="border: black 2px solid">
        </form>
    </div>
    <div class="card-footer text-muted">
        <a href="comentarios.php">Ir a los comentarios</a>
    </div>
</div>

<?php include "../../includes/footer.php"; ?>

<?php } ?>

<?php
if(isset($_POST['insertar'])){

    //Guardamos los datos recibidos en el formulario junto al ID del admin que haya iniciado sesión
    $publicacion = $_POST['publicacion'];

    $comentario = $_POST['comentario'];

    $idAdmin = $_SESSION['idUsuario'];

    //Insertamos el comentario
    $consulta = insertarComentario($conexion, $idAdmin, $publicacion, $comentario);

    if($consulta){

        echo "<script>alert('El comentario se ha insertado correctamente.')</script>";

        echo "<script>window.open('comentarios.php','_self')</script>"; 
        
    }else{

        echo "<script>alert('El comentario no se ha podido insertar.')</script>";
        
        echo "<script>window.open('comentarios.php','_self')</script>"; 

    }
    
}

?>