<?php

namespace App\Sql;
use PDO;

class Connector
{


    private array $config = [];
    private PDO $pdo;

    public function __construct()
    {
        $this->init_config();
        $this->db_connect();
    }

    private function init_config(): void
    {

        $this->config = require __DIR__ .'/../../config/db_cred.php';

    }

    private function getDns(): string
    {
        if(!$this->config['driver'] || !$this->config['host'] || !$this->config['dbname'])  {
            throw new Exception('Missing DNS data');
        }

        return $this->config['driver'] .':host='. $this->config['host'] .';dbname='. $this->config['dbname'] .'';

    }

    private function db_connect(): void
    {
        if(empty($this->config['user'] || epmty($this->config['pass']))) {
            throw new Exception('Empty user or password!');
        }

        $this->pdo = new PDO($this->getDns() , $this->config['user'], $this->config['pass']);

    }

    public function connect(): PDO
    {
        return $this->pdo;
    }

}