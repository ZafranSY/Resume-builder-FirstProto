<?php
include 'db_connection.php';

$work = $_POST['work'];
$projects = $_POST['projects'];
$skills = $_POST['skills'];
$interests = $_POST['interests'];

$user_id = 1;


$sql_work = "INSERT INTO work_history (user_id, company_name, position, start_date, end_date, responsibilities) VALUES ('$user_id', '', '', '', '', '$work')";
$sql_projects = "INSERT INTO projects (user_id, project_name, description, start_date, end_date) VALUES ('$user_id', '', '$projects', '', '')";
$sql_skills = "INSERT INTO user_skills (user_id, skill, proficiency_level, experience_years) VALUES ('$user_id', '$skills', '', '')";

if ($conn->query($sql_work) === TRUE && $conn->query($sql_projects) === TRUE && $conn->query($sql_skills) === TRUE) {
    echo "Experience details saved successfully!";
} else {
    echo "Error: " . $sql_work . "<br>" . $conn->error;
}

$conn->close();
?>
