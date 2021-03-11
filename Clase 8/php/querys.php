<?php
    require_once 'conexion.php';

    $idRol = null;
    $nombreUsuario = null;
    $direccionUsuario = null;
    $telefonoUsuario = null;
    $emailUsuario = null;
    $estadoUsuario = null;
    $idUsuario = null;

    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        switch($action) {
            case 'CREATE':
                $idRol = intval($_POST['idRol']);
                $nombreUsuario = $_POST['nombreUser'];
                $direccionUsuario = $_POST['direccionUser'];
                $telefonoUsuario = $_POST['telefonoUser'];
                $emailUsuario = $_POST['emailUser'];
                $estadoUsuario = intval($_POST['estatusUser']);

                // C - Create
                $sqlUserCreate = "INSERT INTO usuario VALUES (
                    NULL,
                    $idRol,
                    '$nombreUsuario',
                    NULL,
                    NULL,
                    '$direccionUsuario',
                    '$telefonoUsuario',
                    '$emailUsuario',
                    NULL,
                    $estadoUsuario
                )";
                $mysqli->query($sqlUserCreate);
                header('Location: ../index.php');
                break;
        }
    }

    // R - Read
    $sqlUserRead = "SELECT * FROM usuario";

    // U - Update
    $sqlUserUpdate = "UPDATE usuario SET (
        `idrol` = $idRol,
        `nombre` = '$nombreUsuario',
        `direcccion` = '$direccionUsuario',
        `telefono` = '$telefonoUsuario',
        `email` = '$emailUsuario',
        `estado` = $estadoUsuario
    )";

    // D - Delete
    $sqlUserDelete = "DELETE FROM usuario WHERE idusuario = $idUsuario";
