<?php
include("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/forgot_pass.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="../resetPass.php" method="POST">
                <h1>Reset your password</h1>
                <!-- <p>Retrieve your account access. Enter your email address to get started</p> -->
                <p>Enter your email to reset your password.</p>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="cpassword" placeholder="Password" required>
                <button type="submit" name="submit">Submit</button>

            </form>
        </div><div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-in">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of site features</p>
            <button class="hidden" id="login" onclick="redirectToPage()">Sign In</button>
            </div>
        
    </div>
    </div>
    <script>
function redirectToPage() {
    //probably need to change b4 publish
    window.location.href = "/resumeNew/"; 
}
</script>
</body>
</html>