<?php

    require("includes/common.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | SUIIT Network</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A basic login-register project | HTML CSS JS BS4 PHP MySQLi">
    <meta name="author" content="Shashank Shekhar Barik">
    <link rel="icon" type="image/png" href="logo.png">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
         body{
            background: url(img/bg1.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>

    <?php 
    
        if (!isset($_SESSION['email'])) {  
    ?>                        
        <div class="container">
            <div id="main" class="jumbotron">  
                <div class="row text-center">
                    <div class="jumbotron x col-lg-3 grow">
                        <br><br>
                        <a href="login.php">
                            <button type="button" class="btn btn-outline-danger grow">Login</button>
                        </a>
                    </div>
                    <div class="jumbotron x col-lg-6" style="background: rgba(0, 0, 0, 0.8);color:white">
                        <br><br>
                       <h1><span class="i">Welcome</span> SUIITian</h1>  
                    </div>
                    <div class="jumbotron x col-lg-3 grow"><br><br>
                        <a href="register.php">
                            <button type="button" class="btn btn-outline-danger grow">Register</button>
                        </a>
                    </div>
                </div>       
            </div>    
        </div>

    <?php    
        }  else {  
    ?>   
        <div class="container">
            <div id="main" class="jumbotron">      
                <div class="row text-center">
                    <div class="jumbotron x col-lg-9" style="background: rgba(0, 0, 0, 0.8);color:white">
                        <br><br>
                        <h1><span class="i">Congo</span> <?php echo $_SESSION['name'];?></h1>
                        <p>You are online !</p>  
                    </div>
                    <div class="jumbotron x col-lg-3 grow"><br><br>
                        <a href="logout.php">
                            <button type="button" class="btn btn-outline-danger grow">Logout</button>
                        </a>
                    </div>
                </div>       
            </div>
        </div>
    <?php
        }

    ?>  

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>