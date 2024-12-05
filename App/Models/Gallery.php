<?php

namespace App\Models;

class Gallery
{
    public function getAll()
    {
        return [
            ['image' => 'image1.jpg', 'description' => 'First image'],
            ['image' => 'image2.jpg', 'description' => 'Second image'],
        ];
    }
}
