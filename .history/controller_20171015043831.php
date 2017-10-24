<?php

$user = 'root';
$password = 'root';
$db = 'inventory';
$servername = 'localhost:8889';
$dbname = 'attendanceApp';

$conn = mysqli_connect($servername, $user, $password, $dbname);

function insertSQL($e, $t)
{
    return "INSERT INTO dailyAttendanceTable (email, login_date)
    VALUES ($e, $t)";
}

$email = $_POST['email'];
$timestamp = $_POST['t'];

$query = insertSQL($email, $timestamp);

if ($conn->query($query) === TRUE) {

}