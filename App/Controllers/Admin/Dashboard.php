<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        echo 'Welcome to the Admin Dashboard';
    }

    public function redact()
    {
        $this->data['admin_message'] = 'Welcome to the Admin Redactor Page';
        $this->admin_view('admin/admin-panel');
    }
}

