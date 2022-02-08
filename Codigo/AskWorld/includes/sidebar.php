<div class="card">
	<div class="card-header text-center fs-5">
		<strong>Categorías</strong>
	</div>
	<div class="card-body">
		<ul class="nav nav-pills flex-column mb-auto">
      	<?php  
        
	        $get_categorias = mostrarCategorias($conexion);

	        while($row_categorias=mysqli_fetch_array($get_categorias)){
	            
	            $idCategoria = $row_categorias['idCategoria'];
	            
	            $nombreCategoria = $row_categorias['NombreCategoria'];

	            echo "
	                <li>
	                    <a href='index.php?categoria=$idCategoria'>$nombreCategoria</a>
	                </li>
	            
	            ";
	        }
        ?>
        </ul>
    </div>
</div>

<br>

