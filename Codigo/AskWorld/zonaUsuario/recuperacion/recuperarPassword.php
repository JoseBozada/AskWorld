<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php 

	//Incluimos los ficheros para mandar correos
	include '../../zonaAdmin/librerias/PHPMailer/src/Exception.php';
	include '../../zonaAdmin/librerias/PHPMailer/src/PHPMailer.php';
	include '../../zonaAdmin/librerias/PHPMailer/src/SMTP.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;	 

?>

<?php include "../includes/header.php" ?>

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
					<li class="breadcrumb-item active" aria-current="page">
						<span> Recuperar Contraseña</span>        
					</li>
				</ol>
			</nav>
		</div>
	</div>
</div>
<!-- Termina Breadcrumb -->

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
			<p class="text-center">¿Ya tienes una cuenta? <a href="../sesion/login.php">Inicia sesión.</a></p>

		</form>
	</article>
</div>   

<br>  

<?php include "../includes/footer.php" ?>

<script src="../../js/validacionRecuperarPassword.js"></script>

<?php
if(isset($_POST['submit'])){
	
	//IP
	$HOST = $_SERVER('SERVER_ADDR');

	//Recogemos el correo introducido en el formulario
	$email = $_POST['email'];

	//Hacemos la consulta y guardamos los datos que necesitamos del usuario
	$consulta = consultaCorreoUsuario($conexion, $email);

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
	$mail->Password = 'Ask901201@World111';

	//Agregar destinatario
	$mail->AddAddress($_POST['email']);
	$mail->Subject = "Recuperar contraseña"; //Asunto
	$mail->Body = "Hola, $usuario. Haz click aquí para resetear tu contraseña https://".$HOST."Codigo/AskWorld/zonaUsuario/recuperacion/actualizarPassword.php?token=$token";
	$sender_email = "FROM: AskWorld2022@gmail.com";

	//Avisar si fue enviado o no y dirigir al login
	if ($mail->Send()) {
		echo'<script type="text/javascript">
		alert("Correo enviado correctamente");
		</script>';
		echo "<script>window.open('../sesion/login.php','_self')</script>"; 
	} else {
		echo'<script type="text/javascript">
		alert("Fallo al enviar el correo, inténtalo de nuevo.");
		</script>';
		echo "<script>window.open('recuperarPassword.php','_self')</script>"; 
	}
}
?>
