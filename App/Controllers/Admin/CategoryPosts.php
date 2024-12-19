<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\Viewer;
use App\Models\CategoryPosts as CategoryPostsAdminModel;

class CategoryPosts extends Controller
{
    public function view()
    {
        $model = new CategoryPostsAdminModel();
        $this->data = ['data' => $model->get_all_category_posts()];
        $this->admin_view('posts/posts-category-main');
    }

    public function update()
    {
        $model = new CategoryPostsAdminModel();
        $this->data = ['data' => $model->get_category_image_by_id($_GET['id'])];
        $this->admin_view('posts/posts-category-update');
    }

    public function create(): void
    {
        if(!empty($_POST))
        {
            $model = new CategoryPostsAdminModel();
            $model->save(array_intersect_key(array_filter($_POST) , $model->to_array()));
        }
        $this->admin_view('posts/posts-category-create');
    }

    public function delete()
    {
        $model = new CategoryPostsAdminModel();
        $this->data = ['data' => $model->get_category_image_by_id($_GET['id'])];
        $this->admin_view('posts/posts-category-delete');
    }
}