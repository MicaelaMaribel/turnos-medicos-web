<?php

//opcional
//include("conexion.php");

//oblogatorio
require("conexion.php");

//obtener los datos del formulario
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$fecha = $_POST["fecha"];
$especialidad = $_POST["especialidad"];
$obra = $_POST["obra"];
$tipo_atencion= $_POST["tipoAtencion"];
$observaciones = $_POST["observaciones"];

//consulta SQL
$consulta = "INSERT INTO turnos(nombre, correo, telefono, fecha, especialidad, obra_social, 
tipo_atencion, observaciones) VALUES ('$nombre', '$correo', '$telefono', '$fecha', '$especialidad',
'$obra', '$tipo_atencion', '$observaciones')";

//ejecutar consulta 
$respuesta = $conexion->exec($consulta);

//ver respuesta
if ($respuesta) {
    echo "Turno guardado correctamente";
}