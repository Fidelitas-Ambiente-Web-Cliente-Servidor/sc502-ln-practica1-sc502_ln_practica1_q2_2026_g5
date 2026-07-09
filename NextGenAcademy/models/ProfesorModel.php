<?php

require_once __DIR__ . '/../config/database.php';

class ProfesorModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    // Obtener todos los profesores activos
    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT * FROM profesores WHERE activo = 1 ORDER BY nombre'
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un profesor por su ID
    public function getById(int $id): ?array
    {
        $stmt = $this->db->prepare(
            'SELECT * FROM profesores WHERE id_profesor = :id AND activo = 1'
        );
        $stmt->execute([':id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }
}