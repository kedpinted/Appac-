<?php
    session_start();
    ob_start();

    $content = array();
    include("connectdb.php");
        $sql = "SELECT * FROM annotation ORDER BY time ASC";
        $result = mysql_db_query("test-2015",$sql);
        while($rs=mysql_fetch_array($result, MYSQL_ASSOC)) {
            $id = $rs["anno_id"];
            $comment = $rs["comment"];
            $time = $rs["time"];
            $content['all'][] = $rs;
            if($rs['type'] == 'comment') $content['comments'][] = $rs;
            if($rs['type'] == 'handwritting') $content['hand-writting'][] = $rs;
        }

        foreach ($content as $key => $values) {
            echo '<ul class="menu_inner '.$key.'">';
            foreach ($values as $value) {
                // var_dump($value);exit;
                $html = '<li>';
                $html.= '  <div class="profile">';
                $html.= '   <div class="image">';
                $html.= '       <img src="/Appac-/images/profile/rab.jpg">';
                $html.= '   </div>';
                $html.= '   <div class="edit">';
                $html.= '       <a href="update.php?anno_id='.$value['anno_id'].'">';
                $html.= '           <i class="fa fa-pencil-square-o fa-lg"></i>';
                $html.= '       </a>';
                $html.= '       <a href="delete_comment.php?anno_id='.$value['anno_id'].'">';
                $html.= '           <i class="fa fa-trash-o fa-lg"></i>';
                $html.= '       </a>';
                $html.= '   </div>';
                $html.= '  </div>'; 
                $html.= '        <div class="comment_container">';
                $html.= '                <div class="ment">';
                $html.=                     $value['comment'];
                $html.= '                </div>';
                $html.= '                <div class="time">';
                $html.= '                    <a href="#" class="jump" data-time='.$value['time'].'>'.$value['time'].'</a>';
                $html.= '                </div>';
                $html.= '            </a>';
                $html.= '        </div>';
                $html.= '    </a>';
                $html.= '</li>';

                echo $html;
            }
            echo '</ul>';
        }
    mysql_close();
?>