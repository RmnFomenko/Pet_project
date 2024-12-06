<?php

namespace App\Models;

class PostCategory
{
    public function getAll(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Technology',
                'description' => 'Latest updates and trends in technology.'
            ],
            [
                'id' => 2,
                'name' => 'Health',
                'description' => 'Tips and news about health and wellness.'
            ],
            [
                'id' => 3,
                'name' => 'Travel',
                'description' => 'Guides and stories from amazing travel destinations.'
            ]
        ];
    }
}
