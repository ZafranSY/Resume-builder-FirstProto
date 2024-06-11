<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_contact = $_POST['user_contact'];
    $email_address = $_POST['email_address'];
    $git_link = $_POST['git_link'];
    $address = $_POST['address'];
    $age = $_POST['age'];

    // Handle form data, for example, save it to a database or process it as needed
    // Example: echo data
    echo "First Name: " . $first_name . "<br>";
    echo "Last Name: " . $last_name . "<br>";
    echo "User Contact: " . $user_contact . "<br>";
    echo "Email Address: " . $email_address . "<br>";
    echo "Git Link: " . $git_link . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Age: " . $age . "<br>";
}
?>
