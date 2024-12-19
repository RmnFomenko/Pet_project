<?php

namespace App\Sql;

use App\Sql\Connector;
use App\Sql\Where;
use PDO;

class Select
{
    private string $table_name;
    private Where $where;
    private array $fields = ['*'];
    private array $join = [];
    private PDO $connect;

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

        return 'SELECT '. $this-> get_fields() .' FROM ' . $this->table_name . ' ' . $this->get_join() . $this -> where -> show_where();
    }

    public function execute()
    {
        return $this->connect->query($this->build_sql())->fetchAll(PDO::FETCH_ASSOC);

    }

    public function and_where(array $condition): void
    {
        $this->where->and_where($condition);
    }

    public function or_where(array $condition): void
    {
        $this->where->or_where($condition);
    }

    public function set_fields(array $fields): void
    {
        $this->fields = $fields;
    }

    public function set_join(array $join): void
    {
        $this->join = $join;
    }

    private function get_join(): string
    {
        $result = '';
        if (!empty($this->join)) {
            $joins = [];
            foreach ($this->join as $key => $value) {
                $joins[] = $key . ' ON ' . $value;
            }
            $result = implode(' ', $joins);
        }

        return $result;
    }

    private function get_fields(): string
    {
        return implode(', ', $this->fields);
    }

}