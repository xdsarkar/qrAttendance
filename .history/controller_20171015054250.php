<?php

$user = 'root';
$password = 'root';
$db = 'inventory';
$servername = 'localhost:8889';
$dbname = 'attendanceApp';

$conn = mysqli_connect($servername, $user, $password, $dbname);

$decodedBody = json_decode($_POST['postBody'], true);

$email = trim($decodedBody['email']);

$query = "INSERT INTO dailyAttendanceTable (email, login_date) VALUES ('$email')";
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
    echo conn->error;
}
$conn->close();
echo json_encode($result);


