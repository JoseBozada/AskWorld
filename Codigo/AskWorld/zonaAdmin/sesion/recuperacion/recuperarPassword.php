<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Recuperar Contraseña</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
	<br>
	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Recuperar tu contraseña</h4>
			<p class="text-center">Introduce tu correo.</p>
			<form method="POST" class="needs-validation">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
									<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
								</svg>
							</span>
							<input type="email" name="email" id="email" class="form-control" placeholder="Correo Electrónico" required>
							<div class="invalid-feedback">El correo no es válido.</div>
						</div>
					</div>	
				</div>
				<br>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-block"> Recuperar contraseña</button>
				</div>
				<br>
				<p class="text-center">¿Ya tienes una cuenta? <a href="../../login.php">Inicia sesión.</a></p>
			</form>
		</article>
	</div> 

	<script src="../../../js/validacionRecuperarPassword.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	
	//Incluimos el conector a la Base de datos
	include '../../includes/Database.php';

	//Incluimos el fichero donde están las funciones
	include '../../includes/DAO/DAO_Admin.php';

	//Incluimos el fichero para mandar correos
	include '../../librerias/PHPMailer/PHPMailerAutoload.php';
	
	//Recogemos el correo introducido en el formulario
	$email = $_POST['email'];

	//Hacemos la consulta y guardamos los datos que necesitamos del usuario
	$consulta = consultaCorreoAdmin($conexion, $email);

	$datos = mysqli_fetch_array($consulta);

	$usuario = $datos['Usuario'];

	$token = $datos['Token'];

	//Create a new PHPMailer instance
	$mail = new PHPMailer();
	$mail->IsSMTP();
	
	//Configuracion servidor mail
	$mail->From = "AskWorld2022@gmail.com"; //remitente
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls'; //seguridad
	$mail->Host = "smtp.gmail.com"; // servidor smtp
	$mail->Port = 587; //puerto

	//Email y contraseña del correo que manda el mensaje
	$mail->Username ='AskWorld2022@gmail.com';
	$mail->Password = 'AskWorld@213';

	//Agregar destinatario
	$mail->AddAddress($_POST['email']);
	$mail->Subject = "Recuperar contraseña"; //Asunto
	$mail->Body = "Hola, $usuario. Haz click aquí para resetear tu contraseña http://localhost/askworld/zonaAdmin/sesion/recuperacion/actualizarPassword.php?token=$token";
	$sender_email = "FROM: AskWorld2022@gmail.com";

	//Avisar si fue enviado o no y dirigir al login
	if ($mail->Send()) {
		echo "<script>alert('Correo enviado correctamente.')</script>"; 
		echo "<script>window.open('../../login.php','_self')</script>"; 
	} else {
		echo "<script>alert('Fallo al enviar el correo, inténtalo de nuevo.')</script>";
		echo "<script>window.open('recuperarPassword.php','_self')</script>"; 
	}
}
?> 
