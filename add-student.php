<?php

if (!empty("full_name")) {
    $full_name = $_POST["full_name"];
}
if (!empty("level")) {
    $level = $_POST["level"];
}

var_dump($full_name, $level);
?>