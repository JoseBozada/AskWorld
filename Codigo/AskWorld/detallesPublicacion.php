<?php include "includes/header.php" ?>

<?php

	//Recogemos el ID de la URL
	$idURL = $_GET['publicacion'];

	$get_publicacion = mostrarPublicacionesPorID($conexion, $idURL);

	$row_publicacion = mysqli_fetch_assoc($get_publicacion);

	$idPublicacion = $row_publicacion['idPublicacion'];

	$nombrePublicacion = $row_publicacion['NombrePublicacion'];

	$descripcionPublicacion = $row_publicacion['DescripcionPublicacion'];

	$fechaPublicacion = $row_publicacion['FechaPublicacion'];

	$imagenPublicacion = $row_publicacion['ImagenPublicacion'];

	//Eliminamos la ruta antigua de la imagen
	$imagen = str_replace("../", "", $imagenPublicacion);

	//Consulta de usuarios: Necesitamos el nombre para mostrarlo.
    $id_Usuario =  $row_publicacion['idUsuario'];

    $get_usuarios = mostrarUsuariosPorID($conexion, $id_Usuario);

    $row_usuarios = mysqli_fetch_assoc($get_usuarios);

    $nombreUsuario = $row_usuarios['Usuario'];

    //Consulta de categorías: Necesitamos el nombre para mostrarlo.
    $id_categoria =  $row_publicacion['idCategoria'];

    $get_categorias = mostrarCategoriasPorID($conexion, $id_categoria);

    $row_categorias = mysqli_fetch_assoc($get_categorias);

    $nombreCategoria = $row_categorias['NombreCategoria'];

	//Si la publicacion coincide con el ID mostrará el contenido, sino nos devolverá al index.
	if($_GET['publicacion']=="$idPublicacion"){

?>

	<!-- Breadcrumb -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item">
				    	<strong>Está en: </strong>
				    	<a href="index.php?categoria=0">
				    		<span> Inicio</span>
				    	</a>
				    </li>
				    <?php
						echo " 
					   		<li class='breadcrumb-item'>
							    <a style='text-decoration: none' href='index.php?categoria=$id_categoria'>
							    	<span>$nombreCategoria</span>
							    </a>
					    	</li>
					    ";
				    ?>
				    <li class="breadcrumb-item active" aria-current="page">
				    	<?php echo $nombrePublicacion ?>		
				    </li>
				  </ol>
				</nav>
            </div>
        </div>
    </div>
    <!-- Termina Breadcrumb -->

	<div class="container">
		<p class="fs-4 lh-base text-center bg-warning text-uppercase" style="border: 2.5px solid black"><?php echo $nombrePublicacion ?></p>
		<div class="row">
			<div class="col-md-3">
				<img class="img-thumbnail" src="<?php echo $imagen ?>" width="100%" style="border: 2.5px solid black">
			</div>
			<div class="col-md-9">
				<br>
				<p class="bg-warning fs-4 text-center text-uppercase" style="border: 2.5px solid black">Información</p>
				<div>
					<p class="fs-4 lh-base" style="border: 2.5px solid black"><?php echo $descripcionPublicacion ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<br>
				<p class="bg-warning fs-4 text-center text-uppercase" style="border: 2.5px solid black">Publicado por</p>
				<p class="fs-4 lh-base text-center" style="border: 2.5px solid black"><?php echo $nombreUsuario ?></p>

				<p class="bg-warning fs-4 text-center text-uppercase" style="border: 2.5px solid black">Fecha Publicación</p>
				<p class="fs-4 lh-base text-center" style="border: 2.5px solid black"><?php echo $fechaPublicacion ?></p>	
			</div>
			<?php
				if(isset($_SESSION['Usuario'])){
			?>
			<div class="col-md-9">
				<p class="bg-warning fs-4 text-center text-uppercase" style="border: 2.5px solid black">Comentar</p>
				<form name="formularioComentar" method="post">
					<div align="center">
						<div class="form-floating">
							<textarea class="form-control" name="comentario" id="comentario" required></textarea>
							<label for="floatingTextarea">Deja tu comentario aquí.</label>
						</div>
						<br>
						<input name="comentar" value="Enviar comentario" type="submit" class="btn btn-success form-control" style="border: black 2px solid">
					</div>
				</form>
			</div>
			<?php
				}else {
			?>
			<div class="col-md-9">
				<p class="bg-warning fs-4 text-center text-uppercase" style="border: 2.5px solid black">Comentar</p>
				<div align="center">
					<div class="form-floating">
						<h3>Para comentar necesita una cuenta</h3>
						<div class="form-group">
							<div class="col-12">
								<br>
								
								<a style="color: white; text-decoration:none;" href="login.php" class="btn btn-lg btn-success"><i class="fas fa-sign-in-alt"></i>  Iniciar Sesión</a>

								<a style="color: white; text-decoration:none;" href="registro.php" class="btn btn-lg btn-danger"><i class="fas fa-user-plus"></i> Registrarme</a>  
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
				}
			?>
		</div>
		<br>
		<div class="row">
		<?php
			if(isset($_SESSION['Usuario'])){
		?>
			<div class="col-md-3">
				<p class="bg-warning fs-4 text-center text-uppercase" style="border: 2.5px solid black">Valoración</p>
				<form name="formularioValorar" method="POST">
					<p class="clasificacion text-center">
						<input onclick="this.form.submit()" id="rat5"  name="rate" value="5" type="radio" class="star"<?php if ($media==5) echo "checked='checked'"; ?>/>

						<label class="star" for="rat5"></label>
						<input onclick="this.form.submit()" id="rat4"  name="rate" value="4" type="radio" class="star"<?php if ($media==4) echo "checked='checked'"; ?>/>
						
						<label class="star" for="rat4"></label> 
						<input onclick="this.form.submit()" id="rat3"  name="rate" value="3" type="radio" class="star"<?php if ($media==3) echo "checked='checked'"; ?>/>

						<label class="star" for="rat3"></label>
						<input onclick="this.form.submit()" id="rat2"  name="rate" value="2" type="radio" class="star"<?php if ($media==2) echo "checked='checked'"; ?>/>

						<label class="star" for="rat2"></label> 
						<input onclick="this.form.submit()" id="rat1" name="rate" value="1" type="radio" class="star"<?php if ($media==1) echo "checked='checked'"; ?>/>

						<label class="star" for="rat1"></label>
					</p>
				</form>
				<p class="fs-4 text-center">
					<?php

						$consulta = promedioValoracion($conexion, $idURL);

						$row_promedio = mysqli_fetch_assoc($consulta);

						$media = $row_promedio['round(AVG(valoracion),1)'];

						echo $media . ' <i class="fas fa-star" style="color: yellow"></i>'; 
					?>
				</p>
				<p class="fs-5 text-center">
					<?php

						$idUsuario = $_SESSION['idUsuario'];

						$consulta = buscarValoracionUsuario($conexion, $idURL, $idUsuario);

						$row_comentarios = mysqli_fetch_array($consulta);

						$valoracion = $row_comentarios['valoracion'];

						$idValoracion = $row_comentarios['idValoracion'];

						echo '<strong>Tu valoración es: </strong>' . $valoracion . ' <i class="fas fa-star" style="color: yellow;"></i>';
					?>
				</p>
				
			</div>
			<?php
				}else {

			?>
			<div class="col-md-3">
				<p class="bg-warning fs-4 text-center text-uppercase" style="border: 2.5px solid black">Valoración</p>
				<p class="fs-4 text-center">
					<?php

						$consulta = promedioValoracion($conexion, $idURL);

						$row_promedio = mysqli_fetch_assoc($consulta);

						$media = $row_promedio['round(AVG(valoracion),1)'];

						echo $media . ' <i class="fas fa-star" style="color: yellow;"></i>';
					?>
				</p>
			</div>
			<?php
				}
			?>
			<div class="col-md-9">
				<p class="bg-warning fs-4 text-center text-uppercase" style="border: 2.5px solid black">Comentarios</p>
				<div style="border: 2.5px solid black">
					<?php

						$consulta = mostrarComentariosPorPublicacion($conexion, $idURL);

						while($row_comentarios = mysqli_fetch_array($consulta)){

							$fecha = $row_comentarios['Fecha'];

							$comentario = $row_comentarios['Comentario'];

							//Consulta de usuarios: Necesitamos el nombre y la imagen para mostrarlo.
	                        $idUsuario = $row_comentarios['idUsuario'];

	                        $get_usuarios = mostrarUsuariosPorID($conexion, $idUsuario);

	                        $row_usuarios = mysqli_fetch_assoc($get_usuarios);

	                        $nombreUsuario = $row_usuarios['Usuario'];

							$ImagenUsuario = $row_usuarios['Imagen'];

							$imagen = str_replace("../", "", $ImagenUsuario);	
					?>
					<br>
					<div align="center">
						<img class="img-thumbnail" style="border: 2.5px solid black; max-width: 110px" src="<?php echo $imagen; ?>">
						<header>
							<strong><?php echo $nombreUsuario; ?></strong> - <span><?php echo $fecha; ?></span>
						</header>
					</div>
					<p class="text-center">
						<?php echo $comentario; ?>
					</p>
					<?php
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

<?php

//Si alguien le da a alguna estrella se insertará la valoración.
if(isset($_POST['rate'])){
	
	$rating = $_POST['rate'];

	$idUsuario = $_SESSION['idUsuario'];

	//Comprobamos si el usuario ya ha valorado la publicación, si lo hizo se actualizará.
    $comprueba = buscarValoracionUsuario($conexion, $idURL, $idUsuario);

    if(mysqli_num_rows($comprueba) == 1){
        
        $consulta = actualizarValoracion($conexion, $rating, $idValoracion);
        
        echo "<script>alert('Se ha actualizado tu valoración.')</script>";

        echo "<script>window.open('detallesPublicacion.php?publicacion=$idURL','_self')</script>";

    } else {
        
        $consulta = insertarValoracion($conexion, $idURL, $idUsuario, $rating);

        echo "<script>alert('Tu valoración se ha insertado correctamente.')</script>";

        echo "<script>window.open('detallesPublicacion.php?publicacion=$idURL','_self')</script>";

    }
}

//Si alguien le da al botón de comentar
if(isset($_POST['comentar'])){

	//Recogemos el comentario introducido
	$comentario = $_POST['comentario'];

	$idUsuario = $_SESSION['idUsuario'];

	$consulta = insertarComentario($conexion, $idUsuario, $idPublicacion, $comentario);

	if($consulta){

		echo "<script>alert('Tu comentario se ha mandado correctamente.')</script>";

		echo "<script>window.open('detallesPublicacion.php?publicacion=$idURL','_self')</script>";

	}else{

		echo "<script>alert('Tu comentario no se ha podido mandar.')</script>";

		echo "<script>window.open('detallesPublicacion.php?publicacion=$idURL','_self')</script>";

	}
}
			
//Si no encuentra un ID existente nos devolverá a la página inicial
} else{
	
	echo "<script>alert('No existe la publicación.')</script>";

	echo "<script>window.open('index.php?categoria=0','_self')</script>";
}

?>