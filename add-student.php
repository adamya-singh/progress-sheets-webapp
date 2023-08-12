<?php

$fullName = $_POST["fullName"];
$belt = $_POST["belt"];
$beltLevel = $_POST["beltLevel"];

include "connect-student_info.php";

    $existsQuery = mysqli_query($connection,"SELECT * FROM students WHERE fullName='$fullName'");        
if(mysqli_num_rows($existsQuery)>0)
{
    die("Student with that name already exists in database ");
}

$sql = "INSERT INTO students (fullName, belt, beltLevel) VALUES (?, ?, ?)";

$statement = mysqli_stmt_init($connection);

if (! mysqli_stmt_prepare($statement, $sql)) {
    die(mysqli_error($connection));
}

mysqli_stmt_bind_param($statement, "ssi", $fullName, $belt, $beltLevel);

mysqli_stmt_execute($statement);

echo "Record saved.";

?>