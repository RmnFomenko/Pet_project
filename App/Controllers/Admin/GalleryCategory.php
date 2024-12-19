<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\Viewer;
use App\Models\CategoryGallery as GalleryAdminModel;


class CategoryGallery extends Controller
{

    public function view()
    {
        $model = new GalleryAdminModel();
        $this->data = ['data' => $model->get_all_category_images()];
        $this -> admin_view('gallery/gallery-category-main');
    }

    public function update()
    {
        $model = new GalleryAdminModel();
        $model -> get_all_category_images();
        $this->data = ['data' => $model->get_category_image_by_id($_GET['id'])];
        $this -> admin_view('gallery/gallery-category-update');
    }

    public function create(): void
    {
        if(!empty($_POST))
        {
            $model = new GalleryAdminModel();
            $model->save(array_intersect_key(array_filter($_POST) , $model->to_array()));
        }
        $this->admin_view('gallery/gallery-category-create');
    }

    public function delete():void
    {
        $model = new GalleryAdminModel();
        $model -> get_all_category_images();
        $this->data = ['data' => $model->get_category_image_by_id($_GET['id'])];
        $this -> admin_view('gallery/gallery-category-delete');
    }

}