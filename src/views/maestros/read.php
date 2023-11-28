<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maestros</title>
</head>

<body>
    <h1>maestros</h1>
    
    <a href="/src/views/maestros/create.php">AGREGAR MAESTRO</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Direccion</th>
                <th>fech. de Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($maestros as $index => $maestro) {
            ?>
                <tr>
                    <td><?= ($index + 1) ?></td>
                    <td><?= $maestro["dni"] ?></td>
                    <td><?= $maestro["nombre"] ?></td>
                    <td><?= $maestro["apellido"] ?></td>
                    <td><?= $maestro["correo"] ?></td>
                    <td><?= $maestro["direccion"] ?></td>
                    <td><?= $maestro["fecha_nacimiento"] ?></td>
                    <td>
                        <a href="/maestros/edit">Editar</a>
                        <form action="/maestros/delete" method="post" style="display: inline;">
                            <input type="number" hidden value="<?= $maestro["id"] ?>" name="id">
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>