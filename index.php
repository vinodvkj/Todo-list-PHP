
<?php
// Initialize an array to store tasks
$tasks = [];

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate the input
    $task = trim($_POST['task']);
    if (empty($task)) {
        $error = "Task cannot be empty.";
    } else {
        // Add the task to the list
        $tasks[] = htmlspecialchars($task);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .error { color: red; }
        ul { list-style-type: none; padding: 0; }
        li { background: #f4f4f4; margin: 5px 0; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>To-Do List</h1>

    <form method="POST" action="">
        <label for="task">Add a Task:</label>
        <input type="text" id="task" name="task">
        <button type="submit">Add</button>
    </form>

    <?php if (!empty($error)): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <h2>Your Tasks:</h2>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?= $task ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
