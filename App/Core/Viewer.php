<?php

namespace App\Core;

class Viewer
{
    private array $data = [];

    // Метод для установки данных
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    // Метод для подключения публичного шаблона
    public function include_public_template(string $part_name = 'main'): void
    {
        extract($this->data);
        include __DIR__ . '/../../public/templates/template-public.php';
    }

    // Метод для подключения админского шаблона
    public function include_admin_template(string $part_name = 'admin'): void
    {
        include __DIR__ . '/../../public/parts/' . $part_name . '.php'; // Подключаем шаблон из папки admin
    }
}
