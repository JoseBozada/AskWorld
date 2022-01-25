<?php
    //Incluimos el conector a la Base de datos 
    include "../../includes/Database.php";
    
    //Incluimos el fichero donde están las funciones
    include "../../includes/DAO/DAO_Categorias.php";

?>

<div class="row">
	<div class="col-sm-12">
		<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered table-sm" id="TablaCategorias">
				<thead>
					<tr style="text-align: center; border: black 1px solid; background: orange">
						<td>#</td>
						<td>Nombre</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
				</thead>
				<tbody>
					<?php
						//Contador
						$i=0;

    					$consulta = mostrarCategorias($conexion);
    					
						//Recorreremos la tabla de las categorias y mostraremos sus datos
	                    while($mostrar = mysqli_fetch_array($consulta)) {

	                    $id_categoria = $mostrar['idCategoria'];

						//Aumentamos el contador
						$i++;
                	?>
					<tr style="text-align: center;">
						<td><strong><?php echo $i; ?></strong></td>
						<td><strong><?php echo $mostrar['NombreCategoria'] ?></strong></td>
						<td style="text-align: center;">
							<a class="btn btn-warning btn-sm" href="editarCategoria.php?id=<?php echo $id_categoria; ?>">
								<span class="fas fa-edit"></span>
							</a>
						</td>
						<td style="text-align: center;"> 
							<a class="btn btn-danger btn-sm" onClick="return confirm('¿Estas seguro de que quieres eliminar esta Categoría?');" href="eliminarCategoria.php?id=<?php echo $id_categoria; ?>">
								<span class="fas fa-trash-alt"></span>
							</a> 
						</td>
					</tr>
					<?php
                		}
                	?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#TablaCategorias').DataTable({
			language : {
				url : "../../librerias/datatable/es_es.json"
			}
		});
	});
</script>