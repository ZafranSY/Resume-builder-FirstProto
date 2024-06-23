<?php
include '../database/db_connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$summary = $_POST['summary'];
$linkedin = $_POST['linkedin'];


$sql = "INSERT INTO users (name, address, email, phone_number) VALUES ('$name', '$address', '$email', '$phone')";
if ($conn->query($sql) === TRUE) {
    $user_id = $conn->insert_id;
   
    $sql_summary = "INSERT INTO user_summary (user_id, summary, linkedin) VALUES ('$user_id', '$summary', '$linkedin')";
    if ($conn->query($sql_summary) === TRUE) {
        echo "Profile saved successfully!";
    } else {
        echo "Error: " . $sql_summary . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
