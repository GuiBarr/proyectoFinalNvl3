<?php
class Alumno
{
    private $db;

    public function __construct()
    {
        $config = include($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

        try {
            $this->db = new mysqli(
                $config["host"],
                $config["username"],
                $config["password"],
                $config["dbname"]
            );
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function all()
    {
        $res = $this->db->query("select * from usuarios where rol_id = 3");
        $data = $res->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public function create($data)
    {
        try {
            $nombre = $data["nombre"];
            $apellido = $data["apellido"];
            $correo = $data["correo"];
            $contrasena = $data["contrasena"];
            $direccion = $data["direccion"];
            $fecha_nacimiento = $data["fecha_nacimiento"];
            $dni = $data["dni"];
            $rol_id = $data["rol_id"];

            $res = $this->db->query("insert into alumnos(nombre, apellido, correo, contrasena, direccion, fecha_nacimineto, dni, rol_id) values ('$nombre', '$apellido', '$correo', '$contrasena', '$direccion', '$fecha_nacimiento', '$dni', '$rol_id')");

            if ($res) {
                $ultimoId = $this->db->insert_id;
                $res = $this->db->query("select * from usuarios where id = $ultimoId");
                $data = $res->fetch_assoc();

                return $data;
            } else {
                return "No se pudo crear el alumno";
            }
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        $this->db->query("delete from usuarios where id = $id");
    }
}