<?php

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$belt = $_POST["belt"];

include "connect-student_info.php";

    $existsQuery = mysqli_query($connection,"SELECT * FROM students WHERE firstName='$firstName' AND lastName='$lastName'");        
if(mysqli_num_rows($existsQuery)>0)
{
    die("Student with that name already exists in database ");
}

$sql = "INSERT INTO students (firstName, lastName, belt) VALUES (?, ?, ?)";

$statement = mysqli_stmt_init($connection);

if (! mysqli_stmt_prepare($statement, $sql)) {
    die(mysqli_error($connection));
}

mysqli_stmt_bind_param($statement, "sss", $firstName, $lastName, $belt);

mysqli_stmt_execute($statement);

echo "Record saved.";

?>