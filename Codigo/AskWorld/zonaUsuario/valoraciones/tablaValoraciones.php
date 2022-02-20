<?php
    	//Incluimos el conector a la Base de datos e iniciamos la sesión
    	include "../../zonaAdmin/includes/Database.php";
    	session_start();
    
	//Incluimos los ficheros donde están las funciones
    	include "../../zonaAdmin/includes/DAO/DAO_Valoraciones.php";
	include "../../zonaAdmin/includes/DAO/DAO_Publicaciones.php";
?>

<div class="row">
	<div class="col-sm-12">
		<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered table-sm" id="TablaValoraciones">
				<thead>
					<tr style="text-align: center; border: black 1px solid; background: orange">
						<td>#</td>
						<td>Publicación</td>
						<td>Imagen Publicación</td>
						<td>Valoración</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
				</thead>
				<tbody>
					<?php
						//Contador
						$i=0;

						$idUsuario = $_SESSION['idUsuario'];

    						$consulta = mostrarValoracionesPorUsuario($conexion, $idUsuario);
    					
						//Recorreremos la tabla de las Valoraciones y mostraremos sus datos
	                    			while($mostrar = mysqli_fetch_array($consulta)) {

	                    				$id_valoracion = $mostrar['idValoracion'];

							$valoracion = $mostrar['valoracion'];

							//Consulta de publicaciones: Necesitamos el nombre y la imagen para mostrarlo en la tabla.
                       					$idPublicacion = $mostrar['idPublicacion'];

							$get_publicaciones = mostrarPublicacionesPorID($conexion, $idPublicacion);

							$row_publicaciones = mysqli_fetch_assoc($get_publicaciones);

							$nombrePublicacion = $row_publicaciones['NombrePublicacion'];

							$imgPublicacion = $row_publicaciones['ImagenPublicacion'];

							//Eliminamos la ruta de la imagen

							$imagenPublicacion = str_replace("../", "", $imgPublicacion);

							//Aumentamos el contador
							$i++;
                			?>
					<tr style="text-align: center;">
						<td><strong><?php echo $i; ?></strong></td>
						<td>
						    <strong>
							<a class="text-dark" style="text-decoration:none" href="../../detallesPublicacion.php?publicacion=<?php echo $idPublicacion; ?>">
							    <?php echo $nombrePublicacion ?>
							</a>
						    </strong>
                        			</td>
                        			<td><img src="../../<?php echo $imagenPublicacion; ?>" width="100" height="80"></td>
						<td><strong><?php echo $valoracion ?></strong><i class="fas fa-star"></i></td>
						<td>
							<a class="btn btn-warning btn-sm" href="editarValoracion.php?id=<?php echo $id_valoracion; ?>">
								<span class="fas fa-edit"></span>
							</a>
						</td>
						<td style="text-align: center;"> 
							<a class="btn btn-danger btn-sm" onClick="return confirm('¿Estas seguro de que quieres eliminar esta valoración?');" href="eliminarValoracion.php?id=<?php echo $id_valoracion; ?>">
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

<br>

<script type="text/javascript">
	$(document).ready(function(){
		$('#TablaValoraciones').DataTable({
			language : {
				url : "../../zonaAdmin/librerias/datatable/es_es.json"
			}
		});
	});
</script>
