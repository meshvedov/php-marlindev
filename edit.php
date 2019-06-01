<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tasks where id=:id";
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
    <title>Edit</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Edit Task</h1>
            <form action="update.php?id=<?= $res['id'];?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" value="<?= $res['title']; ?>" name="title">
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control"><?= $res['content']; ?></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-warning">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
