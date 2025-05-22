<?php
include 'db.php';
$id = $_GET['id'];
$result = $conexion->query("SELECT * FROM Empleado WHERE id_empleado = $id");
$empleado = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Empleado skill</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Editar Empleado skill</h4>
            </div>
            <div class="card-body">
                <form action="actualizar.php" method="POST" onsubmit="return validarFormulario();">
                    <input type="hidden" name="id" value="<?php echo $empleado['id_empleado']; ?>">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $empleado['nombre']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellido_paterno" class="form-label">Apellido Paterno:</label>
                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="<?php echo $empleado['apellido_paterno']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellido_materno" class="form-label">Apellido Materno:</label>
                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="<?php echo $empleado['apellido_materno']; ?>" required>
                    </div>

                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Validación básica con JS -->
    <script>
        function validarFormulario() {
            const nombre = document.getElementById("nombre").value.trim();
            const apPaterno = document.getElementById("apellido_paterno").value.trim();
            const apMaterno = document.getElementById("apellido_materno").value.trim();

            if (!nombre || !apPaterno || !apMaterno) {
                alert("Todos los campos son obligatorios.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
