<?php
include 'db.php';

$nombre = $_POST['nombre'];
$ap_pat = $_POST['apellido_paterno'];
$ap_mat = $_POST['apellido_materno'];

$conexion->query("INSERT INTO Empleado (nombre, apellido_paterno, apellido_materno) VALUES ('$nombre', '$ap_pat', '$ap_mat')");

header("Location: index.php");
