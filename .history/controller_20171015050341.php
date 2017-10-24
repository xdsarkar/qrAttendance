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

header("Content-type:application/json");
if ($conn->query($query) === TRUE) {
    $result = array(
        'email' => $email,
        'message' => 'Present'
    );
} else {
    $result = array(
        'email' => '',
        'message' => 'Something went wrong'
    );
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
}

$conn->close();
return json_encode($result);


