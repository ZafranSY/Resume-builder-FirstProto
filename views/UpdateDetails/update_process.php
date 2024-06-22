<?php
// update_process.php

// Include your database connection file (e.g., conn.php)
include '../../config/config.php';

// Check if the form was submitted via POST and if required fields are present
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_update_process'])) {

    // Assuming you have a table name set in your form
    $table = $_POST['table'];

    // Construct SQL query to update the record
    $sql = "UPDATE $table SET ";

    // Build the update fields part of the SQL query
    $update_fields = [];
    foreach ($_POST as $key => $value) {
        if ($key != 'table' && $key != 'where_clause' && $key != 'submit_update_process') {
            $escaped_value = mysqli_real_escape_string($conn, $value);
            $update_fields[] = "$key = '$escaped_value'";
        }
    }

    // Append the update fields to the SQL query
    $sql .= implode(", ", $update_fields);

    $where_fields = [];
    $where_clause=json_decode($_POST['where_clause'],true);
    foreach( $where_clause as $key => $value ) {
        $where_fields[] = "$key = '$value'";
    }
    
    $sql .= " WHERE ";
    $sql .= implode(" AND ",$where_fields);

    echo $sql;

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header('Location: ../viewdetails.php');
    } else {
        "Error updating record: " . $conn->error;
    }

} else {
    // Handle if the form was not submitted via POST method or if required fields are missing
    echo "Error: Invalid form submission";
}

// Close the database connection
$conn->close();

?>
