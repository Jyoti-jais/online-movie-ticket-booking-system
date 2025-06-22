<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "moviethreatredb";
$port = 3306;

$con = mysqli_connect($host, $user, $pass, $db, $port);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
