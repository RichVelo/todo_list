<?php

?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>To-Do List</title>
</head>
<body>
<h1>What do we need to do today?</h1>
<ul>
    <?php

    foreach($tasks as $task) {
        echo '<li>' . $task['taskTitle'] . '</li>';
    }
    ?>
</ul>
</body>
</html>
