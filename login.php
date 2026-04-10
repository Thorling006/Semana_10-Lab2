<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistema</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="login-box">
        <h2>Iniciar Sesión</h2>
        <p class="subtitulo">Ingrese sus credenciales para acceder al sistema</p>

        <form action="validar_login.php" method="POST" class="formulario">
            <div>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario" required>
            </div>

            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
            </div>

            <button type="submit">Entrar</button>
        </form>
    </div>

</body>
</html>