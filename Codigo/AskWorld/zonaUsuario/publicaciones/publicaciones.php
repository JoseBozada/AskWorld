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
        <h1 class="display-4">Mis Publicaciones</h1>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <a href="insertarPublicacion.php" style="color: white; text-decoration:none;" class="btn btn-primary"><i class="fas fa-plus-circle"></i> INSERTAR PUBLICACIÓN</a>
            </div>
        </div>
        <br>
        <div id="tablaPublicaciones"></div>
    </div>
</div>

<?php include "../includes/footer.php"; ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaPublicaciones').load("tablaPublicaciones.php");
    });
</script>

<?php } ?>
