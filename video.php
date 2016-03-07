<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Appac | Annotation</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="bower_components/mediaelement/build/mediaelementplayer.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/video.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/jquery/jquery-ui.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.4/waves.min.js"></script>
    <script type="text/javascript" src="assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="bower_components/mediaelement/build/mediaelement-and-player.min.js"></script>
    <script type="text/javascript" src="assets/vendor/jquery.signature/jquery.signature.min.js"></script>
    <!--script type="text/javascript" src="assets/js/handwriting.js"></script-->
    <script type="text/javascript" src="assets/js/main.js"></script>
</head>
<body>
    <div id="main_container">
        <div id="studio_container">
            <div id="studio_header_bar" class="header_bar">
                <a href="#" id="logo_container"></a>
                <div id="header_container">
                    --Hello--
                    <div id="profile_image_container">
                        <img src="/Appac-/images/profile/rab.jpg">
                    </div>
                </div>
            </div>
        </div>
            <div class="container" id="view_container">
                <div class="video_player">
                    <video id="youtube1" width="720" height="450" autoplay preload="none" controls="false">
                        <source src="http://www.youtube.com/watch?v=dQ3QJoS5aaw" type="video/youtube" >
                    </video>
                    <div id="annotation" data-vdo_id="2">
                        <!--  editor -->
                    </div>
                </div>
            </div>

            <div id="comment">
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
            </div>

            <footer>
                <div class="footer for_sure load_footer">
                    <div class="footer_container">
                        <div class="video_control">
                            <ul>
                                <li><a class="pause play_pause" href="#">Pause</a></li>
                                <li class="progress">
                                    <div class="bookmark"></div>
                                    <div class="progress"></div>
                                </li>
                                <li><a class="mark" href="#">Bookmark</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
</body>
</html>
