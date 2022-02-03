<?php include "../includes/header.php" ?>

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

<br>

<?php include "../includes/footer.php" ?>

</body>
</html>

<?php
if(isset($_POST['submit'])){
    if(isset($_GET['token'])){
        $token = $_GET['token'];

        //Recogemos los datos introducidos en el formulario
        $nuevaPassword = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        //Ciframos las contraseñas para guardarlas en BD
        $pass = sha1($nuevaPassword);
        $cpass = sha1($cpassword);

        //Si las contraseñas coinciden actualizaremos la contraseña
        if($nuevaPassword === $cpassword){
            $consulta = ActualizarPasswordUsuario($conexion, $pass, $token);

            if($consulta){
                echo "<script>alert('Contraseña actualizada correctamente.')</script>"; 
                echo "<script>window.open('../sesion/login.php','_self')</script>";
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
