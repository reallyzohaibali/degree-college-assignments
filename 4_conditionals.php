<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional</title>
</head>
<body>
    <?php
        $hour = date("H");
        if ($hour < 12) {
            echo "Good morning";
        } else {
            echo "Good afternoon";
        }
    ?>
</body>
</html>