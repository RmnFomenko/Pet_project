<?php

namespace App\Controllers\Models;

use App\Sql\Insert;
use App\Sql\Select;

class CategoryPosts
{
    public string $id;
    public string $name_category;

    public function __construct()
    {
        $this->select = new Select();
    }

    public function get_all_category_posts(): array
    {

        $this->select -> set_table_name('post_category');
        $this->select -> set_fields(['id',' name_category']);
        return $this->select-> execute();
    }

    public function get_category_image_by_id(int $ID): array
    {
        foreach ($this->posts as $post) {
            if ($post['id'] === $ID) {
                return $post;
            }
        }
        throw new \Exception('Категория постов с указаным айди не найдена');
    }


    public function save(array $data)
    {

        $insert = new Insert();
        $insert->set_table_name('post_category');
        $insert->set_fields_and_values($data);
        $insert->execute();

    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }

}