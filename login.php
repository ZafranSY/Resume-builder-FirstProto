<?php
include('./config/config.php');

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

    if($email=='admin@admin.com'){
        header('Location: views/admin/admin.php');
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($row && password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['user_id'] = $row['userid'];
        if (empty($row['address'])){
            header("Location: ./views/profile.php");
        }
        else{
            header("Location: ./views/layout.php");
        }
        exit;
    } else {
        echo '<script>
                window.location.href = "index.php";
                alert("Login failed. Invalid email or password!!");
            </script>';
    }

    $stmt->close();
    $conn->close();
}
?>
