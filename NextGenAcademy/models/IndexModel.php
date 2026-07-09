<?php


require_once __DIR__ . '/../config/database.php';

class IndexModel
{
    private PDO $db;

    public function __construct()
    {
        // Obtener la conexión compartida
        $this->db = Database::getConnection();
    }

    // ────────────────────────────────────────────────────────
    //  READ — Obtener todos los registros
    // ────────────────────────────────────────────────────────
    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT * FROM cursos_destacados'
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // retorna array de arrays asociativos
    }
}