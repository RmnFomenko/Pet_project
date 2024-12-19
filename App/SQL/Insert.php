<?php

namespace App\Sql;

use App\Sql\Connector;
use PDO;

class Insert
{
    private string $table_name;
    private array $field_set = [];
    private array $values = [];
    private PDO $connect;


    public function __construct()
    {
        $this->connect = (new Connector())->connect();

    }

    public function set_table_name(string $table_name): void
    {
        if (empty($table_name)) {
            throw new \Exception("Название таблицы не может быть пустым");
        }
        $this->table_name = $table_name;
    }

    public function set_fields_and_values(array $data): void
    {
        if (empty($data)) {
            throw new \Exception("Данные не могут быть пустыми");
        }

        if (!$this->is_multidimensional_array($data)) {
            $data = [$data];
        }

        $this->field_set = array_keys($data[0]);

        foreach ($data as $row) {
            if (array_keys($row) !== $this->field_set) {
                throw new \Exception("Ключи всех строк данных должны совпадать");
            }
        }

        $this->values = array_map(fn($row) => array_values($row), $data);
    }

    public function build_sql(): string
    {
        if (empty($this->table_name) || empty($this->field_set) || empty($this->values)) {
            throw new \Exception("Название таблицы, поля и значения должны быть заданы");
        }

        return 'INSERT INTO ' . $this->table_name
            . ' (' . implode(', ', $this->field_set) . ') VALUES '
            . $this->get_values();
    }

    public function execute()
    {
        $this->connect->query($this->build_sql());
    }

    private function is_multidimensional_array(array $array): bool
    {
        return isset($array[0]) && is_array($array[0]);
    }

    private function get_values(): string
    {
        $result = [];
        foreach ($this->values as $value) {
            $result[] = '(' . implode(', ', array_map(fn($val) => "'" . addslashes((string)$val) . "'", $value)) . ')';
        }
        return implode(', ', $result);
    }
}