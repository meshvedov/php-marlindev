<?php

class QueryBuilder {

    public $pdo;

    function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost:3306; dbname=marvindev;", "root", "root");
    }

    function all($table) {
        $statement = $this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();
        $all = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $all;
    }

    function save($array, string $table) {
        $keys = array_keys($array);
        $columns = "";
        $tags = ":";
        foreach ($keys as $key) {
            $columns .= $key . ",";
            $tags .= $key . ",:";
        }
        $columns = rtrim($columns, ",");
        $tags = rtrim($tags, ",:");
        $sql = "INSERT INTO $table ($columns) VALUES ($tags)";
        $statement = $this->pdo->prepare($sql);
//    $statement->bindParam(":title", $arr['title']);
//    $statement->bindParam(":content", $arr['content']);
        $statement->execute($array);
    }

    public function saveById($id, string $table)
    {
        $sql = "SELECT * FROM $table where id=$id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    function updateTask($data, string $table) {
        $temp = array();
        foreach (array_keys($data) as $key) {
            array_push($temp, "$key=:$key");
        }
        $str = implode(" ,", $temp);
        $str = rtrim($str, ",");
        $sql = "update $table set $str where id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
    }

    public function delete($id, string $table)
    {
        $sql = "delete from $table where id=$id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }

    public function view($id, string $table)
    {
        $sql = "SELECT * FROM $table where id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}