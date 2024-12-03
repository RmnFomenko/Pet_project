<?php

namespace App\Controllers\Public;

use App\Controllers\Controller;

class About extends Controller
{
    public function index()
    {
        echo 'This is About page';
    }

    public function create()
    {
        echo 'This is page About Create';
    }

    public function delete()
    {
        echo 'This is page About Delete';
    }
}
