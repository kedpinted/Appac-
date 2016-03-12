<!DOCTYPE html>
<?php
session_start();
include("connectdb.php");
include("css.html");
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>APPAC | Login</title>
    <link href="assets/css/signin.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
</head>

<body  background="images/Login/login.jpg" position:"center";>
    <div class="container" align="center">
        <div class="logo">
            <img src="images/Login/appac.png"/>
        </div>
        <div class="social">
            <button class="btn btn-facebook">
                <i class="fa fa-facebook"></i> |  Facebook
            </button>
            <button class="btn btn-google-plus">
                <i class="fa fa-google-plus"></i> |  Google+
            </button>
        </div>
        <div class="line">
            <img src="images/Login/or.png"/>
        </div>
        <form class="form-signin" method="post" action="check_login.php">
            <input type="text" class="form-control" placeholder="Username" name="username" required autofocus><br><br>
            <input type="password" class="form-control" placeholder="Password" name="password" required><br><br>
            <input type="submit" value="Log in" name="Login" class="login-submit"/>
            <a href="register.php">
                <p>Create Account</p>
            </a>
        </form>
            </div> <!-- /container -->
</body>
</html>
