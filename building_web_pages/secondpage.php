<html>
    <head>
        <title>Second Page</title>
    </head>
    <body>
        <?php 
            print_r($_GET); 
            $id = $_GET["id"];
            $name = $_GET["name"];
            echo "<br> <strong>" . $id . ": {$name}" . "</strong>";
        
        ?>
        <br>
        <?php 
            $stirng = "kevin skoglund";
            echo urlencode($string); // after question mark
            echo "<br>";
            echo rawurlencode($string); // before question mark
        ?>
        
    </body>
</html>