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
                    <i class="fa fa-pencil-square-o"></i>
                </div>
                    <div class="upload">
                        <a href="add.php"><img src="/Appac-/images/upload.png"></a>
                </div>
            </div>
            
        </div>  
        <div class="content_container">
            <div class="flex_cards">
                <div class="cards_container">
                <?php
                    $sql = "SELECT * FROM add_vdo ORDER BY id ASC LIMIT 0,6";
                    $result = mysql_db_query("test-2015",$sql);
                    while($rs=mysql_fetch_array($result)) {
                        $linkvdo = $rs["vdo_id"];
                        $idvdo = $rs["id"];
                        $namevdo = $rs["vdo_name"];

                        echo "<div class=\"content_card universal_card\">
                                <div class=\"thumbnail_image\">
                                    <a href=\"video.php\">
                                        <div class=\"hover_icon_container\">
                                            <img src=\"http://i1.ytimg.com/vi/".$linkvdo."/hqdefault.jpg\" width=\"280\" height=\"180\">
                                             <div class=\"hover_icons\">
                                                <div class=\"hover_icon\">
                                                    <i class=\"fa fa-play fa-2x\"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"utility_bar\">
                                    <div class=\"bottom_bar_container\">
                                        <div class=\"bottom_bar\">
                                            <div class=\"text\">
                                                ".$namevdo."
                                            </div>
                                            <div class=\"icon\">
                                                <a href=\"delete_video.php?id=".$idvdo."\">
                                                    <i class=\"fa fa-trash-o fa-lg\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                        }
                    echo '<div class="clearfix">';
                    mysql_close();
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
</body>
</html>