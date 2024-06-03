<?php
$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "widget_corp";

// 1. Create a database connection and 2. Select database (Before PHP 5.5.0 I should insluce 2nd step -> 
// $db_select = mysql_select_db($db_name, $conn)... but using MySQLi you don't explicitly select a database as you did with mysql_select_db() function, insted you pass the database name as the fourth parameter to mysqli constructor.)

$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connect Error (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
echo "Connected successfully";

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
    // 3. Performe database query
    $sql = "SELECT * FROM subjects";
    $result = $conn->query($sql);

    // 4. Use returned data
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo  "<br>" . "Menu Name: " . $row["menu_name"] . ", position: " . $row["position"];
        }
    } else {
        echo "0 results";
    }

    // 5. Close connection
    $conn->close();

    // Conclusion: PHP Database Interaction in FIVE steps
    /*
    1. Create a connection
    2. Select a database
    3. Perform database query
    4. Use returned data (if any)
    5. Close connection
    */

    ?>
</body>

</html>