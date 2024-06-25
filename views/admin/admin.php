<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResuMaker</title>
    <link rel="icon" href="./img/ResuMaker_white.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/layout.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../img\ResuMaker.png" alt="">
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
                            <i class='bx bx-file icon'></i>
                            <span class="text nav-text">View Stats</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../../index.php">
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
        include '../../config/config.php'
        ?>

        <head>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                ul,
                ol,
                li {
                    padding: 0;
                }

                .card {
                    margin-bottom: 20px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }

                .card-header {
                    background-color: #695cfe;
                    color: #fff;
                    padding: 8px;
                    font-weight: bold;
                    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                    font-size: 16px;
                    text-align: center;
                    /* Center align text */
                }

                .card-body {
                    padding: 10px;
                }

                .row-data {
                    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                    padding: 5px 0;
                    /* Adjusted padding */
                    text-align: center;
                    /* Center align text */
                }

                .col-key,
                .col-value {
                    padding: 5px 8px;
                    /* Adjusted padding */
                    word-break: break-word;
                    font-size: 14px;
                }

                .btn-update,
                .btn-add {
                    background-color: #695cfe;
                    color: #fff;
                    border: none;
                    padding: 2px 6px;
                    /* Adjusted padding */
                    cursor: pointer;
                    font-size: 12px;
                }

                .btn-update:hover,
                .btn-add:hover {
                    background-color: #5648e0;
                }

                .btn-delete {
                    background-color: #ff4949;
                    /* Red */
                    color: #fff;
                    border: none;
                    padding: 2px 6px;
                    /* Adjusted padding */
                    cursor: pointer;
                    font-size: 12px;
                }

                .btn-delete:hover {
                    background-color: #e03f3f;
                    /* Darker red on hover */
                }

                .table-header {
                    background-color: #f0f0f0;
                    /* Light gray background for table headers */
                    text-align: center;
                    /* Center align text */
                    font-weight: bold;
                    padding: 8px 0;
                    /* Adjusted padding */
                }
            </style>
        </head>

        <body>

            <div class="container">
                <div class="card">
                    <div class="card-header">Table Counts</div>
                    <div class="card-body">
                        <?php
                        $tablesMAPdata = [
                            'users' => 'users',
                            'user_skills' => 'entries', // Example: Total users
                            'work_history' => 'work data', // Example: Total work history entries
                            'education' => 'entries', // Example: Total education entries
                            'certifications' => 'certifications', // Example: Total certifications
                            'projects' => 'projects' // Example: Total projects
                        ];
                        foreach ($tablesMAPdata as $table => $label) {
                            $sql = "SELECT COUNT(*) as count FROM $table";
                            $result = $conn->query($sql);

                            if ($result) {
                                $row = $result->fetch_assoc();
                                $count = $row['count'];
                                echo "<div class='row row-data'>";
                                echo "<div class='col-sm col-key'>Total $label in $table:</div>";
                                echo "<div class='col-sm col-value'>$count</div>";
                                echo "</div>";
                            } else {
                                echo "Error fetching total $label from $table: " . $conn->error;
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                $tables = ['users', 'user_skills', 'work_history', 'education', 'certifications', 'projects'];

                foreach ($tables as $table) {
                    $sql = "SELECT * FROM $table";
                    $result = $conn->query($sql);

                    if ($result->num_rows >= 0) {
                        echo "<div class='card'>";
                        echo "<div class='card-header'>$table</div>";
                        echo "<div class='card-body'>";

                        // Display table headers with field names
                        $fields = $result->fetch_fields();
                        echo "<div class='row row-data table-header'>";
                        foreach ($fields as $field) {
                            echo "<div class='col-sm col-key'>" . ucfirst($field->name) . "</div>"; // Center align text by default
                        }
                        echo "<div class='col-sm col-key'>Actions</div>"; // Center align text
                        echo "</div>";

                        // Display data rows
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='row row-data'>";
                            foreach ($row as $key => $value) {
                                echo "<div class='col-sm col-value'>$value</div>";
                            }
                            echo "<div class='col-sm col-value'>";
                            echo "<form action='updatedetails.php' method='post' class='d-inline'>";
                            echo "<input type='hidden' name='table' value='$table'>";
                            foreach ($row as $key => $value) {
                                echo "<input type='hidden' name='$key' value='$value'>";
                            }
                            echo "<button type='submit' name='submit_update' class='btn btn-update'>Update</button>";
                            echo "</form>";
                            echo " ";
                            echo "<form action='UpdateDetails/delete.php' method='post' class='d-inline' onsubmit='return confirmDelete()'>";
                            echo "<input type='hidden' name='table' value='$table'>";
                            foreach ($row as $key => $value) {
                                echo "<input type='hidden' name='$key' value='$value'>";
                            }
                            echo "<button type='submit' name='submit_delete' class='btn btn-delete'>Delete</button>";
                            echo "</form>";
                            echo "</div>";
                            echo "</div>";
                        }

                        // Empty row for adding new entry
                        echo "<form action='UpdateDetails/add.php' method='post' class='d-inline'>";
                        echo "<div class='row row-data'>";
                        echo "<input type='hidden' name='table' value='$table'>";
                        foreach ($fields as $field) {
                            echo "<div class='col-sm col-value'><input type='text' name=$field->name class='form-control form-control-sm' placeholder='" . ucfirst($field->name) . "' required></div>";
                        }
                        echo "<div class='col-sm col-value'>";


                        echo "<button type='submit' name='submit_add' class='btn btn-success btn-add'>Add</button>";
                        echo "</form>";
                        echo "</div>";
                        echo "</div>";

                        echo "</div>";
                        echo "</div>";
                    } else {
                        echo "<p class='mt-3'>0 results for $table</p>";
                    }
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

        sidebar.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");
            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
                img.src = "img/ResuMaker_white.png";

            } else {
                modeText.innerText = "Dark mode";
                img.src = "img/ResuMaker.png";
            }
        });

        function confirmDelete() {
            return confirm("Are you sure you want to delete this entry?");
        }
    </script>

</body>

</html>