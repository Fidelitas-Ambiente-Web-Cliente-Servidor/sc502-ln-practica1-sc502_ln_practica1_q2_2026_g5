<?php

require_once __DIR__ . '/../models/ProfesorModel.php';

class ProfesoresController
{
    private ProfesorModel $model;

    public function __construct()
    {
        $this->model = new ProfesorModel();
    }

    // GET ?controller=profesores&action=index
    // Lista todos los profesores
    public function index(): void
    {
        $profesores = $this->model->getAll();
        require __DIR__ . '/../views/profesores/index.php';
    }

    // GET ?controller=profesores&action=show&id=X
    // Muestra el detalle de un profesor individual
    public function show(): void
    {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

        if ($id <= 0) {
            header('Location: index.php?controller=profesores&action=index');
            exit;
        }

        $profesor = $this->model->getById($id);

        if (!$profesor) {
            header('Location: index.php?controller=profesores&action=index');
            exit;
        }

        require __DIR__ . '/../views/profesores/show.php';
    }
}