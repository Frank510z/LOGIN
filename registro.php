<?php
include("conecta.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Login Form Design One | Fazt</title>
  <link rel="stylesheet" href="styleregistro.css" />
</head>

<body>
  <div class="registro-box">
    <img src="logootaku.jpg" class="avatar" alt="Avatar Image" />
    <h1>- REGISTRO -</h1>
    <form name="fregistro" id="fregistro" method="POST" action="">
      <label for="nombre">Usuario:</label>
      <input type="text" placeholder="Nombre de Usuario" autocomplete="off" name="usuario" id="usuario" />

      <label for="apellidoP">Nombre:</label>
      <input type="text" placeholder="Nombre Completo" autocomplete="off" name="nombre" id="nombre" />

      <label for="apellidoM">Correo:</label>
      <input type="text" placeholder="Correo Electronico" autocomplete="off"  name="correo" id="correo" />

      <label for="username">Contraseña:</label>
      <input type="text" placeholder="Contraseña" autocomplete="off" name="passw" id="passw" />

      <label for="username">Confirmar contraseña:</label>
      <input type="text" placeholder="Confirmar Contraseña" autocomplete="off" name="passw2" id="passw2" />

      <input type="submit" value="REGISTRARSE" />
      <div class="centra">
        <a href="index.php">Volver</a>
      </div>
    </form>
  </div>

</body>

</html>


<?php

if (isset($_POST['usuario']) || isset($_POST['nombre']) || isset($_POST['correo']) || isset($_POST['passw'])  || isset($_POST['passw2'])) {

  $usuario = $_POST['usuario'];
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $passw = $_POST['passw'];
  $passw2 = $_POST['passw2'];

  if (!isset($usuario) || $usuario == NULL || !isset($nombre) || $nombre == NULL || !isset($correo) || $correo == NULL || !isset($passw) || $passw == NULL || !isset($passw2) || $passw2 == NULL) {

    echo "LLENE LOS CAMPOS VACIOS";
  } else {

    $sql = "SELECT * FROM clientes2 WHERE usuario='$usuario'";
$query = $conecta->query($sql);
$filas = mysqli_num_rows($query);

    if($filas == 0){

    if (crypt($passw, $passw) == crypt($passw2, $passw2)) {
      $contra = crypt($passw2, $passw);

      //$sql = "INSERT INTO usuario(nombre,apellidos,matricula,correo,telefono) VALUES('$nombre','$apellido','$matricula','$email','$telefono')";
      $sql = "INSERT INTO clientes2(nombre,usuario,correo,contraseña,nivel,statu) VALUES('$nombre','$usuario','$correo','$contra',1,1)";

      $data = mysqli_query($conecta, $sql);
      
      if ($data) {
        header("location:index.php");
      }
    }else{
      echo "Contraseñas no coinciden";
    }

  }else{
    echo "Otra persona ya utilizo ese nombre de usuario";
  }

  }
}
?>