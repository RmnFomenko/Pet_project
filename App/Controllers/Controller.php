<?php

namespace App\Controllers;

use App\Core\Viewer;

class Controller
{
    protected array $data = [];

    public function public_view(string $part_name = 'main')
    {
        $view = new Viewer();
        $view->setData($this->data);
        $view->include_public_template($part_name);
    }

    public function admin_view(string $part_name = 'admin')
    {
        $view = new Viewer();
        $view->setData($this->data);
        $view->include_admin_template($part_name);
    }
}
