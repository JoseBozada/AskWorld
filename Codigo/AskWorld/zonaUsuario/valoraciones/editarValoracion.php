<?php include "../includes/header.php"; ?>

<?php
    //Esto impedirá que se acceda sin iniciar sesión.
    if(!isset($_SESSION['Usuario'])){
        
        echo "<script>alert('Debes iniciar sesión para entrar aquí.')</script>";

        echo "<script>window.open('../sesion/login.php','_self')</script>";
        
    }else{
?>

<?php

	//Recogemos el ID recibido por URL
	$idURL = $_GET['id'];
        
	//Mostramos y guardamos los datos de la valoración por su ID
    	$get_valoracion = mostrarValoracionesPorID($conexion, $idURL);
        
    	$row_edit = mysqli_fetch_assoc($get_valoracion);

    	$idValoracion = $row_edit['idValoracion'];

    	$idUsuario = $row_edit['idUsuario'];

    	$idPublicacion = $row_edit['idPublicacion'];
        
    	$valoracion = $row_edit['valoracion'];

    	//Buscamos la publicación donde se hizo la valoración
    	$get_publicacion = mostrarPublicacionesPorID($conexion, $idPublicacion);
        
    	$row_publicacion = mysqli_fetch_assoc($get_publicacion);
    
    	$publicacion = $row_publicacion['NombrePublicacion'];

?>

<br>
<div class="card text-center">
    <div class="card-header">
        Editar Valoración
    </div>
    <div class="card-body">
        <img src="../../img/Valoracion.png" width="150" height="150" style="border-radius: 20px;">
        <form id="editarComentario" method="post">
            <h5 align="left"></i> Valoración</h5>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fonts" viewBox="0 0 16 16">
                        <path d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z"/>
                    </svg>
                </span>
                <select name="valoracion" class="form-control" id="valoracion" required>
                    <option value="<?php echo $valoracion ?>"><?php echo $valoracion ?> estrellas</option>
                    <option value="1">1 estrella</option>
                    <option value="2">2 estrellas</option>
                    <option value="3">3 estrellas</option>
                    <option value="4">4 estrellas</option>
                    <option value="5">5 estrellas</option>
                </select>
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
            <input name="actualizar" value="Actualizar Valoración" type="submit" class="btn btn-warning form-control" style="border: black 2px solid">
        </form>
    </div>
    <div class="card-footer text-muted">
        <a href="valoraciones.php">Ir a mis valoraciones</a>
    </div>
</div>

<br>

<?php include "../includes/footer.php"; ?>

<?php } ?>

<?php
if(isset($_POST['actualizar'])){

    //Guardamos la elección recibido en el formulario
    $valoracion = $_POST['valoracion'];

    //Actualizamos la valoración
    $consulta = actualizarValoracion($conexion, $valoracion, $idValoracion);

    if($consulta){

        echo "<script>alert('Tu valoración se ha actualizado correctamente.')</script>";

        echo "<script>window.open('valoraciones.php','_self')</script>"; 
        
    }else{

        echo "<script>alert('Tu valoración no se ha podido actualizar.')</script>";
        
        echo "<script>window.open('valoraciones.php','_self')</script>"; 

    }
    
}

?>
