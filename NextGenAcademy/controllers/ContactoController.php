<?php

require_once __DIR__ . '/../models/ContactoModel.php';

class ContactoController
{
    private ContactoModel $model;

    public function __construct()
    {
        $this->model = new ContactoModel();
    }

    public function index(): void
    {
        require_once __DIR__ . '/../views/contacto/index.php';
    }


    public function store(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $data = [
                'nombre'   => trim($_POST['nombre'] ?? ''),
                'correo'   => trim($_POST['correo'] ?? ''),
                'telefono' => trim($_POST['telefono'] ?? ''),
                'asunto'   => trim($_POST['asunto'] ?? ''),
                'mensaje'  => trim($_POST['mensaje'] ?? '')
            ];

            if (!empty($data['nombre']) && !empty($data['correo']) && !empty($data['telefono']) && !empty($data['asunto']) && !empty($data['mensaje'])) {
                
                $exito = $this->model->create($data);

                if ($exito) {
                    header('Location: index.php?controller=contacto&action=index&status=success');
                    exit;
                }
            }
            
            header('Location: index.php?controller=contacto&action=index&status=error');
            exit;
        }
    }
}