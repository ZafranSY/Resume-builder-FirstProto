<?php
include('./config/config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];

    if (empty($name) || empty($email) || empty($password) || empty($cpassword)) {
        echo '<script>
                window.history.back();
            </script>';             
                //  alert("All fields are required!");
        echo "Email and password fields are required";
        exit;
    }
    // Hash the password before storing
    $sql = "select * from users where email = '$email'";
    $result = mysqli_query($conn, $sql);  
    $count_email = mysqli_num_rows($result);  
    if($count_email == 0){
        if($password == $cpassword){
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hash')";
        $result = mysqli_query($conn, $sql);  

        if($result){
            header("Location: index.php");
        }
    }
    }
    else{
        if($count_email ==1){
            echo  '<script>
                        window.location.href = "index.php";
                        alert("Email already Exists!!")
                    </script>';
        }
    }
        
}
?>
