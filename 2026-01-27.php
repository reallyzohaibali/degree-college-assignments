<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>27 January</title>
    <style>
        body { display: flex; flex-direction: column; align-items: center; gap: 16px;} 
        .container { border: 1px solid black; padding: 8px; border-radius: 4px; 
            margin-bottom: 16px; width: fit-content; }
        h2 { text-align: center; margin: 0; }
        form { display: flex; flex-direction: column; justify-content: center; align-items: start; gap: 8px; }
        input { font-size: 16px; padding: 4px; }
        select, option { font-size: 16px; padding: 4px; }
        textarea { font-size: 16px; }
        .submit-btn { display: flex; width: 100%; justify-content: center; gap: 16px; }
        .flex-gap { display: flex; align-items: center; gap: 16px; }
        table, th, tr, td { border: 1px solid black; border-collapse: collapse; text-align: center; padding: 4px;}
    </style>
</head>

<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){
    // if log out is pressed, remove session data
    
    if(isset($_POST["logout"])){
        // empty session
        $_SESSION = [];
        session_destroy();
    }

    // if form is submitted, store data in session

    if(isset($_POST["save"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["age"] = $_POST["age"];
        $_SESSION["DateOfBirth"] = $_POST["dob"];
        $_SESSION["time"] = $_POST["time"];
        $_SESSION["gender"] = $_POST["gender"];
        $_SESSION["level"] = $_POST["level"];
        $_SESSION["favorite_color"] = $_POST["favorite_color"];
        $_SESSION["about"] = $_POST["about"];
        $_SESSION["semester"] = $_POST["semester"];
        $_SESSION["skills"] = $_POST["skill"];
        $_SESSION["browser"] = $_POST["browser"];
    }
}

    if (isset($_SESSION["username"])){
        echo "<table>";
            echo "<tr><th>Key</th><th>Values</th></tr>";
            foreach($_SESSION as $key => $value){
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
        echo "</table>";
        echo "<form method=\"POST\" action=\"\">
                <input type=\"submit\" name=\"logout\" value=\"log out\">
        </form>";
    }
?>

<body>
    <?php if(!isset($_SESSION["username"])): ?>
    <div class="container">
        <h2>Form</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <!-- TEXT INPUT -->
            <label for="username">Username</label>
            <input id="username" type="text" name="username" placeholder="e.g. username" size="40" maxlength="30" 
                minlength="3" required autocomplete="username">
            <!-- EMAIL -->
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="e.g. johndoe837@gmail.com" size="40" required>
            <!-- PASSWORD -->
            <label for="password">Password</label>
            <input type="password" id="password" name="password" minlength="6" size="40" required>
            <!-- NUMBER -->
            <div class="flex-gap">
                <label for="age">Age</label>
                <input type="number" id="age" value="18" name="age" min="1" max="29" step="1">
            </div>
            <!-- DATE -->
            <div class="flex-gap">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob">
            </div>
            <!-- TIME -->
            <div>
                <label for="time">Time</label>
                <input type="time" id="time" name="time">
            </div>
            <!-- COLOR -->
            <div class="flex-gap">
                <label for="color">Favorite Color</label>
                <input type="color" id="color" name="favorite_color">
            </div>
            <!-- RANGE -->
            <div class="flex-gap">
                <label for="level">Level</label>
                <input type="range" id="level" name="level" min="0" max="100" step="5">
            </div>
            <!-- SELECT -->
            <label for="semester">Semester</label>
            <div class="flex-gap">
                <select id="semester" name="semester">
                    <option value="">-- Select Semester --</option>
                    <option value="1">First Semester</option>
                    <option value="2">Second Semester</option>
                    <option value="3">Third Semester</option>
                    <option value="4">Fourth Semester</option>
                    <option value="5">Fifth Semester</option>
                    <option value="6">Sixth Semester</option>
                    <option value="7">Seventh Semester</option>
                    <option value="8">Eighth Semester</option>
                </select>
            </div>
            <!-- RADIO BUTTONS -->
            <fieldset>
                <legend>Gender</legend>
                <label>
                    <input type="radio" name="gender" value="male">
                    Male
                </label>
                <label>
                    <input type="radio" name="gender" value="female">
                    Female
                </label>
                <label>
                    <input type="radio" name="gender" value="other">
                    Other
                </label>
            </fieldset>
            <!-- CHECKBOXES -->
            <fieldset>
                <legend>Skills</legend>
                <label>
                    <input type="checkbox" name="skills[]" value="php">
                    PHP
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="python">
                    Python
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="javascript">
                    JavaScript
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="django">
                    Django
                </label>
            </fieldset>
            <!-- TEXTAREA -->
            <label for="about">About You</label>
            <textarea id="about" name="about" rows="4" cols="37" placeholder="write something about yourself"></textarea>
            <!-- DATALIST -->
            <label for="browser">Favorite Browser</label>
            <input list="browsers" id="browser" name="browser" size="40">
            <datalist id="browsers">
                <option value="Chrome" class="option"></option>
                <option value="Firefox" class="option"></option>
                <option value="Edge" class="option"></option>
                <option value="Safari" class="option"></option>
                <option value="Brave" class="option"></option>
            </datalist>

            <!-- FILE UPLOAD
            <label for="file">Upload File</label>
            <input type="file" id="file" name="file" accept=".jpg, .png, .pdf">
            HIDDEN
            <input type="hidden" name="token" value="specialkindofvariable">
            URL
            <label for="website">Website</label>
            <input type="url" id="website" name="website" placeholder="https://example.com" size="40">
            TEL
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="+92-3XX-XXXXXXX" size="40">
            SEARCH
            <label for="search">Search Query</label>
            <input type="search" id="search" name="search" size="40"> -->

            <!-- BUTTONS -->
            <div class="submit-btn">
                <input type="submit" name="save" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
    <?php endif; ?>
</body>
</html>