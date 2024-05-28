<?php
$conexion=mysqli_connect("localhost","root","","interfaz");

if ($conexion->connect_error) {
    die("Error de conexion" . $conexion->connect_error);
}

?>