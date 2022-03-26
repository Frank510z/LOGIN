<?php
include("conecta.php");
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Login Form Design One | Fazt</title>
  <!--Bostrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="stylelogin.css" />



</head>

<body>

<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>

  <div class="login-box">
    <img src="logo.jpg" class="avatar" alt="Avatar Image" />
    <h1>- Bienvenido -</h1>
    <form name="fregistro" id="fregistro" method="POST" action="login.php">
      <!-- USERNAME INPUT -->
      <label for="username">Usuario:</label>
      <input type="text" placeholder="ingrese su usuario" autocomplete="off" name="usuario" id="usuario" />
      <!-- PASSWORD INPUT -->
      <label for="password">Contraseña:</label>
      <input type="password" placeholder="ingrese Contraseña" autocomplete="off" name="pass" id="pass" />
      <input type="submit" value="Iniciar Sesion" />
      <!--a href="#">Lost your Password?</!--a><br /-->
      <div class="centra">
        <a href="registro.php" class="centro">¿No tienes Cuenta? Registrate</a>
      </div>
    </form>
  </div>
</body>

</html>
