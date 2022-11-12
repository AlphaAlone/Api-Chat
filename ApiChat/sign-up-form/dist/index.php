<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>API - Sign Up Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

</head>
<body>

  <
<!-- partial:index.partial.html -->
<div class="container">
  <form>
    <div class="row">
      <input type="hidden" name="idUsuario" value="0">
      <h4>Cuenta</h4>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Correo Electronico" name="txtCorreo"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Contrasena" name="txtPassword"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <input type="date" name="txtFechaNacimiento" />
      </div>
    </div>
    <div class="row">
      <h4>Datos personales</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Telefono" name="txtTelefono"/>
        <div class="input-icon"><i class="fa fa-phone"></i></div>
      </div>
      <input class="button" type="submit" value="Registrarse" />
    </div>

    <?php

      include_once '../../index.php';
      // $usuario = new UsuarioController();
      // $usuario->setUsuario();

    ?>

  </form>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
<!-- action="../../Controlador/Usuario.controlador.php/setUsuario" method="post" -->
