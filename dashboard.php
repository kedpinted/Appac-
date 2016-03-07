<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Annotation | Dashboard</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bower_components/mediaelement/build/mediaelementplayer.min.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/video.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery/jquery-ui.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.4/waves.min.js"></script>
    <script type="text/javascript" src="assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="bower_components/mediaelement/build/mediaelement-and-player.min.js"></script>
    <script type="text/javascript" src="assets/vendor/jquery.signature/jquery.signature.min.js"></script>
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
    <div id="nav_bar">
        <a href="#"><img src="/Appac-/images/upload.png"></a>
    </div>
    <div class="content_container">
        <div class="flex_cards">
            <div class="cards_container">
                <div class="content_card universal_card">
                    <div class="thumbnail_image">
                        <div class="hover_icon_container">
                            <div class="hover_icons">
                                <!--<a href="#" class="hover_icon"></a>-->
                                <i class="fa fa-play-circle-o fa-4x"></i>
                            </div>
                        </div>
                    </div>
                    <div class="utility_bar">
                        <div class="bottom_bar_container">
                            <div class="bottom_bar">
                                <div class="icon">
                                    <i data-toggle="tooltip" title="Delete" class="fa fa-trash-o fa-lg"></i>
                                </div>
                                <div class="icon right">
                                    <i class="fa fa-trash-o fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cards_container">
                <div class="content_card universal_card">
                    <div class="thumbnail_image">
                        <div class="hover_icon_container">
                            <div class="hover_icons">
                                <a href="video.php" class="hover_icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="utility_bar">
                        <div class="bottom_bar_container">
                            <div class="bottom_bar">
                                <div class="icon">
                                    <i class="fa fa-trash-o fa-lg"></i>
                                </div>
                                <div class="icon right">
                                    <i class="fa fa-trash-o fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--flex_cards-->

       <!--<?php
            /*@session_start();
            include("connectdb.php");

            $sql = "SELECT * FROM add_vdo ORDER BY id ASC LIMIT 0,6";

            $result = mysql_db_query("test-2015",$sql);
            while($rs=mysql_fetch_array($result)) {
              $idvdo = $rs["vdo_id"];
              // echo '<video width="760" height="480" id="player'.$rs['id'].'">';
              // echo "<source type='video/youtube'  src='https://www.youtube.com/embed/$idvdo'/>";
              // echo "</video>";
              echo '<div class="video">';
              echo '<a href="#">';
              echo '<img src="http://i1.ytimg.com/vi/'.$idvdo.'/hqdefault.jpg">';
              echo '</a>';
              echo '</div>';
            }
            echo '<div class="clearfix">';
              mysql_close();*/
      ?>
      <span id="player1-mode"></span>
      <script>
        $('video').mediaelementplayer({
          success: function(media, node, player) {
            $('#' + node.id + '-mode').html
          }
        });
      </script>-->

    </div>
  </div>
</body>
</html>