<?php
$servername = "192.168.0.216";
$username = "remote";
$password = "anime";
$dbname = "weatherData";
  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dataTable";
//errors 

if ($conn->query($sql) === TRUE) {
    echo dataInt;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
