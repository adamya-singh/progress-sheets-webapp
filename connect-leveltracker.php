<?php
$host = "localhost";
$dbname = "leveltracker";
$username = "root";
$password = "";

$connection = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection Error: " + mysqli_connect_error());
}
?>