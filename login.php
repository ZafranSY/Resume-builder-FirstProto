<?php
include('./controller/connection.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if (empty($email) || empty($password)) {
        echo '<script>
                window.history.back();
              </script>';
        echo "Email and password fields are required";
        exit;
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $count = $result->num_rows;

    if ($count == 1) {
        header("Location: ./views/template1.php");
    } else {
        echo '<script>
                window.location.href = "index.php";
                alert("Login failed. Invalid username or password!!")
              </script>';
    }

    $stmt->close();
    $conn->close();
}
?>
