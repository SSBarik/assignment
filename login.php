<?php

    require("includes/common.php");
	// Redirects the user to index page if logged in.
	if (isset($_SESSION['email'])) {
	    header('location: index.php');
	}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | SUIIT Network</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A basic login-register project | HTML CSS JS BS4 PHP MySQLi">
    <meta name="author" content="Shashank Shekhar Barik">
    <link rel="icon" type="image/png" href="">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body{
            background: url(img/bg2.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <a href="index.php" class="btn btn-outline-danger ml-4 mt-2"><span><i class="fas fa-home"></i></span></a>
    <div class="container-fluid">
        <div class="jumbotron o col-lg-4 offset-lg-4 mt-4">
            <!-- Login form -->
            <form action="login_submit.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" name="pwd">
                </div>
                <button type="submit" class="btn btn-danger">Login</button>
                <?php 

                    //shows the err message
                    if(isset($_GET['error'])) {
                        
                        echo "<br><br>";
                        echo $_GET['error']; 
                        echo "<p>Don't have an account ?<a href='register.php'> Register now</a></p>";
                    
                    }
                ?>
            </form>
        </div>
    </div> 

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>