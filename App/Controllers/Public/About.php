<?php

namespace App\Controllers\Public;

use App\Controllers\Controller;

class About extends Controller
{
    public function index()
    {
        $this->data['content'] = 'Welcome to the About Page!';
        $this->public_view('about');
    }
}
