<?php
include '../../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_delete'])) {
    $table = $_POST['table'];
    // Build the WHERE clause using all the fields from the form
    $where = [];
    foreach ($_POST as $key => $value) {
        if ($key != 'table' && $key != 'submit_delete') {
            $where[] = "$key = '$value'";
        }
    }
    // Construct the DELETE query
    $sql = "DELETE FROM $table WHERE " . implode(" AND ", $where);

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: admin.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
