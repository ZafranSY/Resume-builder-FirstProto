<?php
include("./controller/connection.php");
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./views/css/login.css" />
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form action="login.php" method="POST">
                <h1>Sign In</h1>
                <input type="email" placeholder="Email" name="email" required/>
                <input type="password" placeholder="Password" name="pass" required/>
                <a href="views\forgot_pass.php" class="forgot-password">Forgot password?</a>               
                 <button type="submit" name="submit">Sign In</button>
                <!-- <span class="message"> Sending your message...</span> -->

            </form>
        </div>
        <div class="form-container sign-up">
            <form action="signup.php" method="POST">
                <h1>Sign Up</h1>
                <input type="text" placeholder="Name" name="name" required/>
                <input type="email" placeholder="Email" name="email"required/>
                <input type="password" placeholder="Password" name="pass"required />
                <input type="password" placeholder="Password" name="cpass" required/>
                 <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-in">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-up">
                    <h1>Hello, Friend!</h1>
                    <p>
                        Register with your personal details to use all of site features
                    </p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
        
    </div>
    <script src="./views/js/login.js"></script>
</body>
</html>
