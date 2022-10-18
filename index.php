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
        <div class="welcome-content">
            <div class="welcome">
                <h1>Welcome!</h1>
                <h3>to GROCERS</h3>
            </div>
            <div class="content-form">
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#signin">
                            Sign In
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#login">
                            Log In
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="signin" class="tab-pane fade show active">
                        <h2 class="text-center">Sign In</h2>
                        <form action="signin.php" method="post">
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input class="form-control" type="date" id="dob" name="dob" placeholder="DOB">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="email" class="form-label">Email ID</label>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Email ID">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input class="form-control" type="tel" id="phone" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-12">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" rows="3"></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group col-12">
                                    <input class="form-control btn btn-success" type="submit" id="sign" name="sign" style="margin-top: 7px;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="login" class="tab-pane fade show">
                        <h2 class="text-center">Log In</h2>
                        <form action="login.php" method="post">
                            <div class="row">
                                <div class="form-group col-12 col-md-10 offset-md-1">
                                    <label for="email" class="form-label">Email ID</label>
                                    <input class="form-control" type="text" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-12 col-md-10 offset-md-1">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group col-12 col-md-10 offset-md-1">
                                    <input class="form-control btn btn-success" type="submit" id="log" name="log" style="margin-top: 7px;">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>