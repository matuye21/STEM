<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT name, age, gradeLevel FROM students WHERE name='Gabe' AND age=15";
$sql = "SELECT * FROM students";
$sql = "UPDATE students SET name='Gabe', age=16";
$result = $conn->query($sql);
//create query

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["name"]. " is ". $row["age"]." years old and in grade " . $row["gradeLevel"]; 
echo "<br><br>";
}
}

else {
echo "0 results";
}

$conn->close();
?>
