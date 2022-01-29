<?php 
	//Incluimos el conector a la Base de datos
	include '../../zonaAdmin/includes/Database.php';

	//Incluimos el fichero donde están las funciones
	include '../../zonaAdmin/includes/DAO/DAO_Usuarios.php';

	//Recogemos los datos introducidos en el formulario
	$usuario = $_POST["usuario"];

	$password = sha1($_POST["password"]);

	//Consultamos los datos del Login
	$consulta = consultaUsuario($conexion, $usuario, $password);

	if (mysqli_num_rows($consulta)==1) {
		$fila = mysqli_fetch_assoc($consulta);
		crearSesion($fila);
		echo "<script>alert('Iniciando sesión')</script>";
		echo "<script>window.open('../../index.php?categoria=0','_self')</script>";
	} else {
		echo "<script>alert('Error al iniciar sesión, datos incorrectos.')</script>"; 
		echo "<script>window.open('../../login.php','_self')</script>";
	}
?>
