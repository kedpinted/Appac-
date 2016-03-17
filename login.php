<!DOCTYPE html>
<?php
session_start();
include("connectdb.php");
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico">

    <title>APPAC | Login</title>
    <link href="assets/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/bootstrap-social.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700" rel="stylesheet">
</head>

<body>
    <div id="main">
        <div id="main_container">
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
