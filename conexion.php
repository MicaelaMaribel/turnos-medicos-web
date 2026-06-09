<?php

//configurar credenciales
$host = "localhost";
$usuario = "root";
$contrasena = "*****";
$baseDatos = "turnos_medicos";


try {
    $conexion = new PDO(
        "mysql:host=$host;dbname=$baseDatos",
        $usuario,
        $contrasena
    );

    echo "Conexion exitosa";
} catch (PDOException $error) {
    echo "Error de conexion: ".$error->getMenssage();
}