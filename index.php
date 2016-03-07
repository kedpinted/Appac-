<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel responsive - jQuery Mobile Demos</title>
    <link rel="stylesheet" href="assets/vendor/jqm/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="bower_components/mediaelement/build/mediaelementplayer.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/jquery.signature/jquery.signature.css">
    <link rel="stylesheet" type="text/css" href="assets/css/video.css">


    <script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/jquery/jquery-ui.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.4/waves.min.js"></script>
    <script type="text/javascript" src="assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="bower_components/mediaelement/build/mediaelement-and-player.min.js"></script>
    <!--script type="text/javascript" src="assets/js/handwriting.js"></script-->
    <script type="text/javascript" src="assets/js/main.js"></script>
</head>
<body background="color: #555555">

<div data-role="page" class="jqm-demos ui-responsive-panel" id="panel-responsive-page1" data-title="Panel responsive page">
<div style="height:5%; background-color:white;">5555<br>dfsdf</div>
    <div data-role="header">
        <h1></h1>
        <a href="#nav-panel" data-icon="gear" data-iconpos="notext">Add</a>
        <a class="show_comment" href="#" data-icon="arrow-l" data-iconpos="notext">Add</a>
    </div><!-- /header -->

        <div class="video_player">
                <video id="youtube1" width="720" height="450" autoplay preload="none" controls="false">
                    <source src="http://www.youtube.com/watch?v=dQ3QJoS5aaw" type="video/youtube" >
                </video>
                <div id="annotation" data-vdo_id="2">
                    <!--  editor -->
                </div>
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
	</div><!-- /panel -->

</div><!-- /page -->

</body>
</html>
