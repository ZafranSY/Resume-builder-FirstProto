<?php
    session_start();
    require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResuMaker</title>
    <link rel="icon" href="./img/ResuMaker_white.png" type="image/x-icon"/>
    <link rel="stylesheet" href="./css/layout.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="img\ResuMaker.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">ResuMaker</span>
                    <span class="profession">ResuMaker</span>
                </div>
            </div>

            <!-- <i class='bx bx-chevron-right toggle'></i> -->
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="layout.php">
                            <i class='bx bx-file icon'></i>
                            <span class="text nav-text">View Resume</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Update Details</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text" id="print">ResuMaker</div>
        <?php

        echo "<style>
            
            .container {
                background-color: #f6f5ff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 500px;
                width: 100%;
                text-align: center;
                margin-left:30vw;
            }
            h2 {
                color: #695cfe;
                margin-bottom: 20px;
            }
            form {
                text-align: left;
            }
            label {
                display: block;
                font-weight: bold;
                color: #707070;
                margin-bottom: 5px;
            }
            input[type='text'], input[type='submit'] {
                width: calc(100% - 22px); /* Adjusting for padding and borders */
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ddd;
                border-radius: 3px;
                box-sizing: border-box;
                font-size: 14px;
            }
            input[type='submit'] {
                background-color: #695cfe;
                color: #fff;
                cursor: pointer;
            }
            input[type='submit']:hover {
                background-color: #554aa2;
            }
        </style>";

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_update'])) {
            $table = $_POST['table'];
            $update_data = [];
            foreach ($_POST as $key => $value) {
                if ($key != 'table' && $key != 'submit_update') {
                    $update_data[$key] = $conn->real_escape_string($value);
                }
            }
            $whereclause = htmlspecialchars(json_encode($update_data));
            // Display form with current data populated
            echo "<div class='container'>";
            echo "<h2>Update Record in Table: $table</h2>";
            echo "<form action='UpdateDetails/update_process.php' method='post'>";
            echo "<input type='hidden' name='table' value='$table'>";
            foreach ($update_data as $key => $value) {
                if($key!='user_id'){
                    echo "<label>$key:</label>";
                    echo "<input type='text' name='$key' value='$value'><br>";
                }
                else
                echo "<input type='hidden' name='$key' value='$value'><br>";        
            }
            echo "<input type='hidden' name='where_clause' value='$whereclause'>";
            echo "<input type='submit' name='submit_update_process' value='Update'>";
            echo "</form>";
            echo "</div>";
        }
        ?>

    </section>

    <script>

        function setThemeCookie(themeName, daysToExpire) {
            var expires = "";
            if (daysToExpire) {
                var date = new Date();
                date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = "selected_theme=" + themeName + expires + "; path=/";
            setTimeout(function() {
                location.reload();
            }, 1000);
        }

        const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector('.toggle'),
        modeSwitch = body.querySelector('.toggle-switch'),
        modeText = body.querySelector('.mode-text');
        const img = document.querySelector(".image-text img");

        body.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");
            if(body.classList.contains("dark")){
                modeText.innerText = "Light mode";    
                        img.src = "img/ResuMaker_white.png";

            }else{
                modeText.innerText = "Dark mode";
                img.src = "img/ResuMaker.png"; 
            }
        });
    </script>

</body>
</html>
