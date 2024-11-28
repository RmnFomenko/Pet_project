<?php

namespace App\Controllers;

class Gallery extends Controller
{
    public function view() // метод view, а не index
    {
        $this->public_view('gallery/gallery-main');
    }

    public function create()
    {
        echo 'This is page Gallery Create';
    }

    public function delete()
    {
        echo 'This is page Gallery Delete';
    }
}


