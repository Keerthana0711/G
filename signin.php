<?php 
    session_start(); 

    $connection = mysqli_connect('localhost','root','root','grocers_db',8889);
    
    if(isset($_POST['sign'])){
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $request = "insert into user_details(name, dob , email, phone, address, password) values('$name', '$dob', '$email', '$phone', '$address', '$password')";

        mysqli_query($connection, $request);

        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        header('location:dashboard.php');
    }else{
        echo 'something went wrong try again';
    }

?>