<?php

$user = 'root';
$password = 'root';
$db = 'inventory';
$servername = 'localhost:8889';
$dbname = 'attendanceApp';

$conn = mysqli_connect($servername, $user, $password, $dbname);
$query = "SELECT * from dailyAttendanceTable";

$result = $conn->query($query);

$return_result = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($return_result, $row);
    }
}

header("Content-type:application/json");
echo json_encode($return_result);

