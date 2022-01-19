<?php
//Lo primero debemos incluir el fichero donde esta el conector a la base de datos
require '../../includes/Database.php';

//Incluimos el fichero donde están las funciones
require '../../includes/DAO/DAO_Admin.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Contraseña</title>
	<link rel="stylesheet" href="css/login.css">
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
	<h4 class="card-title mt-3 text-center">Nueva contraseña.</h4>
	<p class="text-center">Introduce tu nueva contraseña.</p>

	<form method="POST">
		<div class="form-group input-group">
			<div class="input-group-prepend">
            <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <span><i class="fa fa-lock"></i></span>
                    </span>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Nueva Contraseña" required>
                </div>
			</div>	
		</div>
        <br>
        <div class="form-group input-group">
			<div class="input-group-prepend">
            <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <span><i class="fa fa-lock"></i></span>
                    </span>
                    <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirma la Contraseña" required>
                </div>
			</div>	
		</div>
		<br>
		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-primary btn-block"> Actualizar contraseña</button>
		</div>
		
	</form>
	</article>
</div>     
</body>
</html>

<?php
if(isset($_POST['submit'])){
    if(isset($_GET['token'])){
        $token = $_GET['token'];

        //Recogemos los datos introducidos en el formulario
        $nuevaPassword = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        //Ciframos las contraseñas
        $pass = sha1($nuevaPassword);
        $cpass = sha1($cpassword);

        //Si las contraseñas coinciden actualizaremos la contraseña
        if($nuevaPassword === $cpassword){
            $consulta = ActualizarPasswordAdmin($conexion, $pass, $token);

            if($consulta){
                echo "<script>alert('Contraseña actualizada correctamente.')</script>"; 
                echo "<script>window.open('../../login.php','_self')</script>";
            } else {
                echo "<script>alert('Tu contraseña no se ha podido actualizar.')</script>"; 
                echo "<script>window.open('actualizarPassword.php?token=$token','_self')</script>";
            } 
        } else {
            echo "<script>alert('Las contraseñas no coinciden.')</script>"; 
        }
    } else {
        echo "<script>alert('No se ha encontrado el token.')</script>"; 
    }
}
?>
