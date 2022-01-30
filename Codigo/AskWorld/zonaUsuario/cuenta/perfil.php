<?php include "../includes/header.php"; ?>

<?php
    //Esto impedirá que se acceda sin iniciar sesión.
    if(!isset($_SESSION['Usuario'])){
        
        echo "<script>alert('Debes iniciar sesión para entrar aquí.')</script>";

        echo "<script>window.open('../sesion/login.php','_self')</script>";
        
    }else{
?>

<?php

	//Guardamos el id del Usuario logeado
	$idUsuario = $_SESSION['idUsuario'];
        
	//Mostramos los datos del Usuario por su ID y guardamos los que necesitamos
    $get_usuario = mostrarUsuariosPorID($conexion, $idUsuario);
        
    $row_edit = mysqli_fetch_assoc($get_usuario);

    $Usuario = $row_edit['Usuario'];

	$Contraseña = $row_edit['Contrasena'];

	$Nombre = $row_edit['Nombre'];

	$Apellido = $row_edit['Apellido1'];

	$Apellido2 = $row_edit['Apellido2'];

	$Correo = $row_edit['Email'];

	$Imagen = $row_edit['Imagen'];

	$imagenPerfil = str_replace("../", "", $Imagen);

	$Fecha = $row_edit['FechaNacimiento'];

	$Direccion = $row_edit['Direccion'];

	$Telefono = $row_edit['Telefono'];

	$Provincia = $row_edit['Provincia'];

	$Poblacion = $row_edit['Poblacion'];

	$Dni = $row_edit['DNI'];

?>

<br>
<form id="formularioPerfil" enctype="multipart/form-data" method="post">
	<div class="col-sm-12">
		<div class="text-center">
			<img src="../../<?php echo $imagenPerfil; ?>"  class="avatar rounded-circle img-thumbnail" alt="avatar" style="max-width: 100px; max-height: 100px;">
			<h6>Imagen de perfil</h6>
			<input type="file" id="img" name="img">
		</div>
		<div class="container">
			<br>    
			<div class="row">  
				<!-- Usuario -->
				<div class="col">
					<div align="left"><h5> Usuario</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
								<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
							</svg>
						</span>
						<input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $Usuario; ?>" autofocus>
					</div>
				</div>
				<!-- Termina Usuario -->

				<!-- Nombre -->
				<div class="col">
					<div align="left"><h5> Nombre</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fonts" viewBox="0 0 16 16">
								<path d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z"/>
							</svg>
						</span>
						<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $Nombre; ?>">
					</div>
				</div>
			</div>
			<!-- Termina Nombre --> 

			<br>

			<!-- Contraseña -->
			<div class="row">
				<div class="col">
					<div align="left"><h5> Contraseña</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
								<path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
							</svg>
						</span>
						<input type="password" name="password" id="password" class="form-control" value="<?php echo $Contraseña; ?>" readonly>
					</div>
				</div>
				<!-- Termina Contraseña -->

				<!-- Apellido -->
				<div class="col">
					<div align="left"><h5> Apellido</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fonts" viewBox="0 0 16 16">
								<path d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z"/>
							</svg>
						</span>
						<input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $Apellido; ?>">
					</div>
				</div>
			</div>
			<!-- Termina Apellido -->

			<br>

			<!-- Dirección -->
			<div class="row">
				<div class="col">
					<div align="left"><h5> Dirección</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
								<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
								<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg>
						</span>
						<input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $Direccion; ?>">
					</div>
				</div>
				<!-- Termina Dirección -->

				<!-- Apellido 2 -->
				<div class="col">
					<div align="left"><h5> Apellido 2</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fonts" viewBox="0 0 16 16">
								<path d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z"/>
							</svg>
						</span>
						<input type="text" name="apellido2" id="apellido2" class="form-control" value="<?php echo $Apellido2; ?>">
					</div>
				</div>
			</div>
			<!-- Termina Apellido 2 -->

			<br>

			<!-- Correo -->
			<div class="row">
				<div class="col">
					<div align="left"><h5> Correo</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
								<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
							</svg>
						</span>
						<input type="email" name="correo" id="correo" class="form-control" value="<?php echo $Correo; ?>">
					</div>
				</div>
				<!-- Termina Correo -->

				<!-- Fecha -->
				<div class="col">
					<div align="left"><h5> Fecha</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-fill" viewBox="0 0 16 16">
								<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z"/>
							</svg>
						</span>
						<input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $Fecha; ?>">
					</div>
				</div>
			</div>
			<!-- Termina Fecha -->

			<br>

			<!-- Provincia -->
			<div class="row">
				<div class="col">
					<div align="left"><h5> Provincia</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
							</svg>
						</span>
						<select name="provincia" id="provincia" class="form-select" >
							<option value="<?php echo $Provincia; ?>"><?php echo $Provincia; ?></option>
							<option value="Melilla">Melilla</option>
							<option value="Ceuta">Ceuta</option>
							<option value="Madrid">Madrid</option>
						</select>
					</div>
				</div>
				<!-- Termina Provincia -->

				<!-- Población -->
				<div class="col">
					<div align="left"><h5> Población</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
								<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
								<path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
								<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
							</svg>
						</span>
						<input type="text" name="poblacion" id="poblacion" class="form-control" value="<?php echo $Provincia; ?>" readonly>
					</div>
				</div>
			</div>
			<!-- Termina Población -->

			<br>

			<!-- Teléfono -->
			<div class="row">
				<div class="col">
					<div align="left"><h5> Teléfono</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
							</svg>
						</span>
						<input type="number" name="telefono" id="telefono" class="form-control" value="<?php echo $Telefono; ?>">
					</div>
				</div>
				<!-- Termina Teléfono -->

				<!-- DNI -->
				<div class="col">
					<div align="left"><h5> DNI</h5></div>
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
								<path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
								<path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
							</svg>
						</span>
						<input type="text" name="dni" id="dni" class="form-control" value="<?php echo $Dni; ?>" readonly>
					</div>
				</div>
			</div>
			<!-- Termina DNI -->

			<!-- Actualizar y eliminar -->
			<div class="form-group">
				<div align="center" class="col-12">
					<br>
					<button class="btn btn-lg btn-success" name="actualizar" type="submit"><i class="fas fa-user-edit"></i> Actualizar Datos
					</button>

					<a style="color: white; text-decoration:none;" class="btn btn-lg btn-danger" onClick="return confirm('¿Estas seguro de que quieres eliminar tu cuenta?');" href="eliminarCuenta.php?id=<?php echo $idUsuario; ?>"><i class="fas fa-trash-alt"></i> Eliminar Cuenta</a> 
			</div>
			<!-- Termina Actualizar y eliminar -->
		</div>	
	</div>
</form>
<br>

<?php include "../includes/footer.php"; ?>

<?php } ?>

<?php
if(isset($_POST['actualizar'])){

    //Recogemos los datos del formulario
    $usuario = $_POST['usuario'];

    $nombre = $_POST['nombre'];

    $apellido1 = $_POST['apellido'];

    $apellido2 = $_POST['apellido2'];

    $email = $_POST['correo'];

    $fecha = $_POST['fecha'];

    $direccion = $_POST['direccion'];

    $telefono = $_POST['telefono'];

    $provincia = $_POST['provincia'];

    $poblacion = $_POST['poblacion'];

	//Si el usuario elige una foto nueva se borrará la anterior, en caso contrario se mantendrá la original.
	if ($_FILES["img"]["name"] != '') {
		
		if(is_uploaded_file($_FILES["img"]["tmp_name"])) {
			
			$ruta= "../../img/usuarios/".$_FILES["img"]["name"];
			
			move_uploaded_file($_FILES["img"]["tmp_name"], $ruta);
			
			echo "<script>alert('Actualizando la cuenta...')</script>";
			
			unlink($Imagen);
			
			$consulta = ActualizarUsuario($conexion, $usuario, $nombre, $apellido1, $apellido2, $email, $ruta, $fecha, $direccion, $telefono, $provincia, $poblacion, $idUsuario);
			
			echo "<script>alert('La cuenta se ha actualizado correctamente.')</script>";

			echo "<script>window.open('perfil.php','_self')</script>";

		} else {
			
			echo "<script>alert('No se puede actualizar tu cuenta.')</script>";
			
			echo "<script>window.open('perfil.php','_self')</script>";
		}
	
	}else{
		
		echo "<script>alert('Actualizando la cuenta...')</script>";
		
		$consulta = ActualizarUsuario($conexion, $usuario, $nombre, $apellido1, $apellido2, $email, $Imagen, $fecha, $direccion, $telefono, $provincia, $poblacion, $idUsuario);
		
		echo "<script>alert('La cuenta se ha actualizado correctamente.')</script>";

		echo "<script>window.open('perfil.php','_self')</script>";
	}
        
}
   
?>
