<?php

namespace App\Sql;

use App\Sql\Connector;
use App\Sql\Where;
use PDO;

class Delete
{
    private string $table_name;
    private Where $where;
    private PDO $connect;
    private array $data = [];

    public function __construct()
    {

        $this->where = new Where();
        $this->connect = (new Connector())->connect();

    }

    public function set_table_name(string $table_name): void
    {
        if (empty($table_name)) {
            throw new \Exception("Название таблицы не может быть пустым");
        }
        $this->table_name = $table_name;
    }


    public function build_sql(): string
    {
        if (empty($this->table_name)) {
            throw new \Exception("Название таблицы, поля и значения должны быть заданы");
        }

        return 'UPDATE FROM ' . $this->table_name . ' SET ' . $this->get_data() . $this -> where -> show_where();
    }

    public function execute()
    {
        $this->connect->query($this->build_sql());
    }

    public function set_data(array $values)
    {
        $this->data = $values;
    }

    public function and_where(array $condition): void
    {
        $this->where->and_where($condition);
    }

    public function or_where(array $condition): void
    {
        $this->where->or_where($condition);
    }

    private function get_data(): string
    {
        $result = [];
        foreach ($this->data as $field => $value) {
            $result[] = $field.' = '. is_numeric($value) ? $value : $this->connect->quote($value);
        }
        return implode(',' , $result);

    }

}