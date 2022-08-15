<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<?php
$titleTemp = "รายละเอียดของ Hero โดย ณภัคพงศ์  รหัส 645162010003";
$title = "";
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

$sql = "SELECT * FROM Hero where Hero_id=".$_GET["id"];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $heroName = $row["Name"];
    while($row = $result->fetch_assoc()) {
        echo "<br> <a href=\"http://a.b.c.d/hero.php?id=1\"><img src=\". $row["Picture_link"]. "\" />  ". $row["Name"]. " </a><br>". $row["Detail"] ;
    }
    $title = sprintf($titleTemp,$heroName);

    echo $title;
    // รายละเอียดหนัง

    $sql2 = "SELECT Movie.* FROM Hero_in_movie INNER JOIN Movie ON Hero_in_movie.Movie_id = Movie.Movie_id where Hero_in_movie.Hero_id=".$_GET["id"];
    $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
        echo "<br>ปรากฎในภาพยนตร์"
        while($row2 = $result2->fetch_assoc()) {
            echo "<br> &nbsp;-". $row2["Name"];
        }
    }

} else {
    echo "0 results";
}

$conn->close();

echo "<a href=\"index.php\">HOME</a>";
echo "<script>document.title=".$title."</script>";
?>

</body>
</html>
