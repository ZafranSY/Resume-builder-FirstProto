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
        <!-- Tabs for different sections -->
        <div class="tabs">
            <div class="tab active" data-tab="profile">Profile</div>
            <div class="tab" data-tab="education">Education</div>
            <div class="tab" data-tab="work">Work History</div>
            <div class="tab" data-tab="skills">Skills</div>
            <div class="tab" data-tab="certifications">Certifications</div>
            <div class="tab" data-tab="projects">Projects</div>
            <!-- Add more tabs for additional sections if needed -->
        </div>
        <!-- Form for data entry -->
        <form action="submitprofile.php" method="post">
            <div class="sections">
                <!-- Profile Section -->
                <div class="section active" id="profile">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea id="address" name="address" required></textarea>
                    </div>
                    <!-- Proceed Button for Profile Section -->
                    <div class="button-container">
                        <button class="button proceedButton" data-next="education" type="button">Proceed</button>
                    </div>
                </div>
                
                <!-- Education Section -->
                <div class="section" id="education">
                    <div class="form-group">
                        <label for="institution">Institution</label>
                        <input type="text" id="institution" name="institution" required>
                    </div>
                    <div class="form-group">
                        <label for="degree">Degree</label>
                        <input type="text" id="degree" name="degree" required>
                    </div>
                    <div class="form-group">
                        <label for="edu_start_date">Start Date</label>
                        <input type="date" id="edu_start_date" name="edu_start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="edu_end_date">End Date</label>
                        <input type="date" id="edu_end_date" name="edu_end_date" required>
                    </div>
                    <div class="form-group">
                        <label for="gpa">GPA</label>
                        <input type="text" id="gpa" name="gpa" required>
                    </div>
                    <!-- Proceed Button for Education Section -->
                    <div class="button-container">
                        <button class="button proceedButton" data-next="work" type="button">Proceed</button>
                    </div>
                </div>
                
                <!-- Work History Section -->
                <div class="section" id="work">
                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" id="company_name" name="company_name" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position" required>
                    </div>
                    <div class="form-group">
                        <label for="work_start_date">Start Date</label>
                        <input type="date" id="work_start_date" name="work_start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="work_end_date">End Date</label>
                        <input type="date" id="work_end_date" name="work_end_date" required>
                    </div>
                    <div class="form-group">
                        <label for="responsibilities">Responsibilities</label>
                        <textarea id="responsibilities" name="responsibilities" required></textarea>
                    </div>
                    <!-- Proceed Button for Work History Section -->
                    <div class="button-container">
                        <button class="button proceedButton" data-next="skills" type="button">Proceed</button>
                    </div>
                </div>
                
                <!-- Skills Section -->
                <div class="section" id="skills">
                    <div class="form-group">
                        <label for="skill">Skill</label>
                        <input type="text" id="skill" name="skill" required>
                    </div>
                    <div class="form-group">
                        <label for="proficiency_level">Proficiency Level</label>
                        <select id="proficiency_level" name="proficiency_level" required>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience_years">Experience (years)</label>
                        <input type="number" id="experience_years" name="experience_years" min="0" required>
                    </div>
                    <!-- Proceed Button for Skills Section -->
                    <div class="button-container">
                        <button class="button proceedButton" data-next="certifications" type="button">Proceed</button>
                    </div>
                </div>
                
                <!-- Certifications Section -->
                <div class="section" id="certifications">
                    <div class="form-group">
                        <label for="certification_name">Certification Name</label>
                        <input type="text" id="certification_name" name="certification_name" required>
                    </div>
                    <div class="form-group">
                        <label for="issue_date">Issue Date</label>
                        <input type="date" id="issue_date" name="issue_date" required>
                    </div>
                    <!-- Proceed Button for Certifications Section -->
                    <div class="button-container">
                        <button class="button proceedButton" data-next="projects" type="button">Proceed</button>
                    </div>
                </div>
                
                <!-- Projects Section -->
                <div class="section" id="projects">
                    <div class="form-group">
                        <label for="project_name">Project Name</label>
                        <input type="text" id="project_name" name="project_name" required>
                    </div>
                    <div class="form-group">
                        <label for="project_description">Project Description</label>
                        <textarea id="project_description" name="project_description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="project_start_date">Start Date</label>
                        <input type="date" id="project_start_date" name="project_start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="project_end_date">End Date</label>
                        <input type="date" id="project_end_date" name="project_end_date" required>
                    </div>
                    <!-- Submit Button for Projects Section -->
                    <div class="button-container">
                        <button class="button" type="submit">Submit</button>
                    </div>
                </div>
                
            </div>
        </form>
    </div>
    <!-- Optional: JavaScript for client-side functionality -->
    <script src="./js/profiles.js"></script>
</body>
</html>
