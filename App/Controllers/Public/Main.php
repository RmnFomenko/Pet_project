<?php

namespace App\Controllers\Public;

use App\Controllers\Controller;

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
        echo 'It\'s the second method';
    }
}
