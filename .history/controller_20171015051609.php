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
    VALUES (mysqli_real_escape_string($e), mysqli_real_escape_string($t))";
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
    error_log(print_r($result, true));
} else {
    $result = array(
        'email' => '',
        'message' => 'Something went wrong'
    );
    echo "Error creating database: " . $conn->error;
    exit;
}
$conn->close();
echo json_encode($result);


