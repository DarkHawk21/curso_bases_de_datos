<?php require_once 'php/querys.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Online</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Tabla Usuario</h1>

    <!-- Crear datos en la tabla usuario -->
    <form action="php/querys.php" method="POST">
        <div class="columna">
            <div>
                <label for="idRol">Id Rol:</label>
                <input type="text" name="idRol">
            </div>

            <div>
                <label for="estatusUser">Estatus:</label>
                <select name="estatusUser">
                    <option value="">Selecciona uno...</option>
                    <option value="0">Inactivo</option>
                    <option value="1">Activo</option>
                </select>
            </div>

            <div>
                <label for="nombreUser">Nombre:</label>
                <input type="text" name="nombreUser">
            </div>
        </div>
        
        <div class="columna">
            <div>
                <label for="direccionUser">Dirección:</label>
                <input type="text" name="direccionUser">
            </div>

            <div>
                <label for="telefonoUser">Teléfono:</label>
                <input type="text" name="telefonoUser">
            </div>

            <div>
                <label for="emailUser">E-mail:</label>
                <input type="text" name="emailUser">
            </div>
        </div>

        <div class="columna">
            <input type="hidden" value="CREATE" name="action">
            <input type="submit" value="Crear Usuario" class="button">
        </div>
    </form>

    <!-- Leer los datos de la tabla usuario -->
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Id Rol</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>E-mail</th>
                <th>Estatus</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $queryUserRead = $mysqli->query($sqlUserRead);
            ?>
            <?php while($usuario = $queryUserRead->fetch_object()): ?>
                <tr>
                    <td><?= $usuario->idusuario; ?></td>
                    <td><?= $usuario->idrol; ?></td>
                    <td><?= $usuario->nombre; ?></td>
                    <td><?= $usuario->direccion; ?></td>
                    <td><?= $usuario->telefono; ?></td>
                    <td><?= $usuario->email; ?></td>
                    <td><?= $usuario->estado; ?></td>
                </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>