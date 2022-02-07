<footer class="bg-dark">
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<ul>
					<h3 class="text-white">Sección del Usuario</h3>
						<?php
							if(isset($_SESSION['Usuario'])){
								echo "
									<li>
										<a class='text-white' style='text-decoration: none;' href='../../index.php?categoria=0'>Inicio</a>
									</li>

									<li>
										<a class='text-white' style='text-decoration: none;' href='../publicaciones/publicaciones.php'>Mis Publicaciones</a>
									</li>

									<li>
										<a class='text-white' style='text-decoration: none;' href='../comentarios/comentarios.php'>Mis Comentarios</a>
									</li>

									<li>
										<a class='text-white' style='text-decoration: none;' href='../valoraciones/valoraciones.php'>Mis Valoraciones</a>
									</li>

									<li>
										<a class='text-white' style='text-decoration: none;' href='../cuenta/perfil.php'> Mi Cuenta </a>;
									</li>

									<li>
										<a class='text-white' style='text-decoration: none;' href='../sesion/salir.php'> Salir </a>
									</li>

								";

							}else{

								echo "
									<li>
										<a class='text-white' style='text-decoration: none;' href='../../index.php?categoria=0'>Inicio</a>
									</li>

									<li>
										<a class='text-white' style='text-decoration: none;' href='../sesion/login.php'>Iniciar sesión</a>
									</li>

									<li>
										<a class='text-white' style='text-decoration: none;' href='../sesion/registro.php'>Registrarme</a>
									</li>

									<li>
										<a class='text-white' style='text-decoration: none;' href='../recuperacion/recuperarPassword.php'>Recuperar Contraseña</a>
									</li>
								";

							}
						?>
				</ul>
			</div>
			<div class="col-md-6">
				<ul>
					<h3 class="text-white">Últimas Publicaciones</h3>
						<?php

							$get_publicaciones = mostrarUltimasPublicaciones($conexion);

							while($row_publicaciones = mysqli_fetch_assoc($get_publicaciones)){

								$idPublicaciones = $row_publicaciones['idPublicacion'];

								$nombrePublicacion = $row_publicaciones['NombrePublicacion'];

								echo "

								<li>

									<a class='text-white' style='text-decoration: none;' href='../../detallesPublicacion.php?publicacion=$idPublicaciones'> $nombrePublicacion</a>

								</li>

								";
							}
						?>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  
<!-- DataTables -->
<script src="../../zonaAdmin/librerias/datatable/jquery.dataTables.min.js"></script>
<script src="../../zonaAdmin/librerias/datatable/dataTables.bootstrap5.min.js"></script>