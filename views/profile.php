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
            <div class="tab active" data-tab="profile">Profile</div>
            <div class="tab" data-tab="education">School/College Details</div>
            <div class="tab" data-tab="experience">Experiences and Other</div>
        </div>
        <div class="sections">
            <div class="section active" id="profile">
                <form action="./views/submit_profile.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea id="address" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="summary">Summary</label>
                        <textarea id="summary" name="summary"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="linkedin">LinkedIn/GitHub</label>
                        <input type="url" id="linkedin" name="linkedin">
                    </div>
                    <div class="button-container">
                        <button class="button" type="button">Proceed</button>
                    </div>
                </form>
            </div>
            <div class="section" id="education">
                <form action="./views/submit_school_college.php" method="post">
                    <div class="form-group">
                        <label for="school_name">School Name</label>
                        <input type="text" id="school_name" name="school_name">
                    </div>
                    <div class="form-group">
                        <label for="school_location">Location</label>
                        <input type="text" id="school_location" name="school_location">
                    </div>
                    <div class="form-group">
                        <label for="school_year">Year</label>
                        <input type="text" id="school_year" name="school_year">
                    </div>
                    <div class="form-group">
                        <label for="school_description">Description</label>
                        <textarea id="school_description" name="school_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="college_name">College Name</label>
                        <input type="text" id="college_name" name="college_name">
                    </div>
                    <div class="form-group">
                        <label for="college_location">Location</label>
                        <input type="text" id="college_location" name="college_location">
                    </div>
                    <div class="form-group">
                        <label for="college_year">Year</label>
                        <input type="text" id="college_year" name="college_year">
                    </div>
                    <div class="form-group">
                        <label for="college_description">Description</label>
                        <textarea id="college_description" name="college_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="university_name">University Name</label>
                        <input type="text" id="university_name" name="university_name">
                    </div>
                    <div class="form-group">
                        <label for="university_location">Location</label>
                        <input type="text" id="university_location" name="university_location">
                    </div>
                    <div class="form-group">
                        <label for="university_year">Year</label>
                        <input type="text" id="university_year" name="university_year">
                    </div>
                    <div class="form-group">
                        <label for="university_description">Description</label>
                        <textarea id="university_description" name="university_description"></textarea>
                    </div>
                    <div class="button-container">
                        <button class="button" type="button">Proceed</button>
                    </div>
                </form>
            </div>
            <div class="Founder-background">
                <p>Leonardo di ser Piero da Vinci was an Italian Renaissance polymath. According to data available online, Leonardo da Vinci invented the first professional profile in 1482, which we call as the résumé. The word Resume originated from French résumé“to summarize”, and from Latin resumere “to take back”.</p>

                <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Read More</button>

            </div> 

        </div>
        <div class="edit-profile">
            <div class="navbar">
                <h2> Profile</h2>
                <p>Complete your Profile</p>
                <ul>
                    <li>Profile</li>
                    <li class="school">School/College Details</li>
                    <li>Experience and other</li>
                </ul>
            </div>
            <div class="form-container">
                <form action="">
                    <input type="text" id="Fname" placeholder="First Name"style="width:49%;">
                    <input type="text"id="Lname" placeholder="Last Name"style="width:49%;">
                    <input type="text" placeholder="User Contact" style="width:30%;">
                    <input type="email" placeholder="Email"style="width:30%;">
                    <input type="text"    placeholder="Git Link"style="width:30%;">
                    <input type="text" placeholder="Address"style="width:100%;">
                    <input type="number" placeholder="Age"style="width:100%;">

                <button type="button" class="btn btn-primary proceed" data-toggle="button" aria-pressed="false" autocomplete="off">Proceed</button>

                </form>
            </div>
            
        </div>
    </div>
    <script src="./js/profile.js"></script>
</body>
</html>
