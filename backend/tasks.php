<?php
session_start();

// Initialize tasks if not already set
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Add task if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {
    $task = $_POST['task'];
    $_SESSION['tasks'][] = $task;
}

// Mark task as completed if requested
if (isset($_GET['complete']) && isset($_SESSION['tasks'][$_GET['complete']])) {
    $_SESSION['tasks'][$_GET['complete']] = '<s>' . $_SESSION['tasks'][$_GET['complete']] . '</s>';
}

// Delete task if requested
if (isset($_GET['delete']) && isset($_SESSION['tasks'][$_GET['delete']])) {
    unset($_SESSION['tasks'][$_GET['delete']]);
}

// Display tasks
foreach ($_SESSION['tasks'] as $key => $task) {
    echo "<li>$task <a href=\"index.php?complete=$key\">[Complete]</a> <a href=\"index.php?delete=$key\">[Delete]</a></li>";
}
