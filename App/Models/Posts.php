<?php

namespace App\Models;

use PDO;
use App\Sql\Connector;

class Posts
{
    private PDO $pdo;

    public function __construct()
    {
        $connector = new Connector();  // Используем ваш коннектор
        $this->pdo = $connector->connect();  // Получаем подключение
    }

    // Получаем все записи из таблицы
    public function getAll(): array
    {
        $sql = "SELECT * FROM post";  // Убедитесь, что таблица называется "posts"
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Получаем запись по ID
    public function getById(int $id): ?array
    {
        $sql = "SELECT * FROM post WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Добавляем новую запись
    public function create(string $title, string $content): bool
    {
        $sql = "INSERT INTO post (title, content, created, updated) VALUES (:title, :content, NOW(), NOW())";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':title' => $title, ':content' => $content]);
    }

    // Обновляем запись по ID
    public function update(int $id, string $title, string $content): bool
    {
        $sql = "UPDATE post SET title = :title, content = :content, updated = NOW() WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id, ':title' => $title, ':content' => $content]);
    }

    // Удаляем запись по ID
    public function delete(int $id): bool
    {
        $sql = "DELETE FROM post WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}

