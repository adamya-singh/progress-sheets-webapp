<?php

$fullName = $_POST["firstName"];
$belt = $_POST["belt"];
$level = $_POST["beltLevel"];

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

mysqli_stmt_bind_param($statement, "sss", $fullName, $belt, $beltLevel);

mysqli_stmt_execute($statement);

echo "Record saved.";

?>