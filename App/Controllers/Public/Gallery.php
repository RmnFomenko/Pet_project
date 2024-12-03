<?php

namespace App\Controllers\Public;

use App\Controllers\Controller;

class Gallery extends Controller
{
    public function view()
    {
        $this->public_view('gallery/gallery-main');
    }
}

