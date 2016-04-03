<?php
    session_start();
    ob_start();
    include("connectdb.php");
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
                                <img src=\"http://i1.ytimg.com/vi/".$linkvdo."/hqdefault.jpg\">
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