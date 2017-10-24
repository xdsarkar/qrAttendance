<?php

function insertSQL($e, $t)
{
    return "INSERT INTO dailyAttendanceTable (email, login_date)
    VALUES ($e, $t)";
}

$email = $_POST['email'];
$timestamp = $_POST['t'];
