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

$decodedBody = json_decode($_POST['postBody'], true);

error_log(print_r($decodedBody, true));

$email = $decodedBody['email'];
$timestamp = $decodedBody['timestamp'];

$query = insertSQL($email, $timestamp);

header("Content-type:application/json");
if ($conn->query($query) === TRUE) {
    $result = array(
        'email' => $email,
        'message' => 'Present'
    );
    error_log()
} else {
    $result = array(
        'email' => '',
        'message' => 'Something went wrong'
    );
}

$conn->close();
return json_encode($result);


