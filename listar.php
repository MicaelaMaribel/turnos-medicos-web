<?php

//incluir conexion
require("conexion.php");

//creamos la consulta
$consulta = "SELECT * FROM turnos";

//ejecutamos la consulta
$respuesta = $conexion->query($consulta);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos guardados</title>
</head>
<body>
    <h1>Turnos guardados</h1>

    <table border="1">
        <!-- encabezado de la tabla -->
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>


        <?php
        foreach ($respuesta as $fila) {
        ?>
            <tr>
                <td><?= $fila["nombre"]?></td>
                <td><?= $fila["correo"]?></td>
                <td><?= $fila["telefono"]?></td>
                <td>
                    <a href="eliminar.php?id=<?= $fila["id"] ?>">Eliminar</a>
                    |
                    <a href="editar.php?id=<?= $fila["id"] ?>">Editar</a>
                </td>
            </tr>

        <?php
        }
        ?>

    </table>
</body>
</html>