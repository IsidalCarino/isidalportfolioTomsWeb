<?php

$conn = mysqli_connect('localhost', 'root', '', 'isidalportfolio');

if (!$conn) {
    die("CONNECTION FAILED".mysqli_connect_error());
}