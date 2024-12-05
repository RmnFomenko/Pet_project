<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Post as PostModel;

class Post extends Controller
{
    public function index()
    {
        $postModel = new PostModel();
        $this->data['posts'] = $postModel->getAll();
        $this->admin_view('admin/post/index');
    }
}
