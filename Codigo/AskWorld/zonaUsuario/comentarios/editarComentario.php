<?php include "../includes/header.php"; ?>

<?php
    //Esto impedirá que se acceda sin iniciar sesión.
    if(!isset($_SESSION['Usuario'])){
        
        echo "<script>alert('Debes iniciar sesión para entrar aquí.')</script>";

        echo "<script>window.open('../../login.php','_self')</script>";
        
    }else{
?>

<?php

	//Recogemos el ID recibido por URL
	$idURL = $_GET['id'];
        
	//Mostramos y guardamos los datos del comentario por su ID
    $get_comentario = mostrarComentariosPorID($conexion, $idURL);
        
    $row_edit = mysqli_fetch_assoc($get_comentario);

    $idComentario = $row_edit['idComentario'];

    $idUsuario = $row_edit['idUsuario'];

    $idPublicacion = $row_edit['idPublicacion'];
        
    $comentario = $row_edit['Comentario'];

    //Buscamos la publicación donde se hizo el comentario
    $get_publicacion = mostrarPublicacionesPorID($conexion, $idPublicacion);
        
    $row_publicacion = mysqli_fetch_assoc($get_publicacion);
    
    $publicacion = $row_publicacion['NombrePublicacion'];

?>

<br>
<div class="card text-center">
    <div class="card-header">
        Editar Comentario
    </div>
    <div class="card-body">
        <img src="../../zonaAdmin/img/EditarComentario.png" width="150" height="150" style="border-radius: 20px;">
        <form id="editarComentario" method="post">
            <h5 align="left"></i> Comentario</h5>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fonts" viewBox="0 0 16 16">
                        <path d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z"/>
                    </svg>
                </span>
                <input type="text" name="comentario" id="comentario" class="form-control" value="<?php echo $comentario ?>">
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
                <input type="text" name="publicacion" id="publicacion" class="form-control" value="<?php echo $publicacion ?>" readonly>
            </div>
            <br>
            <input name="actualizar" value="Actualizar Comentario" type="submit" class="btn btn-warning form-control" style="border: black 2px solid">
        </form>
    </div>
    <div class="card-footer text-muted">
        <a href="comentarios.php">Ir a mis comentarios</a>
    </div>
</div>

<br>

<?php include "../includes/footer.php"; ?>

<?php } ?>

<?php
if(isset($_POST['actualizar'])){

    //Guardamos el comentario recibido en el formulario
    $comentario = $_POST['comentario'];

    //Actualizamos el comentario
    $consulta = actualizarComentario($conexion, $idComentario, $comentario);

    if($consulta){

        echo "<script>alert('Tu comentario se ha actualizado correctamente.')</script>";

        echo "<script>window.open('comentarios.php','_self')</script>"; 
        
    }else{

        echo "<script>alert('Tu comentario no se ha podido actualizar.')</script>";
        
        echo "<script>window.open('comentarios.php','_self')</script>"; 

    }
    
}

?>