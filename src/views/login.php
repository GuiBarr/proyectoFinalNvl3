<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="/login" method="post">
        <div>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo">
        </div>
        <div>
            <label for="contrasena">Contraseña:</label>
            <input type="text" id="contrasena" name="contrasena">
        </div>

        <button type="submit">Iniciar sesión</button>
    </form>
</body>

</html>