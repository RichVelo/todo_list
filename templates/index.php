<?php

?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/normalize.css">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;700;800&display=swap" rel="stylesheet">
    <title>To-Do List</title>
</head>
<body>
    <header>
        <h1>What do we need to do today?</h1>
    </header>
    <main>
        <div class="list">
            <h2>To get done:</h2>
            <ul>
                <?php

                foreach($tasks as $task) {
                    echo '<li>' . $task['taskTitle'] . '</li>';
                }
                ?>
            </ul>
        </div>
        <section class="add-task-form">
            <h2>Add a new task</h2>
                <form method="POST">
                    <input class="newTask" name="taskTitle" placeholder="What's the task?">
                    <input class="submit" type="submit" value="Submit">
                </form>
        </section>
    </main>
</body>
</html>
