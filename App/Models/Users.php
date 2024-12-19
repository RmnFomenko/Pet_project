<?php

namespace App\Models;

class Users
{
    public function getAll(): array
    {
        return [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
            ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@example.com'],
        ];
    }
}
