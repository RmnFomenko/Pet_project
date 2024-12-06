<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\User as UserModel;

class User extends Controller
{
    public function index()
    {
        $userModel = new UserModel();
        $this->data['users'] = $userModel->getAll();
        $this->admin_view('admin/user/index');
    }
}
