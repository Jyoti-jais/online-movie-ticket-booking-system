<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$port = 3306;

$con = mysqli_connect($host, $user, $pass, "", $port);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($con, "SHOW DATABASES;");
echo "<h3>Databases visible to PHP:</h3><ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row['Database'] . "</li>";
}
echo "</ul>";

mysqli_close($con);
?>
