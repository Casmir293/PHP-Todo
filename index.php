<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="" method="POST">
            <input type="text" name="task" placeholder="Enter a new task">
            <button type="submit">Add Task</button>
        </form>

        <h2>Tasks:</h2>
        <ul>
            <?php include_once './backend/tasks.php'; ?>
        </ul>
    </div>
</body>
</html>
