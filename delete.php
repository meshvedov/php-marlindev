<?php
    $pdo = new PDO("mysql:host=localhost:3306; dbname=marvindev;", "root", "root");
    $sql = "delete from tasks where id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute($_GET);

    header("Location: index.php");