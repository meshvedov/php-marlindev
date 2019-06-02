<?php

require_once 'database/QueryBuilder.php';

$db = new QueryBuilder();
$id = $_GET['id'];
$res = $db->view($id, "tasks");


//    var_dump($res);die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Show</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?= $res['title'];?></h1>
            <p>
                <?= $res['content'];?>
            </p>
            <a href="index.php">Go back</a>
        </div>
    </div>
</div>
</body>
</html>
