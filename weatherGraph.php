<?php
function getData() {	

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
$result = $conn->query($sql);
	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "temp: " . $row["temp"]. " humid: " . $row["humid"]. " time: " . $row["time"];   
    }
} else {
    echo "0 results";
}
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<meta charset="utf-8">
<title></title>

<script type="text/javascript">

alert('<?php echo getData() ?>');




</script>

</head>
<body>


<div id="chart">
</div>
<script>
	
var w = window.innerWidth;
var h = window.innerHeight;

var options = {
series: [
{
name: "Temp",
data: ["temp"]
},
{
name: "Humidity",
data: ["humid"]
},
],
chart: {
height: h,
width: w,
type: 'line',
dropShadow: {
enabled: true,
color: '#000',
top: 18,
left: 7,
blur: 10,
opacity: 0.2
},
toolbar: {
show: false
}
},
colors: ['#ff0000', '#0000ff'],
dataLabels: {
enabled: true
},
stroke: {
curve: 'smooth'
},
title: {
text: 'Average High & Low Temperature',
align: 'left'
},
grid: {
borderColor: '#e7e7e7',
row: {
colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
opacity: 0.5
},
},
markers: {
size: 1
},
xaxis: {
categories: ["time"],
title: {
text: 'time'
}
},
yaxis: {
title: {
text: 'Temperature/Humidity'
},
min: 0,
max: 90
},
legend: {
position: 'top',
horizontalAlign: 'right',
floating: true,
offsetY: -25,
offsetX: -5
}
};


var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

</script>
</body>
</html>
