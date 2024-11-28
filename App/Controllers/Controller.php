<?php

namespace App\Controllers;

use App\Core\Viewer;

class Controller
{
    protected array $data = [];

    public function public_view(string $part_name = 'main')
    {
        $view = new Viewer();
        $view->setData($this->data); // Устанавливаем данные
        $view->include_public_template($part_name); // Вызываем метод объекта
    }

}
