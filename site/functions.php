<?php
session_start();

function conectar() {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}


function dateFormatBrazil($date) {
    
    $date = explode('-', $date);

    $date = $date[2] . '/' . $date[1] . '/' . $date[0];
    
    return $date;
}

function dateFormatDB($date) {
    
    $date = explode('/', $date);

    $date = $date[2] . '-' . $date[1] . '-' . $date[0];
    
    return $date;
}
