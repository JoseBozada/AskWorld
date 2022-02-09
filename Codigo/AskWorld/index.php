<?php include "includes/header.php" ?>

<!-- Breadcrumb -->
<div class="container">
    <div class="col-sm-12">
        <br>
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li>
                    <strong>Está en: </strong>
                    <a href="index.php?categoria=0"><span> Inicio</span></a>
                </li>
            </ol>
        </nav>  
    </div>
</div>
<!-- Termina Breadcrumb -->

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div>
            <?php

                include("includes/sidebar.php");

            ?>
        </div>
    </div>
    <div class="col-md-9">
        <div class="row text-center">
            <?php

                if(!isset($_GET['idPublicacion'])){

                $publicaciones = mostrarPublicaciones($conexion);
                              
                while($row_publicaciones = mysqli_fetch_assoc($publicaciones)){
                                    
                    if($_GET['categoria']=="0"){
                                
                        //Consulta de publicaciones
                        $idPublicaciones = $row_publicaciones['idPublicacion'];

                        $get_publicaciones_id = mostrarPublicacionesPorID($conexion, $idPublicaciones);

                        $row_publicaciones_id = mysqli_fetch_assoc($get_publicaciones_id);
                                        
                        $publicaciones_id = $row_publicaciones_id['idPublicacion'];

                        $publicaciones_nombre = $row_publicaciones_id['NombrePublicacion'];

                        $publicaciones_img = $row_publicaciones_id['ImagenPublicacion'];

                        $imagen = str_replace("../", "", $publicaciones_img);
                                                                        
                        //Consulta de categorias
                        $idCategorias = $row_publicaciones_id['idCategoria'];

                        $get_categorias = mostrarCategoriasPorID($conexion, $idCategorias);

                        $row_categorias = mysqli_fetch_assoc($get_categorias);
                                    
                        $categorias_id = $row_categorias['idCategoria'];
                                        
                        $categorias_nombre = $row_categorias['NombreCategoria'];
                                  
                        echo "
                                    
                            <div class='col-md-4 col-sm-6 center-responsive'>
                                
                                <div>

                                    <p class='bg-warning text-center text-uppercase' style=' border: 2.0px solid black'>$categorias_nombre</p>
                        
                                    <img class='img-thumbnail' style='border: 2.5px solid black' src='$imagen'>
                                            
                                    <div>
                                            
                                        <div>
                                                    
                                            <h4 class='text-center'>
                                                    
                                                $publicaciones_nombre
                                                    
                                            </h4>
                                                    
                                            <p>
                                                    
                                                <a class='btn btn-success' href='detallesPublicacion.php?publicacion=$idPublicaciones'>
                                                        
                                                    Ver Detalles
                                                            
                                                </a>
                                                    
                                            </p>
                                                
                                        </div>
                                            
                                    </div>
                                    
                                </div>
                                        
                            </div>
                                  
                            ";
                        } if($_GET['categoria']==$row_publicaciones['idCategoria']){
                                    
                            //Consulta de publicaciones
                            $idPublicaciones = $row_publicaciones['idPublicacion'];

                            $get_publicaciones_id = mostrarPublicacionesPorID($conexion, $idPublicaciones);

                            $row_publicaciones_id = mysqli_fetch_assoc($get_publicaciones_id);
                                            
                            $publicaciones_id = $row_publicaciones_id['idPublicacion'];

                            $publicaciones_nombre = $row_publicaciones_id['NombrePublicacion'];

                            $publicaciones_img = $row_publicaciones_id['ImagenPublicacion'];

                            $imagen = str_replace("../", "", $publicaciones_img);
                                                                            
                            //Consulta de categorias
                            $idCategorias = $row_publicaciones_id['idCategoria'];

                            $get_categorias = mostrarCategoriasPorID($conexion, $idCategorias);

                            $row_categorias = mysqli_fetch_assoc($get_categorias);
                                            
                            $categorias_id = $row_categorias['idCategoria'];
                                            
                            $categorias_nombre = $row_categorias['NombreCategoria'];
                                        
                            echo "
                                        
                                <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                                    <div class='product'>
                                        
                                        <p class='bg-warning text-center text-uppercase' style=' border: 2.0px solid black'>$categorias_nombre</p>
                    
                                        <img class='img-thumbnail' style='border: 2.5px solid black' src='$imagen'>
                                            
                                        <div>
                                            
                                            <div class='text'>
                                                    
                                                <h4 class='text-center'>
                                                    
                                                    <strong>$publicaciones_nombre</strong>
                                                    
                                                </h4>

                                                <p>
                                                    
                                                    <a class='btn btn-success' href='detallesPublicacion.php?publicacion=$idPublicaciones'>
                                                            
                                                        Ver Detalles
                                                                
                                                    </a>

                                                </p>

                                            </div>
                                            
                                        </div>
                                    
                                    </div>
                                        
                                </div>
                                
                            ";
                            }
                        }
                    }    
                ?>
            </div>
        </div>
    </div>
</div>

<br>

<?php include "includes/footer.php" ?>

</body>
</html>