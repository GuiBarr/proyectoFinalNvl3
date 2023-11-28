<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/models/alumno.php";

class AlumnoController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Alumno();
    }
    
    /**
     * Muestra una vista con todos los alumnos.
     */
    public function index()
    {
        $alumnos = $this->model->all();

        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/alumnos/read.php";
    }

    /**
     * Muestra un formulario para crear un nuevo alumno.
     */
    public function create()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/alumnos/create.php";
    }

    /**
     * Guarda el registro de un nuevo alumno y envía al usuario a /alumnos.
     * 
     * @param array $request Datos del alumno nuevo
     */
    public function store($request)
    {
        $response = $this->model->create($request);
        
        header("Location: /alumnos");
    }


    /**
     * Eliminar el registro de un alumno y envía al usuario a /alumnos.
     */
    public function delete($id)
    {
        $this->model->destroy($id);

        header("Location: /alumnos");
    }
}