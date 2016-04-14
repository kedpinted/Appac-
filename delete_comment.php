  <?php
    include("connectdb.php");

    $sql = "delete FROM annotation where anno_id = $_REQUEST[anno_id]";
                                                    
    $result = mysql_query($sql) or die(mysql_error());

	    echo "<script language=\"JavaScript\">";
		echo "alert('Delete Comment Success.');window.location='video.php';";
		echo "</script>";

    mysql_close();
?>