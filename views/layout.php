<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResuMaker</title>
    <link rel="icon" href="./img/ResuMaker_white.png" type="image/x-icon"/>
    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="./css/theme1.css">
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
                        <a href="#">
                            <i class='bx bx-paint icon'></i>
                            <span class="text nav-text">Change Theme</span>
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
                    <a href="#">
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
            require 'functions.php';
            $userid=1;
            echo generateResume($userid,'./css/template1.css');
        ?>
    </section>

    <script>
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
