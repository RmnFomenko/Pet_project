<?php

namespace App\Controllers;

class Admin extends Controller
{
    public function redact()
    {
        $this->data['admin_message'] = 'Welcome to the Admin Redactor Page'; // Добавление сообщения
        $this->admin_view('admin/admin-panel'); // Передаем имя шаблона
    }

    // Новый метод index для маршрута 'admin/index'
    public function index()
    {
        echo 'Welcome to the Admin Home Page';
    }
}
