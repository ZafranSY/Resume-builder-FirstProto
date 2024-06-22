<?php
include '../../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_add'])) {
    $table = $_POST['table'];
    $sql = "DESCRIBE $table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $columns = [];
        while ($row = $result->fetch_assoc()) {
            $columns[] = $row['Field'];
        }

        // Build the INSERT query
        $insert_fields = [];
        $insert_values = [];
        foreach ($columns as $column) {
            if (isset($_POST[$column])) {
                $value = $conn->real_escape_string($_POST[$column]);
                $insert_fields[] = $column;
                $insert_values[] = "'$value'";
            }
        }

        $fields_str = implode(', ', $insert_fields);
        $values_str = implode(', ', $insert_values);

        $insert_query = "INSERT INTO $table ($fields_str) VALUES ($values_str)";

        if ($conn->query($insert_query) === TRUE) {
            echo "New record added successfully.";
            header('Location: ../viewdetails.php');
        } else {
            echo "Error: " . $conn->error;
            
        }
    } else {
        echo "Error: Table not found or empty.";
    }
    
    $conn->close();
}
?>
