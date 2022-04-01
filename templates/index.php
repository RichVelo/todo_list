<?php

?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>To-Do List</title>
</head>
<body>
    <header>
        <h1>What do we need to do today?</h1>
    </header>
    <main>
        <ul>
            <?php

            foreach($tasks as $task) {
                echo '<li>' . $task['taskTitle'] . '</li>';
            }
            ?>
        </ul>
        <section class="newBike">
            <h2>Add a new task</h2>
            <h3>Add more bikes here</h3>
            <div>
                <form method="POST" action="./index.php">
                    <input class="newTask" name="taskTitle" placeholder="What's the task?">
                    <input class="submit" type="submit" value="Submit">
                </form>
            </div>
        </section>
    </main>
</body>
</html>
