<?php
    $arr = $_POST;
    $sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
    $pdo = new PDO("mysql:host=localhost:3306; dbname=marvindev", "root", "root");
    $statement = $pdo->prepare($sql);
//    $statement->bindParam(":title", $arr['title']);
//    $statement->bindParam(":content", $arr['content']);
    $statement->execute($_POST);

    header("Location: index.php");
    exit;
