<html>
    <head>
        <title>Loops: break</title>
    </head>
    <body>
      <?php 
        for ($count = 0; $count <= 10; $count++) {
            echo $count;
            if ($count == 5) {
                break;
            }
            echo ", ";
        }
      ?>
    </body>
</html>