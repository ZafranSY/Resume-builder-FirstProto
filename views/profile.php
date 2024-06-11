<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="./css/profile.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Edit Profile</h2>
            <p>Complete your profile</p>
        </div>
        <div class="tabs">
            <div class="active">Profile</div>
            <div>School/College Details</div>
            <div>Experiences and Other</div>
        </div>
        <div class="section active">
            <form action="./views/submit_profile.php" method="post">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name">
                </div>
                <div class="form-group">
                    <label for="user_contact">User Contact</label>
                    <input type="text" id="user_contact" name="user_contact">
                    <label for="email_address">Email address</label>
                    <input type="email" id="email_address" name="email_address">
                    <label for="git_link">Git link</label>
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
            <form action="./views/submit_school_college.php" method="post">
                <div class="form-group">
                    <label for="school_name">School Name</label>
                    <input type="text" id="school_name" name="school_name">
                    <label for="ssc_marks">SSC Marks</label>
                    <input type="text" id="ssc_marks" name="ssc_marks">
                </div>
                <div class="form-group">
                    <label for="hsc_college_name">HSC College Name</label>
                    <input type="text" id="hsc_college_name" name="hsc_college_name">
                    <label for="hsc_marks">HSC Marks</label>
                    <input type="text" id="hsc_marks" name="hsc_marks">
                </div>
                <div class="form-group">
                    <label for="degree_college_name">Degree College Name</label>
                    <input type="text" id="degree_college_name" name="degree_college_name">
                    <label for="branch">Branch</label>
                    <input type="text" id="branch" name="branch">
                    <label for="current_aggregate_pointer">Current Aggregate Pointer</label>
                    <input type="text" id="current_aggregate_pointer" name="current_aggregate_pointer">
                </div>
                <div class="button-container">
                    <button class="button" type="submit">Proceed</button>
                </div>
            </form>
        </div>
        <div class="section">
            <form action="./views/submit_experiences.php" method="post">
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
    <script src="./js/profile.js"></script>
</body>
</html>
