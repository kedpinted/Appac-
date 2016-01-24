<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel responsive - jQuery Mobile Demos</title>
    <link rel="stylesheet" href="assets/vendor/jqm/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="assets/vendor/jqm/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="bower_components/mediaelement/build/mediaelementplayer.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/jquery.signature/jquery.signature.css">
    <link rel="stylesheet" type="text/css" href="assets/css/video.css">


    <script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/jquery/jquery-ui.min.js"></script>
    <script src="assets/vendor/jqm/index.js"></script>
    <script src="assets/vendor/jqm/jquery.mobile-1.4.5.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.4/waves.min.js"></script>
    <script type="text/javascript" src="assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="bower_components/mediaelement/build/mediaelement-and-player.min.js"></script>
    <script type="text/javascript" src="assets/vendor/jquery.signature/jquery.signature.min.js"></script>
    <!--script type="text/javascript" src="assets/js/handwriting.js"></script-->
    <script type="text/javascript" src="assets/js/main.js"></script>




</head>
<body background="color: #555555">

<div data-role="page" class="jqm-demos ui-responsive-panel" id="panel-responsive-page1" data-title="Panel responsive page">

    <div data-role="header">
        <h1></h1>
        <a href="#nav-panel" data-icon="gear" data-iconpos="notext">Add</a>
        <a class="show_comment" href="#" data-icon="arrow-l" data-iconpos="notext">Add</a>
    </div><!-- /header -->

    <div role="main" class="ui-content jqm-content jqm-fullwidth">
    <div style="text-align: center">
        <div class="video_player">
                <video id="youtube1" width="860" height="480" autoplay preload="none" controls="false">
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
    </div>

	</div><!-- /content -->

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

<div data-role="page" id="panel-responsive-page2">

    <div data-role="header">
        <h1>Landing page</h1>
    </div><!-- /header -->#

    <div role="main" class="ui-content jqm-content">

        <p>This is just a landing page.</p>

        <a href="#panel-responsive-page1" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini ui-icon-back ui-btn-icon-left">Back</a>

    </div><!-- /content -->

</div><!-- /page -->

</body>
</html>
