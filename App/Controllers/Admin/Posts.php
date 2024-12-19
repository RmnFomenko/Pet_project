<?php

namespace App\Controllers\Models;

use App\Sql\Insert;
use App\Sql\Delete;
use App\Sql\Update;
use App\Sql\Select;


class Posts
{
    public int $id;
    public string $title;
    public string $content;
    public int $author_id;
    public int $category_id;
    public string $created;
    public string $updated;
    public Select $select;


    public function __construct()
    {
        $this->select = new Select();
    }

    public function get_all_posts(): array
    {
        $this->select -> set_table_name('posts p');
        $this->select -> set_fields(['p.id',' p.title', 'p.content', 'pc.name_category', 'u.name']);
        $this->select -> set_join([
            'JOIN users u' => 'u.id = p.author_id',
            'JOIN post_category pc' => 'pc.id = p.category_id'
        ]);
        return $this->select-> execute();
    }

    public function get_post_by_id(int $id): array
    {
        $this->select -> set_table_name('posts p');
        $this->select -> set_fields(['p.id',' p.title', 'p.content', 'pc.name_category', 'u.name']);
        $this->select -> set_join([
            'JOIN users u' => 'u.id = p.author_id',
            'JOIN post_category pc' => 'pc.id = p.category_id'
        ]);
        $this->select->and_where(['p.id', '=' , $id]);
        return $this->select-> execute();
    }

    public function save(array $data)
    {

        $insert = new Insert();
        $insert->set_table_name('posts');
        $insert->set_fields_and_values($data);
        $insert->execute();

    }

    public function update(array $data)
    {

        $update = new Update();
        $update->set_table_name('posts');
        $update->set_data($data);
        $update->execute();

    }

    public function delete($id)
    {

        $delete = new Delete();
        $delete->set_table_name('posts');
        $delete->and_where(['id', '=' , $id]);
        $delete->execute();

    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }

}