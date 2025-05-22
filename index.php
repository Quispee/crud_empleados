<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Empleados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th {
            background-color: #007BFF;
            color: white;
            padding: 10px;
        }
        td {
            padding: 8px;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .add-btn {
            display: inline-block;
            margin-top: 10px;
            margin-bottom: 15px;
            background-color: #28a745;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
        }
        .add-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Empleados</h1>
        <a class="add-btn" href="agregar.php">+ Agregar Nuevo Empleado</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Acciones</th>
            </tr>
            <?php
            $resultado = $conexion->query("SELECT * FROM Empleado");
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id_empleado']}</td>
                    <td>{$row['nombre']}</td>
                    <td>{$row['apellido_paterno']}</td>
                    <td>{$row['apellido_materno']}</td>
                    <td>
                        <a href='editar.php?id={$row['id_empleado']}'>Editar</a> |
                        <a href='eliminar.php?id={$row['id_empleado']}'>Eliminar</a>
                    </td>
                </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
