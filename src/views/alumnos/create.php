<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>
    <h1>Crear nuevo alumno</h1>

    <form action="/alumnos/create" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido">
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="number" id="telefono" name="telefono">
        </div>

        <button type="submit">Guardar</button>
    </form>
</body>

</html>