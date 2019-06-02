<?php
//    var_dump($_POST, $_GET);die;

require_once 'database/QueryBuilder.php';

    $data = [
        'id' => $_GET['id'],
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ];

    $db = new QueryBuilder();

    $db->updateTask($data, "tasks");

header("Location: index.php");exit();