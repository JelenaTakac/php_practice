<html>
    <head>
        <title>Type Casting</title>
    </head>
    <body>
        <?php 
            $var1 = "2 brown foxes";
            $var2 = $var1 + 3;
            echo $var2;
        ?>
        <br>
        <?php 
            echo gettype($var1); echo "<br />";
            echo gettype($var2); echo "<br />";
            settype($var2, "string"); 
            echo gettype($var2); echo "<br />";
            $var3 = (int) $var1;
            echo gettype($var3); echo "<br />";
        ?>
        <br>
        Array: <?php echo is_array($var1); ?><br>
        Boolean: <?php echo is_bool($var1); ?><br>
        Float Number: <?php echo is_float($var1); ?><br>
        Integer Number: <?php echo is_int($var1); ?><br>
        NULL: <?php echo is_null($var1); ?><br>
        Numeric: <?php echo is_numeric($var1); ?><br>
        String: <?php echo is_string($var1); ?><br>
    </body>
</html>