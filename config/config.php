<?php
    $servername ="localhost";
    $username ="root";
    $password = "";
    $db_name ="resume_builder";
    $conn = new mysqli($servername, $username, $password,$db_name );

    if($conn->connect_error)
    {
        die("Connnection failed".$conn->connect_error);    }
    ?> 