<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel principal</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="contenedor">
    
    <div class="barra-superior">
        <div class="bienvenida">
            Bienvenido, <?php echo $_SESSION['usuario']; ?>
        </div>
        <a href="logout.php" class="btn-salir">Cerrar sesión</a>
    </div>

    <h2>Registro de datos</h2>
    <p class="subtitulo">Ingrese la información y consulte los datos almacenados en la tabla</p>

    <div class="seccion">
        <form action="insertar.php" method="POST" class="formulario">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre" required>
            </div>

            <div>
                <label for="edad">Edad</label>
                <input type="number" name="edad" id="edad" placeholder="Ingrese la edad" required>
            </div>

            <div>
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" placeholder="Ingrese el correo" required>
            </div>

            <button type="submit">Guardar datos</button>
        </form>
    </div>

    <div class="seccion">
        <h3>Datos registrados</h3>

        <div class="tabla-contenedor">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Correo</th>
                </tr>

                <?php
                $sql = "SELECT * FROM registros ORDER BY id DESC";
                $resultado = $conexion->query($sql);

                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>
                            <td>{$fila['id']}</td>
                            <td>{$fila['nombre']}</td>
                            <td>{$fila['edad']}</td>
                            <td>{$fila['correo']}</td>
                          </tr>";
                }
                ?>
            </table>
        </div>
    </div>

</div>

</body>
</html>