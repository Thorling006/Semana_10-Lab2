<?php
session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $_SESSION['usuario'] = $usuario;
    header("Location: dashboard.php");
    exit();
} else {
    echo "
    <link rel='stylesheet' href='estilo.css'>
    <div class='login-box'>
        <div class='mensaje-error'>Usuario o contraseña incorrectos.</div>
        <a href='login.php' class='btn-salir'>Volver al login</a>
    </div>";
}
?>