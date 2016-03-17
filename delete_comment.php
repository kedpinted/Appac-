  <?php
    include("connectdb.php");

    $sql = "delete FROM annotation where anno_id = $_REQUEST[anno_id]";
                                                    
    $result = mysql_query($sql) or die(mysql_error());

    header("location:index.php");	

    mysql_close();
?>