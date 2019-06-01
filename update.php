<?php
//    var_dump($_POST, $_GET);die;
    $data = [
        'id' => $_GET['id'],
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ];
    $sql = "update tasks set title=:title, content=:content where id=:id";
    $pdo = new PDO("mysql:host=localhost:3306; dbname=marvindev;", "root", "root");
    $statement = $pdo->prepare($sql);
    $statement->execute($data);

    header("Location: index.php");exit();