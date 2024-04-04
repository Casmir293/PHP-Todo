<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TODO</title>
</head>
<body>
    <h1>PHP Task Manager</h1>
    <form action="backend/addTask.php" method="post">
        <input type="text" name="task" placeholder="Input task...">
        <button type="submit">Submit</button>
    </form>

    <h2>My Tasks</h2>
    <ul>
        <?php
        include_once 'backend/taskList.php';
        ?>
    </ul>
</body>
</html>