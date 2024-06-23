<?php
// Database configuration
include '../config/config.php';
// Start session (assuming session has already been started)
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    die("User not logged in.");
}

// Get user ID from session
$userId = $_SESSION['user_id'];



// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Insert into users table
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $updateUserSql = "UPDATE users SET name='$name', address='$address', phone_number='$phone' WHERE userid='$userId'";
    if ($conn->query($updateUserSql) === FALSE) {
        echo "Error: " . $updateUserSql . "<br>" . $conn->error;
    }

    

    // Insert into education table
    $institution = $_POST['institution'];
    $degree = $_POST['degree'];
    $eduStartDate = $_POST['edu_start_date'];
    $eduEndDate = $_POST['edu_end_date'];
    $gpa = $_POST['gpa'];

    $insertEducationSql = "INSERT INTO education (user_id, institution, degree, start_date, end_date, gpa) VALUES ('$userId', '$institution', '$degree', '$eduStartDate', '$eduEndDate', '$gpa') ";
    if ($conn->query($insertEducationSql) === FALSE) {
        echo "Error: " . $insertEducationSql . "<br>" . $conn->error;
    }

    // Insert into work history table
    $companyName = $_POST['company_name'];
    $position = $_POST['position'];
    $workStartDate = $_POST['work_start_date'];
    $workEndDate = $_POST['work_end_date'];
    $responsibilities = $_POST['responsibilities'];

    $insertWorkSql = "INSERT INTO work_history (user_id, company_name, position, start_date, end_date, responsibilities) VALUES ('$userId', '$companyName', '$position', '$workStartDate', '$workEndDate', '$responsibilities') ";
    if ($conn->query($insertWorkSql) === FALSE) {
        echo "Error: " . $insertWorkSql . "<br>" . $conn->error;
    }

    // Insert into user_skills table (assuming it's coming from a dynamic list, not shown in the HTML provided)
    // Example:
    if (isset($_POST['skill'])) {
        $skills = $_POST['skill'];
        $levels = $_POST['proficiency_level'];
        $expYears = $_POST['experience_years'];

        // Insert new skills
        
        $insertSkillsSql = "INSERT INTO user_skills (user_id, skill, proficiency_level, experience_years) VALUES ('$userId', '$skills', '$levels', '$expYears') ";
        if ($conn->query($insertSkillsSql) === FALSE) {
            echo "Error: " . $insertSkillsSql . "<br>" . $conn->error;
        }
        
    }

    // Insert into certifications table
    $certificationName = $_POST['certification_name'];
    $issueDate = $_POST['issue_date'];

    $insertCertificationSql = "INSERT INTO certifications (user_id, certification_name, issue_date) VALUES ('$userId', '$certificationName', '$issueDate') ";
    if ($conn->query($insertCertificationSql) === FALSE) {
        echo "Error: " . $insertCertificationSql . "<br>" . $conn->error;
    }

    // Insert into projects table
    $projectName = $_POST['project_name'];
    $projectDescription = $_POST['project_description'];
    $projectStartDate = $_POST['project_start_date'];
    $projectEndDate = $_POST['project_end_date'];

    $insertProjectSql = "INSERT INTO projects (user_id, project_name, description, start_date, end_date) VALUES ('$userId', '$projectName', '$projectDescription', '$projectStartDate', '$projectEndDate') ";
    if ($conn->query($insertProjectSql) === FALSE) {
        echo "Error: " . $insertProjectSql . "<br>" . $conn->error;
    }

    // Provide feedback to the user
    echo "Profile submitted successfully!";
    echo $updateUserSql."\n";
    echo $insertEducationSql."\n";
    echo $insertWorkSql."\n";
    echo $insertSkillsSql."\n";
    echo $insertCertificationSql."\n";
    echo $insertProjectSql."\n";
}

?>
