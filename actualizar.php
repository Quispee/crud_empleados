<?php
include 'db.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];

$conexion->query("UPDATE Empleado SET 
    nombre = '$nombre', 
    apellido_paterno = '$apellido_paterno', 
    apellido_materno = '$apellido_materno' 
    WHERE id_empleado = $id");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Empleado Actualizado</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <meta http-equiv="refresh" content="2;url=index.php">
</head>
<body class="bg-light">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="text-center">
            <div class="text-success mb-3">
                <i class="bi bi-check-circle-fill" style="font-size: 4rem;"></i>
            </div>
            <h3 class="text-success">Empleado actualizado correctamente</h3>
            <p class="text-muted">Redirigiendo al listado...</p>
        </div>
    </div>
</body>
</html>
