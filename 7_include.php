<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>External Library</title>
</head>
<body>
    <?php
        // include "external.php";
        // include_once "external.php";
        // require "external.php";
        require_once "external.php";
        printHeading("Zohaib Ali");
        printHeading(add(2,5));
        printHeading(multiply(5, 125));
    ?>
</body>
</html>