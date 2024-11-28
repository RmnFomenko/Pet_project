<?php

namespace App\Controllers;

use App\Core\Viewer;

class Main extends Controller
{
    public function index()
    {
        $this->data = [
            'test' => 'Main',
            'test1' => 'About',
        ];

        $this->public_view();
    }

    public function show_text()
    {
        echo 'Its the second method';
    }
}
