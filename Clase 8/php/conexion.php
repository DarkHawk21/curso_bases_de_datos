<?php
    // Crear variables de conexión.
    define('SERVER', 'localhost'); // Servidor de conexión
    define('USER', 'root'); // Usuario autorizado
    define('PASSWORD', ''); // Contraseña del usuario
    define('BD', 'tienda_curso'); // Base de datos
    define('PORT', 3306); // Puerto de conexión al servidor

    // Crear nuestro objeto de conexión.
    $mysqli = new mysqli(SERVER, USER, PASSWORD, BD, PORT);

    // Si hay errores se pausará el código y devolvemos al usuario el error.
    if ($mysqli->connect_errno) {
        echo "Error al conectarse con MySQL debido al error ".$mysqli->connect_error."<br>";
        die();
    }

    // Declarar una zona horaria por default.
    date_default_timezone_set('America/Mexico_City');