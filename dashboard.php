<!DOCTYPE html>
<?php 
include("connectdb.php");
include("css.html");
session_start();
ob_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Annotation | Dashboard</title>
    
    <link rel="stylesheet" type="text/css" href="assets/css/video.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script type="text/javascript" src="assets/vendor/bootstrap/bootstrap.min.js"></script>
</head>
<body>
    <div id="main_container">
        <div id="studio_container">
            <div id="studio_header_bar" class="header_bar">
                <a href="#" id="logo_container"></a>
                <div id="header_container">
                   
                    <?php 
                        if (!isset($_SESSION["logged_in"])) 
                        {
                            header("Location: login.php");
                            exit;
                        }
                        
                        if($_SESSION["logged_in"]==1)
                        { 
                        //  echo $_SESSION["user_name"];
                            echo '<a href="logout.php">';
                            echo '<i class="fa fa-sign-out fa-lg"></i>';
                            echo '<span>Logout</span>';
                            echo '</a>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div id="nav_bar">
            <div id="nav_bar_container">
                <div class="profile_image">
                    <img src="/Appac-/images/profile/rabbit.jpg">
                </div>
                <div class="element name">
                    <?php 
                        if($_SESSION["logged_in"]==1)
                        {
                            echo $_SESSION["user_name"];
                        }
                    ?>
                </div>

                <div class="upload">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                      <img src="/Appac-/images/upload.png">
                    </a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal_dialog">
                <div class="modal_content">
                    <div class="modal_body">
                        <button type="button" class="close_upload" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                        </button>
                        <form class="url_video"  method="post" onSubmit="return check();" name="reg" action="add_url.php" >
                            <input type="text" class="form_video" name="vdo_name" required placeholder="Video name" />
                            <input type="text" class="form_video" name="vdo_id" required placeholder="Paste url" />
                            <button type="summit" class="btn btn-warning" name="add_url" value="Submit" id="add_url">Submit</button>
                            <button type="summit" class="btn btn-default" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_container">
            <div class="flex_cards">
                <div class="cards_container">
                <?php
                   include("show_video.php")
                ?>

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
        </div>
    </div>
</body>
</html>