<?php
    $id = $_GET['id'];
    $sql = "SELECT title, content FROM tasks where id=:id";
    $pdo = new PDO("mysql:host=localhost:3306; dbname=marvindev;", "root", "root");
    $statement = $pdo->prepare($sql);
    $statement->execute($_GET);
    $res = $statement->fetch(PDO::FETCH_ASSOC);
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
