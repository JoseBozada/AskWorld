<?php
    //Incluimos el conector a la Base de datos e iniciamos la sesión
    include "../../includes/Database.php";
    session_start();
    
    //Esto impedirá que se acceda sin iniciar sesión y si el usuario logueado no tiene el rol de Admin volverá al login
    if (!($_SESSION['Rol'] == 'Admin')){
        
        echo "<script>window.open('../../login.php','_self')</script>";
        
    }else{
?>

<?php include "../../includes/header.php"; ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Comentarios</h1>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <span class="btn btn-primary">
                    <span class="fas fa-plus-circle"> 
                        <a href="insertarComentario.php" style="color: white; text-decoration:none;">Insertar nuevo comentario</a>
                    </span>
                </span>
            </div>
        </div>
        <br>
        <div id="tablaComentarios"></div>
    </div>
</div>

<?php include "../../includes/footer.php"; ?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaComentarios').load("tablaComentarios.php");
	});
</script>

<?php } ?>