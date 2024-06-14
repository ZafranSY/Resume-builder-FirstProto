<?php
include('./controller/connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];

    if (empty($name) || empty($email) || empty($password) || empty($cpassword)) {
        echo '<script>
                window.history.back();
              </script>';
        echo "Email and password fields are required";
        exit;
    }

    // Get the next available user ID
    $next_user_id = 1; // Default value if no users exist yet
    $max_id_query = mysqli_query($conn, "SELECT MAX(userid) AS max_id FROM users");
    $max_id_row = mysqli_fetch_assoc($max_id_query);
    if ($max_id_row['max_id'] !== null) {
        $next_user_id = $max_id_row['max_id'] + 1;
    }

    // Prepare and execute statement to check if email already exists
    $check_stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    $count_email = $check_result->num_rows;

    if ($count_email == 0) {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            // Prepare and execute statement to insert new user with manually calculated user ID
            $insert_stmt = $conn->prepare("INSERT INTO users (userid, name, email, password) VALUES (?, ?, ?, ?)");
            $insert_stmt->bind_param("isss", $next_user_id, $name, $email, $hash);
            $insert_result = $insert_stmt->execute();
            if ($insert_result) {
                header("Location: index.php");
                exit;
            }
        }
    } else {
        // Redirect back with an alert if email already exists
        echo '<script>
                window.location.href = "index.php";
                alert("Email already exists!");
              </script>';
        exit;
    }
}
?>
