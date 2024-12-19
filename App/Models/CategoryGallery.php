<?php

namespace App\Controllers\Models;

use App\Sql\Insert;

class CategoryGallery
{
    public string $name;
    public string $id;

    private array $images = [
        [
            'id' => 1,
            'name' => 'Sunset Beach',
        ],
        [
            'id' => 2,
            'name' => 'Mountain Peaks',
        ],
        [
            'id' => 3,
            'name' => 'Funny Ship',
        ],
        [
            'id' => 4,
            'name' => 'Ancient Ruins',

        ],
        [
            'id' => 5,
            'name' => 'Starry Night',
        ],
    ];

    public function get_all_category_images(): array
    {

        return $this->images;
    }

    public function get_category_image_by_id(int $ID): array
    {
        foreach ($this->images as $image) {
            if ($image['id'] === $ID) {
                return $image;
            }
        }
        throw new \Exception('Категория картинок с указаным айди не найдена');
    }


    public function save(array $data)
    {

        $insert = new Insert();
        $insert->set_table_name('gallery_category');
        $insert->set_fields_and_values($data);
        $insert->execute();

    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }

}