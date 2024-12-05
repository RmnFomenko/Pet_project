<?php

namespace App\Controllers\Public;

use App\Controllers\Controller;
use App\Models\Post;

class Main extends Controller
{
    public function index()
    {
        $postModel = new Post();
        $this->data['posts'] = $postModel->getAll();
        $this->public_view('main');
    }
}
