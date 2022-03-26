<?php
$conecta = new mysqli('localhost','root','12345678','uptex');
if(mysqli_connect_error()) {
    echo "No se pudo conectar la BD :(";
}  
else {
    echo "º";
}
?>