<?php
include("./controller/connection.php");
 if (isset($_POST['submit'])) {
    $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $sql = "select * from login where email = '$email'";
        $result = mysqli_query($conn, $sql);  

        $count_email = mysqli_num_rows($result);  
    if($count_email == 1)
    {
        if($password == $cpassword)
        {
            $hash = password_hash($password,PASSWORD_DEFAULT);
               $sql = "update login SET password = '$password' WHERE email = '$email'";

        $result = mysqli_query($conn, $sql);  
        if($result)
        {
            header("Location: index.php");
        }
        }
    }else
    {
        if($count_email == 0)
        {
             echo  '<script>
                        window.location.href = "index.php";
                        alert("Email not Exists!!")
                    </script>';
        }
    }
}
    echo 'success';
?>