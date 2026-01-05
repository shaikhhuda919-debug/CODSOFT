<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "Quizmaster_codsoft");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
