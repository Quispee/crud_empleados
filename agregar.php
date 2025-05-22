<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Empleado | Skill</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .volver {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #007bff;
        }
        .volver:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Agregar Nuevo Empleado</h1>
        <form action="insertar.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="apellido_paterno">Apellido Paterno:</label>
            <input type="text" name="apellido_paterno" required>

            <label for="apellido_materno">Apellido Materno:</label>
            <input type="text" name="apellido_materno" required>

            <input type="submit" value="Guardar">
        </form>
        <a class="volver" href="index.php">← Volver al listado</a>
    </div>
</body>
</html>
