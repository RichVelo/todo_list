<?php

?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>Bikes</title>
</head>
<body>
<h1>Look at my bikes data!</h1>
<ul>
    <?php

    foreach($tasks as $task) {
        echo '<li>' . $task['taskTitle'] . '</li>';
    }
    ?>
</ul>
</body>
</html>
