<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>

<h1>GET form</h1>

<form method="get" action="5_forms.php">

    <label>Your name:</label>
    <input type="text" name="username">

    <button type="submit">Submit</button>

</form>

<h1>POST form</h1>

<form method="post" action="5_forms.php">

    <label>Your name:</label>
    <input type="text" name="username" size="64" required>

    <label for="age">Age</label>
    <input id="age" type="number" name="age" min="0" required>

    <button type="submit">Submit</button>

</form>

<?php
// unsafe

// if (isset($_GET["username"])) {
//     echo "<p>Hello, <strong>".$_GET["username"]."</strong>!</p>";
// }

// <script>alert("hi")</script>
// XSS

// safe

if (isset($_GET["username"])) {
    $name = htmlspecialchars($_GET["username"]);
    echo "<p>Hello, <strong>".$name."</strong>!</p>";
}

if (isset($_POST["username"]) && isset($_POST["age"])) {
    $name = htmlspecialchars($_POST["username"]);
    $age = (int) $_POST["age"];
    echo "<p>Hello, <strong>".$name."</strong>! You are ".$age." year(s) old.</p>";
}

?>
</body>
</html>
