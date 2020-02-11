<?php
$servername = "localhost";
$username = "matuye21";
$password = "uyezu";
$dbname = "matuye21";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = "Matthew";
$age = 15;
$gradeLevel = 11;

$sql = "INSERT INTO students (name, age, gradeLevel)
VALUES ('$name', '$age', '$gradeLevel')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>