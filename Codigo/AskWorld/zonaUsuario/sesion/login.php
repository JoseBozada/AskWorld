	<?php include "../includes/header.php" ?>

	<br>

	<div class="text-center">
		<div class="card-body">
			<img src="../../img/Login.jpeg" width="200" height="100" class="img-thumbnail" style="border-radius: 20px;">
			<article class="card-body mx-auto" style="max-width: 400px;">
				<form action="comprobarUsuario.php" id="formLogin" method="post">
					<!-- Usuario -->
					<h5 style="text-align:left">Usuario</h5>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<div class="input-group">
								<span class="input-group-text" id="basic-addon1">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
										<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
									</svg>
								</span>
								<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required autofocus>
							</div>
						</div>	
					</div>
					<br>
					<!-- Termina Usuario -->
					
					<!-- Contraseña -->
					<h5 style="text-align:left">Contraseña</h5>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<div class="input-group">
								<span class="input-group-text" id="basic-addon1">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
										<path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
									</svg>
								</span>
								<input type="password" name="password" id="password" class="form-control" placeholder="********" required>
							</div>
						</div>	
					</div>
					<br>
					<!-- Termina Contraseña -->

					<a href="sesion/recuperacion/recuperarPassword.php" class="ml-auto mb-0 text-sm">¿Olvidaste tu contraseña?</a><br><br>

					<!-- Botón Login -->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<input name="login" value="Login" type="submit" class="btn btn-success btn-lg" style="border: black 2px solid">
						</div>
					</div>
					<!-- Termina Login -->
				</form>
			</article>
		</div>
		¿No tienes una cuenta? <a href="registro.php">Registrarme</a><br><br>
	</div>

	<?php include "../includes/footer.php" ?>

</body>
</html>
