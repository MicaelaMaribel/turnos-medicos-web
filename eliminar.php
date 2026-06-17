<?php

require("conexion.php");

$id = $_GET["id"];

$consulta = "DELETE FROM turnos WHERE id = $id";

$resultado = $conexion->exec($consulta);

if ($resultado) {
    echo "Turno eliminado correctamente";
}else{
    echo "Error al eliminar el turno";
}