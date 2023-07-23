<?php

$fullName = $_POST["fullName"];
$level = $_POST["level"];

$host = "localhost";
$dbname = "student_info";
$username = "root";
$password = "";

$connection = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection Error: " + mysqli_connect_error());
}

$sql = "INSERT INTO students (fullName, level)
        VALUES (?, ?)";

$statement = mysqli_stmt_init($connection);

if (! mysqli_stmt_prepare($statement, $sql)) {
    die(mysqli_error($connection));
}

mysqli_stmt_bind_param($statement, "ss", $fullName, $level);

mysqli_stmt_execute($statement);

echo "Record saved.";
?>