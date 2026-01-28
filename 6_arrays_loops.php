<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-size: 16px;
        }
        input {
            background-color: black;
            color: white;
            border-radius: 10px;
            height: 24px;
        }
        input[type="submit"] {
            height: 24px;
        }
        li {
            width: fit-content;
            color: black;
            margin-bottom: 10px;
            list-style: none;
            display: flex;
            flex-direction: column;
            background-color: #eee;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form action="6_arrays_loops.php" method="post">
        <input type="text" name="username">
        <input type="submit" value="submit">
    </form>
    <?php
        if (!empty($_POST)) {
            echo "<h2>Raw POST data</h2>";
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
        }

        $languages = ["c++", "html", "css", "javascript", "python", "php"];

        echo "<ul>";
        foreach($languages as $language){
            echo "<li>".$language."</li>";
        }
        echo "</ul>";
    ?>
    <?php
        // $colors = ["red", "green", "blue"];
        // foreach ($colors as $color) {
        //     echo $color . "<br>"; 
        // }
        
        // $user = [
        //     "name" => "Zohaib",
        //     "age" => 20,
        //     "country" => "Pakistan"
        // ];
        // foreach ($user as $key => $value) {
        //     echo "$key: $value<br>";
        // }
    ?>
</body>
</html>