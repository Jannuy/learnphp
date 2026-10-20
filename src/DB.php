<?php

namespace App;

use PDO;
use PDOException;

class DB
{
    private PDO $conn;

    public function __construct()
    {
        $servername = "localhost:33062";
        $port = 33062;
        $username = "root";
        $password = "example";
        $dbname = "learnphp";

               if (!extension_loaded('pdo_mysql')) {
            throw new \RuntimeException(
                'The PDO MySQL driver is not enabled. Enable the pdo_mysql PHP extension.'
            );
        }


        try {
                $this->conn = new PDO(
                "mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8mb4",
                $username,
                $password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new \RuntimeException('Database connection failed.', 0, $e);
        }
    }

    public function all($table, $class)
    {
        $sql = "SELECT * FROM $table";
        // Execute the SQL query
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, $class);
        return $result->fetchAll();
    }

    public function where($table, $class, $field, $value)
    {
        $sql = "SELECT * FROM $table WHERE $field='$value'";
        // Execute the SQL query
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, $class);
        return $result->fetchAll();
    }

    public function find($table, $class, $id)
    {
        $sql = "SELECT * FROM $table WHERE id=$id";
        // Execute the SQL query
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, $class);
        return $result->fetch();
    }

    public function insert($table, $fields)
    {
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(', ', $fieldNames);
        $fieldValuesText = implode("', '", $fields);
        $sql = "INSERT INTO $table ($fieldNamesText) VALUES ('$fieldValuesText')";
        $this->conn->exec($sql);
    }

    public function update($table, $fields, $id)
    {
        $updateText = '';
        foreach ($fields as $name => $value) {
            $updateText .= "$name='$value', ";
        }
        $updateText = substr($updateText, 0, -2);
        $sql = "UPDATE $table SET $updateText WHERE id=$id";
        $this->conn->exec($sql);
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=$id";
        $this->conn->exec($sql);
    }
}