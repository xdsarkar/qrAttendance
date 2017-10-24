<?php
    $user = 'root';
    $password = 'root';
    $db = 'inventory';
    $servername = 'localhost:8889';

    // Create Database
    $conn = mysqli_connect($servername, $user, $password);
    $sql = "CREATE DATABASE attendanceApp";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    $conn->close();


    // Create Table
    $conn = mysqli_connect($servername, $user, $password, 'attendanceApp');
    $table = "
        CREATE TABLE dailyAttendanceTable (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(50),
            login_date DATETIME DEFAULT CURRENT_TIMESTAMP
        )";

    if ($conn->query($table) === TRUE){
        echo 'Table created successfully';
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();