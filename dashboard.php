<?php
    session_start();
    if(!isset($_SESSION['email']))
        die('Not logged in!');

?>

<!DOCTYPE html>
<html>
    <header>
        <title>GROCERS</title>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">         
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">        
        <link rel="stylesheet" href="styles.css">
    </header>
    <body>
        <!-- <h1>Hello! <?php session_start(); echo $_SESSION['name']; ?></h1>-->

        <nav class="navbar navbar-light navbar-expand-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">GROCERS.</a>
                <button class="navbar-toggler nr-auto" type="button" data-toggle="collapse" data-target="#NavBar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="NavBar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="edit_profile.php">Edit Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="daily_needs.php">Daily Needs</a></li>
                        <li class="nav-item"><a class="nav-link" href="monthly_needs.php">Monthly Needs</a></li>
                        <li class="nav-item"><a class="nav-link" href="bill.php">Bill</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="jumbotron">
            <div class="welcome">
                <h1>Welcome <?php echo $_SESSION['name'];?></h1>
            </div>
        </header>
        <div class="about">
            <h1 class="services">our services</h1>
            <div class="about-content">Get all your daily and monthly needs at one place.<br>
                We offer different daily and monthly need subscription like milk, newspaper, water cans, medicine, rice, etc.
            </div>
        </div>

        <footer class="contact" id="contact">
            <div class="brand-details">
                <h3 class="brand-name">GROCERS.</h3>
                <p class="detail">We aim at providing all basic needs on a routine at one place.</p>
            </div>
            <div class="contact-details">
                <h3 class="contact-title">Contact</h3>
                <p><i class="fa fa-address-card"></i>: Chennai, Tamil Nadu, India</p>
                <p><i class="fa fa-phone"></i>: +91-9955220015</p>
                <p><i class="fa fa-phone"></i>: +91-8945740254</p>
                <p><i class="fa fa-envelope"></i>: grocers@gmail.com</p>
            </div>
            <div class="link-details">
                <h3 class="link-title">Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="daily_needs.php">Daily Needs</a></li>
                    <li><a href="monthly_needs.php">Monthly Needs</a></li>
                    <li><a href="bill.php">Bill</a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>