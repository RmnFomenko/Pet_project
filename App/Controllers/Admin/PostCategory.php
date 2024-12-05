<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\PostCategory as PostCategoryModel;

class PostCategory extends Controller
{
    public function index()
    {
        $postCategoryModel = new PostCategoryModel();
        $this->data['postCategories'] = $postCategoryModel->getAll();
        $this->admin_view('admin/postcategory/index');
    }
}
