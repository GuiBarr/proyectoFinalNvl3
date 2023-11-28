<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Bienvenido al dashboard</h1>

    
    <?php
    session_start();
    $rol = $_SESSION["user"]["rol_id"];

    if ($rol == 1) {
        echo "<h2>Bienvenido, admin</h2>";

        echo "<a href='/permisos'><button>Permisos</button></a>";
        echo "<a href='/src/views/maestros/read.php'><button>Maestros</button></a>";
        echo "<a href='/alumnos'><button>Alumnos</button></a>";
        echo "<a href='/clases'><button>Clases</button></a>";

    }

    if ($rol == 2) {
        echo "<h2>Bienvenido, maestro</h2>";
    }

    if ($rol == 3) {
        echo "<h2>Bienvenido, alumno</h2>";
    }
    ?>

</body>

</html>