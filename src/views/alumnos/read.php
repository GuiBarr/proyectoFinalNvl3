<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alumnos</title>
</head>

<body>
    <h1>alumnos</h1>
    
    <a href="/src/views/alumnos/create.php">AGREGAR ALUMNO</a>
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
            foreach ($alumnos as $index => $alumno) {
            ?>
                <tr>
                    <td><?= ($index + 1) ?></td>
                    <td><?= $alumno["dni"] ?></td>
                    <td><?= $alumno["nombre"] ?></td>
                    <td><?= $alumno["apellido"] ?></td>
                    <td><?= $alumno["correo"] ?></td>
                    <td><?= $alumno["direccion"] ?></td>
                    <td><?= $alumno["fecha_nacimiento"] ?></td>
                    <td>
                        <a href="/alumnos/edit">Editar</a>
                        <form action="/alumnos/delete" method="post" style="display: inline;">
                            <input type="number" hidden value="<?= $alumno["id"] ?>" name="id">
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