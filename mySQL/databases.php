<?php
// 1. Create a database connection
$mysqli = new mysqli("localhost", "root", "", "widget_corp");
if ($mysqli->connect_error) {
    die("Connect Error (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Basics</title>
</head>

<body>
    <?php

    ?>
</body>

</html>