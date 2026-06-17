<?php

require("conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];

$consulta = "UPDATE turnos SET nombre = '$nombre', correo = '$correo' WHERE id = $id";

$resultado = $conexion->exec($consulta);

if ($resultado) {
    header("Location: listar.php");
    exit();
} else{
    echo "Error al actualizar el turno";
}

