<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/models/maestro.php";

class MaestroController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Maestro();
    }
    
    /**
     * Muestra una vista con todos los maestros.
     */
    public function index()
    {
        $maestros = $this->model->all();
        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/maestros/read.php";
    }

    /**
     * Muestra un formulario para crear un nuevo maestro.
     */
    public function create()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/maestros/create.php";
    }

    /**
     * Guarda el registro de un nuevo maestro y envía al usuario a /maestros.
     * 
     * @param array $request Datos del maestro nuevo
     */
    public function store($request)
    {
        $response = $this->model->create($request);
        
        header("Location: /maestros");
    }


    /**
     * Eliminar el registro de un maestro y envía al usuario a /maestros.
     */
    public function delete($id)
    {
        $this->model->destroy($id);

        header("Location: /maestros");
    }
}