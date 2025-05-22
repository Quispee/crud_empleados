<?php
$conexion = new mysqli("localhost", "root", "", "sise");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
