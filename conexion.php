<?php
$conexion = new mysqli("localhost", "root", "1234", "sistema");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}else
{
    echo "";
}
?>