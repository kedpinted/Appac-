<!DOCTYPE html>
<?php 
session_start();
ob_start();
include("connectdb.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Appac | Annotation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="bower_components/mediaelement/build/mediaelementplayer.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/video.css">
  <link rel="stylesheet" href="assets/css/style.css">


  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/jquery/jquery-ui.min.js"></script>
  <script type="text/javascript" src="assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="bower_components/mediaelement/build/mediaelement-and-player.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.4/waves.min.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
</head>
<body>
    <div id="main_container">
        <div id="studio_container">
            <div id="studio_header_bar" class="header_bar">
                <a href="#" id="logo_container"></a>
                <div id="header_container">
                    <?php 
                        if($_SESSION["logged_in"]==1)
                        { 
                        //  echo $_SESSION["user_name"];
                            echo "<a href=\"logout.php\">
                                    <i class=\"fa fa-sign-out fa-lg\"></i>
                                    <span>Logout</span>
                                 </a>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="navbar">
            <div class="navbar_container">
                <nav class="menu-opener">
                    <div class="menu-opener-inner"></div>
                </nav>
            </div>
        </div>
        <nav class="menu">
            <ul class="menu_inner">
                <li>
                    <?php
                        include("comment.php");
                    ?>
                </li>
            </ul>
        </nav>
            <div id="view_container">
                <div class="video_player">
                    <video id="youtube1" width="720" height="450"  preload="none" controls="false">
                        <source src="http://www.youtube.com/watch?v=dQ3QJoS5aaw" type="video/youtube" >
                    </video>
                    <div id="annotation" data-vdo_id="2">
                        <!--  editor -->
                    </div>
                </div>
            </div>



            <!--<div id="comment">
                <ul data-role="listview">
                    <li data-icon="delete"><a class="close_comment" href="#" data-position="right" data-rel="close">Close</a></li>

                    <li>
                        <div>
                            <?php
                                include("comment.php");
                            ?>
                        </div>
                    </li>
                </ul>
            </div>-->

                <div class="footer">
                    <div class="video_control">
                        <ul>
                            <li>
                                <a class="pause play_pause" href="#">
                                    <i class="fa fa-pause fa-2x"></i>
                                </a>
                            </li>
                            <li class="progress">
                                <div class="bookmark"></div>
                                <div class="progress"></div>
                            </li>
                            <li>
                                <a class="mark" href="#">
                                    <i class="fa fa-bookmark fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a class="" href="#">
                                    <i class="fa fa-expand fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
    </div>
</body>
</html>