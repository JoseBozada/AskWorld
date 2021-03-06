<?php
    //Incluimos el conector a la Base de datos 
    include "../../includes/Database.php";
    
    //Incluimos el fichero donde están las funciones
    include '../../includes/DAO/DAO_Usuarios.php';

?>

<div class="row">
	<div class="col-sm-12">
		<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered table-sm" id="TablaUsuarios">
				<thead>
					<tr style="text-align: center; border: black 1px solid; background: orange">
						<td>#</td>	
						<td>Usuario</td>
						<td>Nombre</td>
						<td>Apellido1</td>
						<td>Apellido2</td>
						<td>Email</td>
						<td>Imagen</td>
						<td>Fecha</td>
						<td>Dirección</td>
						<td>Teléfono</td>
						<td>Provincia</td>
						<td>Población</td>
						<td>DNI</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
				</thead>
				<tbody>
					<?php
						//Contador
						$i=0;

    						$consulta = mostrarUsuarios($conexion);
						
						//Recorreremos la tabla de los usuarios y mostraremos sus datos
						while($mostrar = mysqli_fetch_array($consulta)) {
							
							//Guardamos los datos que necesitamos
							$id_usuario = $mostrar['idUsuario'];

							$imagenUsuario = $mostrar['Imagen'];

							//Eliminamos la ruta de la imagen para mostrarla
							$imagen = str_replace("../", "", $imagenUsuario);

							//Aumentamos el contador
							$i++;
                			?>
					<tr style="text-align: center;">
						<td><strong><?php echo $i ?></strong></td>
						<td><strong><?php echo $mostrar['Usuario']; ?></strong></td>
						<td><strong><?php echo $mostrar['Nombre']; ?></strong></td>
						<td><strong><?php echo $mostrar['Apellido1']; ?></strong></td>
						<td><strong><?php echo $mostrar['Apellido2']; ?></strong></td>
						<td><strong><?php echo $mostrar['Email']; ?></strong></td>
						<td> <img src="../../../<?php echo $imagen; ?>" width="100" height="100"></td>
						<td><strong><?php echo $mostrar['FechaNacimiento']; ?></strong></td>
						<td><strong><?php echo $mostrar['Direccion']; ?></strong></td>
						<td><strong><?php echo $mostrar['Telefono']; ?></strong></td>
						<td><strong><?php echo $mostrar['Provincia']; ?></strong></td>
						<td><strong><?php echo $mostrar['Poblacion']; ?></strong></td>
						<td><strong><?php echo $mostrar['DNI']; ?></strong></td>
						<td>
						    <a class="btn btn-warning btn-sm" href="editarUsuario.php?id=<?php echo $id_usuario; ?>">
							<span class="fas fa-edit"></span>
						    </a>
						</td>
						<td> 
						    <a class="btn btn-danger btn-sm" onClick="return confirm('¿Estas seguro de que quieres eliminar este usuario?');" href="eliminarUsuario.php?id=<?php echo $id_usuario; ?>">
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
		$('#TablaUsuarios').DataTable({
			language : {
				url : "../../librerias/datatable/es_es.json"
			}
		});
	});
</script>
