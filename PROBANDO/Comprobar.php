<?php

// Incluye el archivo que contiene la función conectado()
include_once('../CONEXION_PHP/Conexion.php');

// Llamar a la función conectado() para establecer la conexión
$con = conectado();

// Verificar si la conexión fue exitosa
if ($con) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error al conectar con la base de datos.";
}

?>
