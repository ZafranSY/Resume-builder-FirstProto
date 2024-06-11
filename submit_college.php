<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $school_name = $_POST['school_name'];
    $ssc_marks = $_POST['ssc_marks'];
    $hsc_college_name = $_POST['hsc_college_name'];
    $hsc_marks = $_POST['hsc_marks'];
    $degree_college_name = $_POST['degree_college_name'];
    $branch = $_POST['branch'];
    $current_aggregate_pointer = $_POST['current_aggregate_pointer'];

    // Handle form data, for example, save it to a database or process it as needed
    // Example: echo data
    echo "School Name: " . $school_name . "<br>";
    echo "SSC Marks: " . $ssc_marks . "<br>";
    echo "HSC College Name: " . $hsc_college_name . "<br>";
    echo "HSC Marks: " . $hsc_marks . "<br>";
    echo "Degree College Name: " . $degree_college_name . "<br>";
    echo "Branch: " . $branch . "<br>";
    echo "Current Aggregate Pointer: " . $current_aggregate_pointer . "<br>";
}
?>
