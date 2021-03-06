<?php
    require "database/QueryBuilder.php";

    $db = new QueryBuilder();
    $tasks = $db->all("tasks");
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
                <?php foreach ($tasks as $task) { ?>
                    <tr>
                        <td><?= $task['id']; ?></td>
                        <td><?= $task['title']; ?></td>
                        <td>
                            <a href="show.php?id=<?= $task['id']; ?>" class="btn btn-primary">Show</a>
                            <a href="edit.php?id=<?= $task['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?= $task['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>