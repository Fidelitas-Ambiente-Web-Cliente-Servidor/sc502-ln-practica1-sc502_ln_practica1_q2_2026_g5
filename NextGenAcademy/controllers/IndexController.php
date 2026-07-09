<?php


require_once __DIR__ . '/../models/IndexModel.php';

class IndexController
{
    private IndexModel $model;

    public function __construct()
    {
        $this->model = new IndexModel();
    }

    // ────────────────────────────────────────────────────────
    //  GET ?action=index
    //  Obtiene todos los cursos destacados y los muestra en la vista
    // ────────────────────────────────────────────────────────
    public function index(): void
    {
        $cursos = $this->model->getAll();
        require __DIR__ . '/../views/index/index.php';
    }

    // ────────────────────────────────────────────────────────
    //  HELPER — Limpiar datos del formulario
    //  htmlspecialchars evita XSS, trim elimina espacios
    // ────────────────────────────────────────────────────────
    private function sanitizeInput(array $input): array
    {
        return array_map(function ($value) {
            return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
        }, $input);
    }
}
