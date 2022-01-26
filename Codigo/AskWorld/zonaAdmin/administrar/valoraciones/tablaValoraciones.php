<?php
    //Incluimos el conector a la Base de datos 
    include "../../includes/Database.php";
    
    //Incluimos los ficheros donde están las funciones
    include "../../includes/DAO/DAO_Valoraciones.php";
	include "../../includes/DAO/DAO_Publicaciones.php";
	include "../../includes/DAO/DAO_Usuarios.php";
	

?>

<div class="row">
	<div class="col-sm-12">
		<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered table-sm" id="TablaValoraciones">
				<thead>
					<tr style="text-align: center; border: black 1px solid; background: orange">
						<td>#</td>
						<td>Publicación</td>
						<td>Usuario</td>
						<td>Valoración</td>
						<td>Eliminar</td>
					</tr>
				</thead>
				<tbody>
					<?php
						//Contador
						$i=0;

    					$consulta = mostrarValoraciones($conexion);
    					
						//Recorreremos la tabla de las Valoraciones y mostraremos sus datos
	                    while($mostrar = mysqli_fetch_array($consulta)) {

	                    $id_valoracion = $mostrar['idValoracion'];

						$valoracion = $mostrar['valoracion'];

						//Consulta de publicaciones: Necesitamos el nombre para mostrarlo en la tabla.
                        $idPublicaciones = $mostrar['idPublicacion'];

                        $get_publicaciones = mostrarPublicacionesPorID($conexion, $idPublicaciones);

                        $row_publicaciones = mysqli_fetch_assoc($get_publicaciones);

                        $nombrePublicacion = $row_publicaciones['NombrePublicacion'];

                        //Consulta de usuarios: Necesitamos el nombre para mostrarlo en la tabla.
                        $idUsuario = $mostrar['idUsuario'];

                        $get_usuarios = mostrarUsuariosPorID($conexion, $idUsuario);

                        $row_usuarios = mysqli_fetch_assoc($get_usuarios);

                        $nombreUsuario = $row_usuarios['Usuario'];

						//Aumentamos el contador
						$i++;
                	?>
					<tr style="text-align: center;">
						<td><strong><?php echo $i; ?></strong></td>
						<td><strong><?php echo $nombrePublicacion ?></strong></td>
						<td><strong><?php echo $nombreUsuario ?></strong></td>
						<td><strong><?php echo $valoracion ?></strong><i class="fas fa-star"></i></td>
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

<script type="text/javascript">
	$(document).ready(function(){
		$('#TablaValoraciones').DataTable({
			language : {
				url : "../../librerias/datatable/es_es.json"
			}
		});
	});
</script>