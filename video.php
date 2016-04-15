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
    <title>Appac | Annotation</title>
    <link rel="stylesheet" type="text/css" href="bower_components/mediaelement/build/mediaelementplayer.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/video.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type="text/javascript" src="assets/vendor/jquery.signature/jquery.signature.min.js"></script>
    <script type="text/javascript" src="bower_components/mediaelement/build/mediaelement-and-player.min.js"></script>
    <script type="text/javascript" src="assets/js/test.js"></script>

<?php 
    $vid = $_REQUEST['vid'];
    $sql="SELECT * FROM add_vdo WHERE id = $vid";
    $result = mysql_db_query("test-2015",$sql);
    $row = mysql_fetch_assoc($result);
    $videocode = $row['vdo_id']; 
?>
</head>
<body>
    <div id="main_container">
        <div id="studio_container">
            <div id="studio_header_bar" class="header_bar">
                <a href="dashboard.php" id="logo_container"></a>
                <div id="header_container">
                    <?php 
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
    <div class="containers">
        <div class="navbar">
            <div class="navbar_container">
                <!--<div class="dashboard">
                    <a href="#"><i class="fa fa-angle-double-left">        Dashboard</i></a>
                </div>-->
                <nav class="menu-opener">
                    <div class="menu-opener-inner"></div>
                </nav>
            </div>
        </div>
        <nav class="menu">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#all">All</a></li>
                <li><a href="#comments">Comment</a></li>
                <li><a href="#hand-writting">Hand-Writting</a></li>
            </ul>
                <?php
                   include("show_comment.php")
                ?>
        </nav>
        <div id="view_container">
            <div class="video_player">
                <video id="youtube1" width="720" height="450" autoplay  preload="none" controls="false">
                    <source src="https://www.youtube.com/watch?v=<?php echo $videocode; ?>" type="video/youtube" >
                </video>
                <div id="annotation" data-vdo_id="16">
                    <!--  editor -->
                </div>
            </div>
        </div>

         <div class="footer">
            <div class="video_control">
                <ul>
                    <li class="left">
                        <a class="pause play_pause" href="#">
                            <i class="fa fa-pause fa-2x"></i>
                        </a>
                    </li>
                    <li class="progres">
                        <div class="bookmarks"></div>
                        <div class="progres"></div>
                    </li>
                    <li class="right">
                        <a class="mark" href="#">
                            <i class="fa fa-bookmark fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
       
    </div>
<script type="text/javascript">
  $(document).ready(function(){
    $("a.updatecomment").click(function(){
      var annoid = $(this).data("annoid");
      var textold = $("span.commenttext-"+ annoid).html();
      $("span.commenttext-"+ annoid).html('<form action="update.php"><input name="anno_id" value="'+annoid+'" hidden/><input name="comment" value="'+textold+'" style="width: 100%;" ><button type="submit">ตกลง</button></form>');
    });
  });
</script>
</body>
</html>