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

error_log(print_r($email, true));

$query = insertSQL($email, $timestamp);

error_log(print_r($query, true));

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


