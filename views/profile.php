<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="theme1.css"> <!-- Assuming you have a CSS file -->
</head>
<body>
    <?php
    // Connect to the database
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "resumez1"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //Change uid to reflect responding userid
    $uid = 0;
    // Query to fetch user profile data
    $sql = "SELECT * FROM users WHERE userid = $uid"; // Using uid as userid

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of the user
        $user = $result->fetch_assoc();
    ?>
    <div class="container">
        <div class="header">
            <div class="full-name">
                <span class="first-name"><?php echo $user["name"]; ?></span> 
            </div>
            <div class="contact-info">
                <span class="email">Email: </span>
                <span class="email-val"><?php echo $user["email"]; ?></span>
                <span class="separator"></span>
                <span class="phone">Phone: </span>
                <span class="phone-val"><?php echo $user["phone_number"]; ?></span>
            </div>
        </div>
        <!-- Details section -->
        <div class="details">
            <div class="section">
                <div class="section__title">Skills</div>
                <div class="section__list">
                    <?php
                    // Fetch user's skills
                    $sql_skills = "SELECT * FROM user_skills WHERE user_id = $uid"; // Using uid as userid
                    $result_skills = $conn->query($sql_skills);

                    if ($result_skills->num_rows > 0) {
                        while ($row_skills = $result_skills->fetch_assoc()) {
                            echo "<div class='section__list-item'>";
                            echo "<div class='name'>" . $row_skills["skill"] . "</div>";
                            echo "<div class='proficiency'>" . $row_skills["proficiency_level"] . "</div>";
                            echo "<div class='experience'>" . $row_skills["experience_years"] . " years</div>";
                            echo "</div>";
                        }
                    } else {
                        echo "No skills found.";
                    }
                    ?>
                </div>
            </div>
            <div class="section">
                <div class="section__title">Work History</div>
                <div class="section__list">
                    <?php
                    // Fetch user's work history
                    $sql_work = "SELECT * FROM work_history WHERE user_id = $uid"; // Using uid as userid
                    $result_work = $conn->query($sql_work);

                    if ($result_work->num_rows > 0) {
                        while ($row_work = $result_work->fetch_assoc()) {
                            echo "<div class='section__list-item'>";
                            echo "<div class='name'>" . $row_work["company_name"] . "</div>";
                            echo "<div class='position'>" . $row_work["position"] . "</div>";
                            echo "<div class='duration'>" . $row_work["start_date"] . " - " . $row_work["end_date"] . "</div>";
                            echo "<div class='responsibilities'>" . $row_work["responsibilities"] . "</div>";
                            echo "</div>";
                        }
                    } else {
                        echo "No work history found.";
                    }
                    ?>
                </div>
            </div>
            <div class="section">
                <div class="section__title">Education</div>
                <div class="section__list">
                    <?php
                    // Fetch user's education
                    $sql_education = "SELECT * FROM education WHERE user_id = $uid"; // Using uid as userid
                    $result_education = $conn->query($sql_education);

                    if ($result_education->num_rows > 0) {
                        while ($row_education = $result_education->fetch_assoc()) {
                            echo "<div class='section__list-item'>";
                            echo "<div class='name'>" . $row_education["institution"] . "</div>";
                            echo "<div class='degree'>" . $row_education["degree"] . "</div>";
                            echo "<div class='duration'>" . $row_education["start_date"] . " - " . $row_education["end_date"] . "</div>";
                            echo "<div class='gpa'>GPA: " . $row_education["gpa"] . "</div>";
                            echo "</div>";
                        }
                    } else {
                        echo "No education found.";
                    }
                    ?>
                </div>
            </div>
            <div class="section">
                <div class="section__title">Certifications</div>
                <div class="section__list">
                    <?php
                    // Fetch user's certifications
                    $sql_certifications = "SELECT * FROM certifications WHERE user_id = $uid"; // Using uid as userid
                    $result_certifications = $conn->query($sql_certifications);

                    if ($result_certifications->num_rows > 0) {
                        while ($row_certifications = $result_certifications->fetch_assoc()) {
                            echo "<div class='section__list-item'>";
                            echo "<div class='name'>" . $row_certifications["certification_name"] . "</div>";
                            echo "<div class='issue-date'>Issued: " . $row_certifications["issue_date"] . "</div>";
                            echo "</div>";
                        }
                    } else {
                        echo "No certifications found.";
                    }
                    ?>
                </div>
                <div class="section">
                    <div class="section__title">Projects</div>
                        <div class="section__list">
                    <?php
                    // Fetch user's projects
                    $sql_projects = "SELECT * FROM projects WHERE user_id = $uid"; // Using uid as userid
                    $result_projects = $conn->query($sql_projects);

                    if ($result_projects->num_rows > 0) {
                        while ($row_projects = $result_projects->fetch_assoc()) {
                            echo "<div class='section__list-item'>";
                            echo "<div class='name'>" . $row_projects["project_name"] . "</div>";
                            echo "<div class='description'>" . $row_projects["description"] . "</div>";
                            echo "<div class='duration'>" . $row_projects["start_date"] . " - " . $row_projects["end_date"] . "</div>";
                            echo "</div>";
                        }
                    } else {
                        echo "No projects found.";
                    }
                    ?>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
    <?php
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>