<?php
    //Incluimos el conector a la Base de datos e iniciamos la sesión
    include "../../includes/Database.php";
    session_start();

    //Incluimos los ficheros donde están las funciones
    include "../../includes/DAO/DAO_Publicaciones.php";
    include "../../includes/DAO/DAO_Categorias.php";
    include "../../includes/DAO/DAO_Usuarios.php";
    
    //Esto impedirá que se acceda sin iniciar sesión y si el usuario logueado no tiene el rol de Admin volverá al login
    if (!($_SESSION['Rol'] == 'Admin')){
        
        echo "<script>window.open('../../login.php','_self')</script>";
        
    }else{
?>

<?php include "../../includes/header.php"; ?>

<br>
<div class="card text-center">
    <div class="card-header">
        Insertar Publicación
    </div>
    <div class="card-body">
        <img src="../../img/Publicacion.png" width="150" height="150" style="border-radius: 20px;">
        <form id="insertarPublicacion" enctype="multipart/form-data" method="post">
            <div class="row">  
                <!-- Categoría -->
                <div class="col">
                    <div align="left"><h5></i> Categoría</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                                <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z"/>
                            </svg>
                        </span>
                        <select name="categoria" class="form-control" id="categoria" autofocus required>
                            <option value="">Seleccione una categoria</option>
                            <?php

                            $get_categorias = mostrarCategorias($conexion);

                            while ($row_categorias = mysqli_fetch_assoc($get_categorias)){

                                $idCategoria = $row_categorias['idCategoria'];

                                $nombreCategoria = $row_categorias['NombreCategoria'];

                                echo "<option value='$idCategoria'> $nombreCategoria </option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- Termina Categoría -->

                <!-- Nombre -->
                <div class="col">
                    <div align="left"><h5></i> Nombre</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fonts" viewBox="0 0 16 16">
                                <path d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z"/>
                            </svg>
                        </span>
                        <input type="text" name="nombrePublicacion" id="nombrePublicacion" class="form-control" placeholder="Programa de Televisión" required>
                    </div>
                </div>
            </div>
            <!-- Termina Nombre --> 

            <br>

            <!-- Descripción -->
            <div class="row">
                <div class="col">
                    <div align="left"><h5></i> Descripción</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                        </span>
                        <input type="text" name="descripcionPublicacion" id="descripcionPublicacion" class="form-control" placeholder="Trata sobre como..." required>
                    </div>
                </div>
                <!-- Termina Descripción -->

                <!-- Fecha -->
                <div class="col">
                    <div align="left"><h5></i> Fecha</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </span>
                        <input type="date" name="fecha" id="fecha" class="form-control" required>
                    </div>
                </div>
            </div>
            <!-- Termina Fecha -->

            <br>

            <!-- Imagen -->
            <div class="col">
                <h5 align="left"></i> Imagen</h5>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                            <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                        </svg>
                    </span>
                    <input type="file" name="img" id="img" class="form-control" required>
                </div>
            </div>                             
            <!-- Termina Imagen -->

            <br>

            <input name="insertar" value="Insertar Publicacion" type="submit" class="btn btn-warning form-control" style="border: black 2px solid">
        </form>
    </div>
    <div class="card-footer text-muted">
        <a href="publicaciones.php">Ir a las publicaciones</a>
    </div>
</div>

<?php include "../../includes/footer.php"; ?>

<?php } ?>

<?php
if(isset($_POST['insertar'])){

    //ID del admin que ha iniciado sesión
    $idAdmin = $_SESSION['idUsuario'];

    //Recogemos los datos introducidos en el formulario
    $categoria = $_POST['categoria'];

    $nombrePublicacion = $_POST['nombrePublicacion'];

    $descripcionPublicacion = $_POST['descripcionPublicacion'];

    $fecha = $_POST['fecha'];
    
    //Imagen
    $nombreImg = $_FILES['img']['name'];
    $ruta      = $_FILES['img']['tmp_name'];
    $destino   = "../../../img/publicaciones/" . $nombreImg;
        
    //Si guarda la imagen realizaremos la inserción
    if(move_uploaded_file($ruta, $destino)){
        
        $consulta = insertarPublicacion($conexion, $categoria, $idAdmin, $nombrePublicacion, $descripcionPublicacion, $fecha, $destino);
            
        if($consulta) {
            echo "<script>alert('Tu publicación se ha insertado correctamente.')</script>";

            echo "<script>window.open('publicaciones.php','_self')</script>"; 
        } else {
            echo "<script>alert('Tu publicación no se ha podido insertar.')</script>";
        
            echo "<script>window.open('publicaciones.php','_self')</script>"; 
        }
    }
}

?>   