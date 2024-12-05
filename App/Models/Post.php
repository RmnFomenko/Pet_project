<?php

namespace App\Models;

class Post
{
    public function getAll(): array
    {
        return [
            ['id' => 1, 'title' => 'First Post', 'content' => 'This is the first post.'],
            ['id' => 2, 'title' => 'Second Post', 'content' => 'This is the second post.'],
        ];
    }
}
