<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_contact = $_POST['user_contact'];
    $email_address = $_POST['email_address'];
    $git_link = $_POST['git_link'];
    $address = $_POST['address'];
    $age = $_POST['age'];

    // Handle form data, for example, save it to a database or process it as needed
    // Example: echo data
    echo "First Name: " . $first_name . "<br>";
    echo "Last Name: " . $last_name . "<br>";
    echo "User Contact: " . $user_contact . "<br>";
    echo "Email Address: " . $email_address . "<br>";
    echo "Git Link: " . $git_link . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Age: " . $age . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="./views/css/profile.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Create your resume!</h2>
            <p>Complete your details!</p>
        </div>
        <div class="tabs">
            <div class="active">Profile</div>
            <div>School/College Details</div>
            <div>Experiences and Other</div>
        </div>
        <div class="section active">
            <form id="profile-form" action="submit_profile.php" method="post">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name">
                </div>
                <div class="form-group">
                    <label for="user_contact">User Contact</label>
                    <input type="text" id="user_contact" name="user_contact">
                    <label for="email_address">Email Address</label>
                    <input type="email" id="email_address" name="email_address">
                    <label for="git_link">GitHub Link</label>
                    <input type="url" id="git_link" name="git_link">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age">
                </div>
                <div class="button-container">
                    <button class="button" type="submit">Proceed</button>
                </div>
            </form>
        </div>
        <div class="section">
            <form id="school-college-form" action="submit_school_college.php" method="post">
                <div class="form-group">
                    <label for="school_name">School Name</label>
                    <input type="text" id="school_name" name="school_name">
                    <label for="grade">Grade</label>
                    <input type="text" id="grade" name="grade">
                </div>
                <div class="form-group">
                    <label for="college">College</label>
                    <input type="text" id="uni_name" name="uni_name">
                    <label for="college_cgpa">CGPA</label>
                    <input type="text" id="_college_cgpa" name="_college_cgpa">
                </div>
                <div class="form-group">
                    <label for="degree_college_name">Degree</label>
                    <input type="text" id="degree_college_name" name="degree_college_name">
                    <label for="branch">Branch</label>
                    <input type="text" id="branch" name="branch">
                    <label for="current_aggregate_pointer">CGPA</label>
                    <input type="text" id="current_aggregate_pointer" name="current_aggregate_pointer">
                </div>
                <div class="button-container">
                    <button class="button" type="submit">Proceed</button>
                </div>
            </form>
        </div>
        <div class="section">
            <form id="experiences-form" action="submit_experiences.php" method="post">
                <div class="form-group">
                    <label for="achievements">Achievements (Enter in format [rank - title - period])</label>
                    <textarea id="achievements" name="achievements"></textarea>
                </div>
                <div class="form-group">
                    <label for="languages">Known and worked on Languages (Enter languages ',' separated)</label>
                    <textarea id="languages" name="languages"></textarea>
                </div>
                <div class="form-group">
                    <label for="projects">Projects (Enter Project ',' separated)</label>
                    <textarea id="projects" name="projects"></textarea>
                </div>
                <div class="form-group">
                    <label for="experience">Any Experience?</label>
                    <textarea id="experience" name="experience"></textarea>
                </div>
                <div class="form-group">
                    <label for="co_curricular">Co-Curricular Activity</label>
                    <textarea id="co_curricular" name="co_curricular"></textarea>
                </div>
                <div class="form-group">
                    <label for="extra_curricular">Extra-Curricular</label>
                    <textarea id="extra_curricular" name="extra_curricular"></textarea>
                </div>
                <div class="button-container">
                    <button class="button" type="submit">Proceed</button>
                </div>
            </form>
        </div>
    </div>
    <script src="profile.js"></script>
</body>
</html>
