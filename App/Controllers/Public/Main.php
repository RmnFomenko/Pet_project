<?php

namespace App\Controllers\Public;

use App\Controllers\Controller;
use App\Models\Posts;

class Main extends Controller
{
    public function index()
    {
        $postModel = new Posts();
        $this->data['posts'] = $postModel->getAll();
        $this->public_view('main');
    }
}
