<?php include "../includes/header.php"; ?>

<?php
    //Esto impedirá que se acceda sin iniciar sesión.
    if(!isset($_SESSION['Usuario'])){
        
        echo "<script>alert('Debes iniciar sesión para entrar aquí.')</script>";

        echo "<script>window.open('../sesion/login.php','_self')</script>";
        
    }else{
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Mis Comentarios</h1>
        <hr>
        <div id="tablaComentarios"></div>
    </div>
</div>

<?php include "../includes/footer.php"; ?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaComentarios').load("tablaComentarios.php");
	});
</script>

<?php } ?>
