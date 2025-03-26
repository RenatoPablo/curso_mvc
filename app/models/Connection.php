<?php

namespace app\models;

abstract class Connection
{
    private $dbName = 'mysql:host=localhost;dbname=cursomvc';
    private $user = 'root';
    private $pass = '';

    protected function connect()
    {
        try {
            $conn = new \PDO($this->dbName, $this->user, $this->pass);
            $conn->exec("set names utf8");
            return $conn;
        } catch (\PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}