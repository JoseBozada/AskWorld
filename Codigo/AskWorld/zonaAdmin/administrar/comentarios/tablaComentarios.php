<?php
    //Incluimos el conector a la Base de datos 
    include "../../includes/Database.php";
    
    //Incluimos los ficheros donde están las funciones
    include "../../includes/DAO/DAO_Comentarios.php";
    include "../../includes/DAO/DAO_Usuarios.php";
    include "../../includes/DAO/DAO_Publicaciones.php";

?>

<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered table-sm" id="TablaComentarios">
                <thead>
                    <tr style="text-align: center; border: black 1px solid; background: orange">
                        <td>#</td>
                        <td>Usuario</td>
                        <td>Publicación</td>
                        <td>Imagen Publicación</td>
                        <td>Comentario</td>
                        <td>Fecha</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                	//Contador
			$i=0;
                        
    			$consulta = mostrarComentarios($conexion);

			//Recorreremos la tabla de los comentarios y mostraremos sus datos
	                while($mostrar = mysqli_fetch_assoc($consulta)) {

				//Consulta de usuarios: Necesitamos el nombre para mostrarlo en la tabla.
				$idUsuario = $mostrar['idUsuario'];

				$get_usuarios = mostrarUsuariosPorID($conexion, $idUsuario);

				$row_usuarios = mysqli_fetch_assoc($get_usuarios);

				$nombreUsuario = $row_usuarios['Usuario'];

				//Consulta de publicaciones: Necesitamos el nombre y la imagen para mostrarlo en la tabla.
				$idPublicacion = $mostrar['idPublicacion'];

				$get_Publicaciones = mostrarPublicacionesPorID($conexion, $idPublicacion);

				$row_Publicacion = mysqli_fetch_assoc($get_Publicaciones);

				$nombrePublicacion = $row_Publicacion['NombrePublicacion'];

				$imagen_Publicacion = $row_Publicacion['ImagenPublicacion'];

				//Eliminamos la ruta de la imagen
				$imagenPublicacion = str_replace("../", "", $imagen_Publicacion);

				//Guardamos el ID del comentario en una variable
				$id_comentario = $mostrar['idComentario'];

				//Aumentamos el contador
				$i++;
                	?>
                    <tr style="text-align: center;">
                        <td><strong><?php echo $i ?></strong></td>
			<td><strong><?php echo $nombreUsuario ?></strong></td>
                        <td>
                            <strong>
                                <a class="text-dark" style="text-decoration:none" href="../../../detallesPublicacion.php?publicacion=<?php echo $idPublicacion; ?>" target="_blank">
                                    <?php echo $nombrePublicacion ?>
                                </a>
                            </strong>
                        </td>
                        <td><img src="../../../<?php echo $imagenPublicacion; ?>" width="100" height="80"></td>
                        <td><strong><?php echo $mostrar['Comentario'] ?></strong></td>
                        <td><strong><?php echo $mostrar['Fecha'] ?></strong></td>
                        <td>
				<a class="btn btn-warning btn-sm" href="editarComentario.php?id=<?php echo $id_comentario; ?>">
					<span class="fas fa-edit"></span>
				</a>
			</td>
			<td> 
				<a class="btn btn-danger btn-sm" onClick="return confirm('¿Estas seguro de que quieres eliminar este comentario?');" href="eliminarComentario.php?id=<?php echo $id_comentario; ?>">
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
        $('#TablaComentarios').DataTable({
            language : {
                url : "../../librerias/datatable/es_es.json"
            }
        });
    });
</script>
