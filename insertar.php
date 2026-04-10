<?php
include("conexion.php");

$nombre = trim($_POST['nombre']);
$edad = trim($_POST['edad']);
$correo = trim($_POST['correo']);

if (empty($nombre) || empty($edad) || empty($correo)) {
    echo "
    <link rel='stylesheet' href='estilo.css'>
    <div class='login-box'>
        <div class='mensaje-error'>Todos los campos son obligatorios.</div>
        <a href='dashboard.php' class='btn-salir'>Volver</a>
    </div>";
    exit();
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo "
    <link rel='stylesheet' href='estilo.css'>
    <div class='login-box'>
        <div class='mensaje-error'>El correo ingresado no es válido.</div>
        <a href='dashboard.php' class='btn-salir'>Volver</a>
    </div>";
    exit();
}

if ($edad < 1 || $edad > 120) {
    echo "
    <link rel='stylesheet' href='estilo.css'>
    <div class='login-box'>
        <div class='mensaje-error'>La edad ingresada no es válida.</div>
        <a href='dashboard.php' class='btn-salir'>Volver</a>
    </div>";
    exit();
}

$sql = "INSERT INTO registros(nombre, edad, correo) VALUES ('$nombre', '$edad', '$correo')";

if ($conexion->query($sql)) {
    header("Location: dashboard.php");
    exit();
} else {
    echo "
    <link rel='stylesheet' href='estilo.css'>
    <div class='login-box'>
        <div class='mensaje-error'>Error al guardar los datos.</div>
        <a href='dashboard.php' class='btn-salir'>Volver</a>
    </div>";
}
?>