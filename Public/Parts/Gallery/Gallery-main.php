<?php

namespace App\Controllers;

use App\Core\Viewer;

class Gallery extends Controller
{
    public function view()
    {
        $this->public_view('gallery/gallery-main');
    }

    public function create()
    {
        echo "Gallery create page.";
    }

    public function delete()
    {
        echo "Gallery delete page.";
    }
}

