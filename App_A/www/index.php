<!DOCTYPE html>
<html>
<head>
    <title>การแสดงรายชื่อ Hero โดยณภัคพงศ์ รหัส 645162010003</title>
</head>
<body>

<h3>การแสดงรายชื่อ Hero โดย ณภัคพงศ์ รหัส 645162010003 </h3>

<?php
$servername = "localhost";
$username = "tamamaxx";
$password = "P@ssw0rd";
$dbname = "0003_LAB_Exam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Hero";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> <a href=\"http://a.b.c.d/hero.php?id=1\"><img src=\". $row["Picture_link"]. "\" />  ". $row["Name"]. " </a><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<br>
Developed by <a href="http://a.b.c.d:99XX/index.html">ณภัคพงศ์ รหัส 645162010003 </a>
</body>
</html>
