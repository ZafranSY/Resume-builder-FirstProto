<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<!--https://www.codingnepalweb.com/sidebar-menu-in-html-css-javascript-dark-light-mode/-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./css/layout.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>ResuMaker</title>
  </head>
  <body>
    <nav class="sidebar close">
      <header>
        <div class="image-text">
          <span class="image">
            <img
              src="img\ResuMaker.png"
              alt=""
              id="resumaker-img"
            />
          </span>

          <div class="text logo-text">
            <span class="name" >ResuMaker</span>
            
          </div>
        </div>

  
      </header>

      <div class="menu-bar">
        <div class="menu">
          <!-- <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li> -->

          <ul class="menu-links">
            <li class="nav-link" >
              <a href="#">
                <i class="bx bx-paint icon"></i>
                <span class="text nav-text">Change Theme</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="text nav-text">Update Details</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="bottom-content">
          <li class="logout">
            <a href="/resumeNew/">
              <i class="bx bx-log-out icon"></i>
              <span class="text nav-text" onclick="redirectToPage()">Logout</span>
            </a>
          </li>

          <li class="mode">
            <div class="sun-moon">
              <i class="bx bx-moon icon moon"></i>
              <i class="bx bx-sun icon sun"></i>
            </div>
            <span class="mode-text text">Dark mode</span>

            <div class="toggle-switch">
              <span class="switch"></span>
            </div>
          </li>
        </div>
      </div>
    </nav>

    <script src="./js/layout.js">
    </script>
  </body>
</html>
