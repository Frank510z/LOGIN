<?php
include("conecta.php");
$usuario = $_POST["usuario"];
$pass = $_POST["pass"];
$sql = "SELECT * FROM clientes2 WHERE usuario='$usuario'";
$query = $conecta->query($sql);
$filas = mysqli_num_rows($query);
if ($filas == 0) {
	//echo "<script>swal('¡Atencion!', 'Usuario No Encontrado', 'error')</script>";
	echo "usuario no encontrado";
	echo crypt('123','123');
} else {
	while ($fila = $query->fetch_array()) {
		if (isset($fila[2])) //fila[2] Es el usuario
		{

			if ($fila[4] == crypt($pass,$fila[4]) and $fila[6] == 1) //
			{
				session_start();
				//echo "<script>swal('Â¡Felicitaciones!', 'Ingreso exitoso', 'success')</script>";		
				echo "ingreso exitoso";
				$_SESSION['usuario'] = $fila["usuario"];
				$_SESSION['nombre'] = $fila["nombre"];
				//echo "<script>document.location.href='principal.php'</script>";

			} else {
				//echo "<script>swal('¡Atencion!', 'La contraseÃ±a que ingresaste es incorrecta', 'error')</script>";
				echo "<h1>contraseña incorrecta</h1>";
			} //Fin comprobacion de password
		} else {
			//echo "<script>swal('¡Atencion!', 'Verifica tu usuario', 'error')</script>";
			echo "verifica tu usuario";
		}
	}
}
