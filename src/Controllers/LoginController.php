<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/Models/User.php";

class LoginController
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }

    /**
     * Muestra una vista con el login.
     */
    public function index()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/login.php";
    }

    public function login($correo)
    {
        $usuario = $this->model->where("correo", "=", $correo);

        if (count($usuario) === 1) {

            // switch ($usuario[0]["rol_id"]) {
            //     case '1':
            //         echo "Eres admin";
            //         break;
            //     case '2':
            //         echo "Eres maestro";
            //         break;
            //     case '3':
            //         echo "Eres alumno";
            //         break;
                
            //     default:
            //         echo "No tienes rol asignado";
            //         break;
            // }
            session_start();
            $_SESSION["user"] = $usuario[0];

            header("Location: /dashboard");
        } else {
            echo "Credenciales incorrectas";
        }
    }

    public function dashboard()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/dashboard.php";
    }
}