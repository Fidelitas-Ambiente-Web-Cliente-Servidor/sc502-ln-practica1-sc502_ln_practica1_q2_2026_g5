<?php

require_once __DIR__ . '/../models/CursoModel.php';

class CursosController
{
    private CursoModel $model;

    private const CATEGORIAS = [
        'Desarrollo de Software',
        'Infraestructura y Datos',
    ];

    public function __construct()
    {
        $this->model = new CursoModel();
    }

    // ────────────────────────────────────────────────────────
    //  GET ?controller=cursos&action=index[&categoria=X]
    //  Lista el catálogo completo o filtrado por categoría
    // ────────────────────────────────────────────────────────
    public function index(): void
    {
        $categoriaSeleccionada = isset($_GET['categoria'])
            ? trim($_GET['categoria'])
            : '';

        if ($categoriaSeleccionada !== '' && in_array($categoriaSeleccionada, self::CATEGORIAS, true)) {
            $cursos = $this->model->getByCategoria($categoriaSeleccionada);
        } else {
            $categoriaSeleccionada = '';
            $cursos = $this->model->getAll();
        }

        $categorias = self::CATEGORIAS;

        require __DIR__ . '/../views/cursos/index.php';
    }
}
