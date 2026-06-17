<?php

require("conexion.php");

$id = $_GET["id"];

$consulta = "SELECT * FROM turnos WHERE id = $id";

$resultado = $conexion->query($consulta);

$fila = $resultado->fetch();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar turno</title>
</head>
<body>

    <h1>Editar Turno</h1>

    <form action="actualizar.php" method="post">

        <input type="hidden" name="id" value="<?= $fila["id"]?>">

        <label>Nombre</label>
        <input type="text" name="nombre" value="<?= $fila["nombre"]?>">

        <label>Correo</label>
        <input type="email" name="correo" value="<?= $fila["correo"]?>">

        <button type="submit">Actualizar</button>
    </form>
    
</body>
</html>