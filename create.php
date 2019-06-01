<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Create</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Create Task</h1>
            <form action="store.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="content"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
