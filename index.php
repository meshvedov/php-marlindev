<?php
    $tasks = [
            [
                "id" => 15,
                "title" => "go to the store",
                "content" => "qqq"
            ]
    ];

    $pdo = new PDO("mysql:host=localhost:3306; dbname=marvinweb", "root", "");
    $statement = $pdo->prepare("SELECT * FROM tasks");
    $result = $statement->execute();
    var_dump($statement->fetchAll(PDO::FETCH_ASSOC));die();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PHP first</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="heading-1">All Tasks</h1>
            <form action="create.php">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Add Task</button>
                </div>
            </form>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $task)  ?>
                    <tr>
                        <td><?= $task['id']; ?></td>
                        <td><?= $task['title']; ?></td>
                        <td>
                            <a href="show.html" class="btn btn-primary">Show</a>
                            <a href="edit.html" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>