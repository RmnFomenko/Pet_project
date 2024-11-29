<?php

namespace App\Controllers;

class Admin extends Controller
{
    public function redact()
    {
        $this->data['admin_message'] = 'Welcome to the Admin Redactor Page';
        $this->admin_view('admin/admin-panel');
    }


    public function index()
    {
        echo 'Welcome to the Admin Home Page';
    }
}


