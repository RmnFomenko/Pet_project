<?php

namespace App\Controllers\Models;

use App\Sql\Insert;
use App\Sql\Select;

class Users
{
    public string $name;
    public string $password;
    public int $email;


    public function __construct()
    {
        $this->select = new Select();
    }

    public function get_all_users(): array
    {
        $this->select -> set_table_name('users');
        $this->select -> set_fields(['id','name', 'email']);
        return $this->select-> execute();
    }

    public function get_user_shorts()
    {
        $this->select -> set_table_name('users');
        $this->select -> set_fields(['id','name']);
        return $this->select-> execute();
    }

    public function get_post_by_id(int $id): array
    {
        foreach ($this->users as $user) {
            if ($user['id'] === $id) {
                return $user;
            }
        }
        throw new \Exception("Пользователь с ID {$id} не найден");
    }

    public function save(array $data)
    {

        $insert = new Insert();
        $insert->set_table_name('users');
        $insert->set_fields_and_values($data);
        $insert->execute();

    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }

}