<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

    <input type="hidden" name="idUsuario" value="0">

		<div class="form-group">

			<label for="email">Correo electrónico:</label>

			<div class="input-group">

				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="email" class="form-control" id="email" name="txtCorreo">

			</div>

		</div>

		<div class="form-group">
			<label for="pwd">Contraseña:</label>

			<div class="input-group">

				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="password" class="form-control" id="pwd" name="txtPassword">

			</div>

		</div>

    <div class="form-group">

			<label for="email">Correo electrónico:</label>

			<div class="input-group">

				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="date" class="form-control" id="fehca" name="txtFechaNacimiento">

			</div>

		</div>

    <div class="form-group">

			<label for="email">Correo electrónico:</label>

			<div class="input-group">

				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="fehca" name="txtTelefono">

			</div>

		</div>
    	<button type="submit" class="btn btn-primary">Ingresar</button>

		<?php
      include_once 'index.php';
  		$ingreso = new UsuarioController();
  		$ingreso->setUsuario();
		?>

		<button type="submit" class="btn btn-primary">Ingresar</button>

	</form>

</div>

  </body>
</html>
