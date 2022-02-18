<?php
    //Incluimos el conector a la Base de datos 
    include "../../includes/Database.php";
    
    //Incluimos los ficheros donde están las funciones
    include "../../includes/DAO/DAO_Publicaciones.php";
    include "../../includes/DAO/DAO_Categorias.php";
    include "../../includes/DAO/DAO_Usuarios.php";
?>

<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered table-sm" id="TablaPublicaciones">
                <thead>
                    <tr style="text-align: center; border: black 1px solid; background: orange">
                        <td>#</td>
                        <td>Categoría</td>
                        <td>Usuario</td>
                        <td>Nombre</td>
                        <td>Descripción</td>
                        <td>Fecha</td>
                        <td>Imagen</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                </thead>
                <tbody>
                    <?php

			//Contador
			$i=0;

    			$consulta = mostrarPublicaciones($conexion);

			//Recorreremos la tabla de las publicaciones y mostraremos sus datos
	                while($mostrar = mysqli_fetch_assoc($consulta)) {

				//Consulta de categorias: Necesitamos el nombre para mostrarlo en la tabla.
				$idCategorias = $mostrar['idCategoria'];

				$get_categorias = mostrarCategoriasPorID($conexion, $idCategorias);

				$row_categorias = mysqli_fetch_assoc($get_categorias);

				$nombreCategoria = $row_categorias['NombreCategoria'];

				//Consulta de usuarios: Necesitamos el nombre para mostrarlo en la tabla.
				$idUsuario = $mostrar['idUsuario'];

				$get_usuarios = mostrarUsuariosPorID($conexion, $idUsuario);

				$row_usuarios = mysqli_fetch_assoc($get_usuarios);

				$nombreUsuario = $row_usuarios['Usuario'];

				//Guardamos los datos que necesitamos de la publicación
				$id_publicacion = $mostrar['idPublicacion'];

				$imagen_Publicacion = $mostrar['ImagenPublicacion'];

				//Eliminamos la ruta de la imagen
				$imagenPublicacion = str_replace("../", "", $imagen_Publicacion);

				$nombrePublicacion = $mostrar['NombrePublicacion'];

				$descripcionPublicacion = $mostrar['DescripcionPublicacion'];

				$fechaPublicacion = $mostrar['FechaPublicacion'];

				//Aumentamos el contador
				$i++;
                	?>
                    <tr style="text-align: center;">
                        <td><strong><?php echo $i ?></strong></td>
			<td><strong><?php echo $nombreCategoria ?></strong></td>
                        <td><strong><?php echo $nombreUsuario ?></strong></td>
                        <td>
                            <strong>
                                <a class="text-dark" style="text-decoration:none" href="../../../detallesPublicacion.php?publicacion=<?php echo $id_publicacion; ?>" target="_blank">
                                    <?php echo $nombrePublicacion ?>
                                </a>
                            </strong>
                        </td>
                        <td><strong><?php echo $descripcionPublicacion ?></strong></td>
                        <td><strong><?php echo $fechaPublicacion ?></strong></td>
                        <td><img src="../../../<?php echo $imagenPublicacion; ?>" width="100" height="80"></td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="editarPublicacion.php?id=<?php echo $id_publicacion; ?>">
                                <span class="fas fa-edit"></span>
                            </a>
                        </td>
                        <td> 
                            <a class="btn btn-danger btn-sm" onClick="return confirm('¿Estas seguro de que quieres eliminar esta publicación?');" href="eliminarPublicacion.php?id=<?php echo $id_publicacion; ?>">
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
        $('#TablaPublicaciones').DataTable({
            language : {
                url : "../../librerias/datatable/es_es.json"
            }
        });
    });
</script>
