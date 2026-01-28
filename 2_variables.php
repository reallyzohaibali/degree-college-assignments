<?php

session_start();

echo $abc = $_SESSION['abc'];

unset($_SESSION['abc']);
session_unset('');
session_destroy();
// $name = "Zohaib";
// $age = 20;

// echo "My name is $name<br>";
// echo "I am $age years old";

if(isset($_POST['save'])){
 echo $name = $_POST['name'];
   echo $email = $_POST['email'];
   echo $profile = $_FILES['profile']['name'];
   echo $profile_tmp = $_FILES['profile']['tmp_name'];
}

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="file" name="profile">
        <input type="submit" name="save">
    </form>
</body>
</html>