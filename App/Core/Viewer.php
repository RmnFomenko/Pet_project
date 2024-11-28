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

    public function include_public_template(string $part_name = 'main'): void
    {
        // Делаем $data доступной в шаблоне
        extract($this->data);

        include __DIR__ . '/../../public/templates/template-public.php';
    }

    public function include_admin_template(): void
    {
        include __DIR__ . '/../../public/templates/template-admin.php';
    }
}
