<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\GalleryCategory as GalleryCategoryModel;

class GalleryCategory extends Controller
{
    public function index()
    {
        $galleryCategoryModel = new GalleryCategoryModel();
        $this->data['categories'] = $galleryCategoryModel->getAll();
        $this->admin_view('admin/gallerycategory/index');
    }
}
