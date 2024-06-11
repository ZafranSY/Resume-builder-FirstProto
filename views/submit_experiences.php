<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $achievements = $_POST['achievements'];
    $languages = $_POST['languages'];
    $projects = $_POST['projects'];
    $experience = $_POST['experience'];
    $co_curricular = $_POST['co_curricular'];
    $extra_curricular = $_POST['extra_curricular'];

    // Handle form data, for example, save it to a database or process it as needed
    // Example: echo data
    echo "Achievements: " . $achievements . "<br>";
    echo "Languages: " . $languages . "<br>";
    echo "Projects: " . $projects . "<br>";
    echo "Experience: " . $experience . "<br>";
    echo "Co-Curricular: " . $co_curricular . "<br>";
    echo "Extra-Curricular: " . $extra_curricular . "<br>";
}
?>
