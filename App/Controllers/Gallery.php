<?php

namespace App\Controllers;

class Gallery extends Controller
{
    public function view()
    {
        $this->public_view('gallery/gallery-main');
    }
}

