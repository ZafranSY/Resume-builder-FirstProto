<?php
include 'db_connection.php';

$school_name = $_POST['school_name'];
$school_location = $_POST['school_location'];
$school_year = $_POST['school_year'];
$school_description = $_POST['school_description'];
$college_name = $_POST['college_name'];
$college_location = $_POST['college_location'];
$college_year = $_POST['college_year'];
$college_description = $_POST['college_description'];
$university_name = $_POST['university_name'];
$university_location = $_POST['university_location'];
$university_year = $_POST['university_year'];
$university_description = $_POST['university_description'];

$user_id = 1; 

$sql = "INSERT INTO education (user_id, institution, degree, start_date, end_date, gpa) VALUES ('$user_id', '$school_name', 'School', '$school_year', '', '0.00'),
        ('$user_id', '$college_name', 'College', '$college_year', '', '0.00'),
        ('$user_id', '$university_name', 'University', '$university_year', '', '0.00')";

if ($conn->query($sql) === TRUE) {
    echo "Education details saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
