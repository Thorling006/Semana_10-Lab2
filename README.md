# Semana_10-Lab2
Alumno: Omar David Ventura Cruz
DATOS DE ACCESO:
Usuario: admin
Contraseña: 1234
📄 ✅ RESPUESTAS DE PREGUNTAS
🔹 1. ¿De qué forma manejaste el login de usuarios?

El login fue manejado mediante PHP utilizando sesiones ($_SESSION) y una base de datos MySQL. Se validaron las credenciales ingresadas por el usuario comparándolas con los datos almacenados en la tabla usuarios. Si los datos coinciden, se crea una sesión que permite acceder al sistema, de lo contrario se deniega el acceso. Este método funciona porque permite mantener autenticado al usuario mientras navega dentro de la aplicación.

🔹 2. ¿Por qué es necesario usar bases de datos y no variables?

Las bases de datos permiten almacenar información de forma permanente, organizada y segura, mientras que las variables solo guardan datos temporalmente durante la ejecución del programa. Además, las bases de datos permiten consultar, actualizar y manejar grandes cantidades de información de manera eficiente, lo cual no es posible únicamente con variables.

🔹 3. ¿Cuándo usar bases de datos vs cookies o sesiones?

Las bases de datos se utilizan cuando se necesita almacenar información permanente, como usuarios o registros. Las sesiones se usan para mantener datos temporales del usuario durante su navegación, como el estado de login. Las cookies se utilizan para guardar información pequeña en el navegador del usuario, como preferencias. Cada uno se usa según la duración y tipo de datos que se necesiten manejar.

🔹 4. Descripción de tablas y tipos de datos

Se utilizaron dos tablas:

usuarios: contiene los datos de acceso al sistema. Se usaron campos como id (INT) para identificar cada usuario, usuario (VARCHAR) para almacenar el nombre y password (VARCHAR) para la contraseña.
registros: almacena la información ingresada por el usuario. Se utilizaron id (INT) como identificador, nombre (VARCHAR) para texto, edad (INT) para valores numéricos y correo (VARCHAR) para datos tipo email.

Los tipos de datos fueron seleccionados según el tipo de información, permitiendo un almacenamiento eficiente y adecuado.
