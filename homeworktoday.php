<!-- Command
USE test;
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100),
    email VARCHAR(100),
    birth_date DATE,
    gpa DECIMAL(3, 2),
    enrollment_status ENUM('Active', 'Graduated', 'Suspended')
);
  -->
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "test";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = $_POST['student_name'];
    $email  = $_POST['email'];
    $dob    = $_POST['birth_date'];
    $gpa    = $_POST['gpa'];
    $status = $_POST['status'];

    $sql = "INSERT INTO students (student_name, email, birth_date, gpa, enrollment_status) VALUES (?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    
    mysqli_stmt_bind_param($stmt, "ssdds", $name, $email, $dob, $gpa, $status);

    if (mysqli_stmt_execute($stmt)) {
        echo "<b style='color: green;'>Success! Student added via procedural functions.</b>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    
    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Procedural PHP Form</title>
</head>
<body>
    <h2>Student Registry (Function-Based)</h2>
    <form method="POST" action="">
        <label>Full Name:</label><br>
        <input type="text" name="student_name" required><br><br>

        <label>Email Address:</label><br>
        <input type="email" name="email"><br><br>

        <label>Birthday:</label><br>
        <input type="date" name="birth_date"><br><br>

        <label>Current GPA:</label><br>
        <input type="number" step="0.01" name="gpa"><br><br>

        <label>Enrollment Status:</label><br>
        <select name="status">
            <option value="Active">Active</option>
            <option value="Graduated">Graduated</option>
            <option value="Suspended">Suspended</option>
        </select><br><br>

        <input type="submit" value="Save Student">
    </form>
</body>
</html>