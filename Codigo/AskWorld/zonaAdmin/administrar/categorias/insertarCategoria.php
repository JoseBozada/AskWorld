<?php
    //Incluimos el conector a la Base de datos e iniciamos la sesión
    include "../../includes/Database.php";
    session_start();

    //Incluimos el fichero donde están las funciones
    include "../../includes/DAO/DAO_Categorias.php";
    
    //Esto impedirá que se acceda sin iniciar sesión y si el usuario logueado no tiene el rol de Admin volverá al login
    if (!($_SESSION['Rol'] == 'Admin')){
        
        echo "<script>window.open('../../login.php','_self')</script>";
        
    }else{
?>

<?php include "../../includes/header.php"; ?>

<br>
<div class="card text-center">
    <div class="card-header">
        Insertar Categoría
    </div>
    <div class="card-body">
        <img src="../../../img/Categoria.png" width="150" height="150" style="border-radius: 20px;">
        <form id="insertarCategoria" method="post" class="needs-validation">
            <h5 align="left"></i> Nombre de la categoría</h5>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fonts" viewBox="0 0 16 16">
                        <path d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z"/>
                    </svg>
                </span>
                <input type="text" name="nombreCategoria" id="nombreCategoria" class="form-control" placeholder="Televisión" autofocus required>
                <div class="invalid-feedback">El nombre tiene una longitud mínima de 4 caracteres y máximo de 20 caracteres. No se permiten caracteres especiales.</div>
            </div>  
            <br>
            <input name="insertar" value="Insertar Categoría" type="submit" class="btn btn-warning form-control" style="border: black 2px solid">
        </form>
    </div>
    <div class="card-footer text-muted">
        <a href="categorias.php">Ir a las categorías</a>
    </div>
</div>

  <script src="../../../js/validacionCategorias.js"></script>

<?php include "../../includes/footer.php"; ?>

<?php } ?>

<?php
if(isset($_POST['insertar'])){

    //Guardamos el nombre recibido en el formulario
    $nombreCategoria = $_POST['nombreCategoria'];

    //Comprobamos si el nombre de la categoría existe, si existe no lo insertará.
    $comprueba = buscarCategoriaRepetida($conexion, $nombreCategoria);

    if(mysqli_num_rows($comprueba) == 1){
        
        echo "<script>alert('Tu categoría no se ha podido insertar porque ya existe.')</script>";
        
        echo "<script>window.open('categorias.php','_self')</script>";

    } else {
        
        $consulta = insertarCategoria($conexion, $nombreCategoria);

        echo "<script>alert('Tu categoría se ha insertado correctamente.')</script>";

        echo "<script>window.open('categorias.php','_self')</script>";
    }
}
?>
