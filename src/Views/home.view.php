<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>German's Awesome PHP Message Board</h1>
    <?php
    foreach ($messages as $message) {
        $message = htmlspecialchars($message);
        echo "<div>$message</div>";
    }
    ?>
    <?php require __DIR__ . "/partials/sample.view.php" ?>
</body>

</html>