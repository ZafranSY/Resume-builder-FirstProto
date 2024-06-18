<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resume_builder";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if database exists, if not, create it
$check_database_query = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($check_database_query) === TRUE) {
    echo "Database '$dbname' created or already exists.<br>";

    // Select database
    $conn->select_db($dbname);

    // Array of table creation queries
    $table_creation_queries = [
        "CREATE TABLE IF NOT EXISTS users (
            userid INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50),
            address VARCHAR(100),
            email VARCHAR(100),
            phone_number VARCHAR(20),
            password VARCHAR(255)
        )",
        "CREATE TABLE IF NOT EXISTS user_skills (
            user_id INT,
            skill VARCHAR(50),
            proficiency_level VARCHAR(20),
            experience_years INT,
            FOREIGN KEY (user_id) REFERENCES users(userid)
        )",
        "CREATE TABLE IF NOT EXISTS work_history (
            user_id INT,
            company_name VARCHAR(100),
            position VARCHAR(50),
            start_date DATE,
            end_date DATE,
            responsibilities TEXT,
            FOREIGN KEY (user_id) REFERENCES users(userid)
        )",
        "CREATE TABLE IF NOT EXISTS education (
            user_id INT,
            institution VARCHAR(100),
            degree VARCHAR(50),
            start_date DATE,
            end_date DATE,
            gpa DECIMAL(3, 2),
            FOREIGN KEY (user_id) REFERENCES users(userid)
        )",
        "CREATE TABLE IF NOT EXISTS certifications (
            user_id INT,
            certification_name VARCHAR(100),
            issue_date DATE,
            FOREIGN KEY (user_id) REFERENCES users(userid)
        )",
        "CREATE TABLE IF NOT EXISTS projects (
            user_id INT,
            project_name VARCHAR(100),
            description TEXT,
            start_date DATE,
            end_date DATE,
            FOREIGN KEY (user_id) REFERENCES users(userid)
        )"
    ];

    // Execute table creation queries
    foreach ($table_creation_queries as $query) {
        if ($conn->query($query) === TRUE) {
            echo "Table created or already exists.<br>";
        } else {
            echo "Error creating table: " . $conn->error . "<br>";
        }
    }

} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

$conn->close();
?>
