<?php

namespace App\Models;

class GalleryCategory
{
    public function getAll(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Nature',
                'description' => 'Beautiful landscapes and natural sceneries.'
            ],
            [
                'id' => 2,
                'name' => 'Architecture',
                'description' => 'Stunning architectural designs from around the world.'
            ],
            [
                'id' => 3,
                'name' => 'Abstract',
                'description' => 'Creative and abstract art galleries.'
            ]
        ];
    }
}
