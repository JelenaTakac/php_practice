<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>

<body>
    <?php
    require_once("included_func.php");

    // include - will try to load the file, but it will not throw the error because of loading of included file. Include we will use when we include some HTML files
    // require - it throws an error if the file in not able to loaded from some reason. It will throw the failed error and not continue with the rest of program. Require we will use when we are require some functions
    ?>

    <?php hello("Everyone"); ?>
</body>

</html>