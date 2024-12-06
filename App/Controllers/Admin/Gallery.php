<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Gallery as GalleryModel;

class Gallery extends Controller
{
    public function index()
    {
        $galleryModel = new GalleryModel();
        $this->data['galleries'] = $galleryModel->getAll();
        $this->admin_view('admin/gallery/index');
    }
}
