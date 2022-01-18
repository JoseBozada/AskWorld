<?php 
//Lo primero debemos incluir el fichero donde esta el conector a la base de datos
require '../includes/Database.php';

//Incluimos el fichero donde están las funciones
require '../includes/DAO/DAO_Admin.php';

//Recogemos las variables del formulario
$usuario = $_POST["usuario"];
$password = $_POST["password"];

//Consultamos los datos del Login
$consulta = consultaAdmin($conexion, $usuario, $password);

if (mysqli_num_rows($consulta)==1) {
	$fila = mysqli_fetch_assoc($consulta);
	crearSesion($fila);
	echo "<script>alert('Iniciando sesión')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
} else {
	echo "<script>alert('Error al iniciar sesión')</script>"; 
	echo "<script>window.open('../login.php','_self')</script>";
}
?>
