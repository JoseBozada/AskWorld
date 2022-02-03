<?php include "../includes/header.php"; ?>

<?php
    //Esto impedirá que se acceda sin iniciar sesión.
    if(!isset($_SESSION['Usuario'])){
        
        echo "<script>alert('Debes iniciar sesión para entrar aquí.')</script>";

        echo "<script>window.open('../../login.php','_self')</script>";
        
    }else{
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Mis Valoraciones</h1>
        <hr>
        <div id="tablaValoraciones"></div>
    </div>
</div>

<?php include "../includes/footer.php"; ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaValoraciones').load("tablaValoraciones.php");
    });
</script>

<?php } ?>