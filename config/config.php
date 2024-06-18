<?php

$servername ="localhost";
$username ="root";
$password = "";
$db_name ="resume_builder";
$conn = new mysqli($servername, $username, $password,$db_name );

if($conn->connect_error){
    die("Connnection failed".$conn->connect_error);    
}


function connectReturnConObj(){
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'resume_builder';

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    return $conn;
}

?> 