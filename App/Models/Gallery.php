<?php

namespace App\Models;

use PDO;

class Gallery
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = (new \App\Sql\Connector())->connect();
    }

    public function getAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM gallery");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert(array $data): bool
    {
        $insert = new Insert($this->pdo, 'gallery');
        return $insert->execute($data);
    }
}
