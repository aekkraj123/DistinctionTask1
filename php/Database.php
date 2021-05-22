<?php

namespace app;

use PDO;
use PDOException;

class Database
{
    private $dbname;
    private $host;
    private $port;
    private $username;
    private $password;
    private $driver;

    private $db;

    public function __construct($username, $password, $dbname = '', $host = "127.0.0.1", $port = 3306, $driver = "mysql")
    {
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->host = $host;
        $this->port = $port;
        $this->driver = $driver;
    }

    public function setDB($db)
    {
        $this->db = $db;
    }

    public function insert($table, $values): int
    {
        $this->connect();
        $field_names = array_keys($values[0]);
        $sql = "INSERT INTO $table";
        $fields = '( ' . implode(' ,', $field_names) . ' )';
        $bound = '(:' . implode(', :', $field_names) . ' )';
        $sql .= $fields . ' VALUES ' . $bound;

        $stmt = $this->db->prepare($sql);
        foreach ($values as $vals) {
            $stmt->execute($vals);
        }

        return $this->db->lastInsertId();
    }

    public function connect(): bool
    {
        try {
            if (!$this->db instanceof PDO) {
                $this->db = new PDO($this->getDSN(), $this->username, $this->password);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        return true;
    }

    private function getDSN(): string
    {
        return sprintf("%s:host=%s;dbname=%s;port=%d", $this->driver, $this->host, $this->dbname, $this->port);
    }

}