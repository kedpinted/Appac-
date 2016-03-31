<?php
    session_start();
    ob_start();
    include("connectdb.php");
        $sql = "SELECT * FROM annotation ORDER BY time ASC";
        $result = mysql_db_query("test-2015",$sql);
        while($rs=mysql_fetch_array($result)) {
            $id = $rs["anno_id"];
            $comment = $rs["comment"];
            $time = $rs["time"];

            echo "<li>
                    <div class=\"profile\">
                        <div class=\"image\">
                            <img src=\"/Appac-/images/profile/rab.jpg\">
                        </div>
                        <div class=\"edit\">
                            <a href='update.php?anno_id=$id'>
                                <i class=\"fa fa-pencil-square-o\"></i>
                            </a> 
                            <a href='delete_comment.php?anno_id=$id'>
                                <i class=\"fa fa-trash-o fa-lg\"></i>
                            </a>
                        </div>
                    </div> 
                    <a href=\"#\" class=\"jump\" data-time='$time'>
                        <div class=\"comment_container\"> 
                                <div class=\"ment\">
                                    ".$comment."
                                </div>
                                <div class=\"time\">
                                    <a href=\"#\" class=\"jump\" data-time='$time'>".$time."</a>
                                </div>
                            </a>
                        </div>
                    </a>
                </li>";
        }
    mysql_close();
?>