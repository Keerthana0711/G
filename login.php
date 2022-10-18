<?php 
    session_start(); 

    $connection = mysqli_connect('localhost','root','root','grocers_db',8889);

    if(isset($_POST['log'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select email,password,name from user_details where email='$email' and password='$password'";

        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                echo "Logged in!";
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                header('location:dashboard.php');
            }
        }else{
            header('location:index.php?error=error');
        }
    }else{
        header('location:index.php?error:error');
    }

?>