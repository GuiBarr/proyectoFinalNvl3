<?php
class Maestro
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
        $res = $this->db->query("select * from usuarios where rol_id = 2");
        $data = $res->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public function create($data)
    {
        try {
            $nombre = $data["nombre"];
            $apellido = $data["apellido"];
            $telefono = $data["telefono"];

            $res = $this->db->query("insert into usuarios(nombre, apellido, telefono) values ('$nombre', '$apellido', '$telefono')");

            if ($res) {
                $ultimoId = $this->db->insert_id;
                $res = $this->db->query("select * from maestros where id = $ultimoId");
                $data = $res->fetch_assoc();

                return $data;
            } else {
                return "No se pudo crear el maestro";
            }
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        $this->db->query("delete from maestros where id = $id");
    }
}