  <?php
    include("connectdb.php");

    $sql = "delete FROM add_vdo where id = $_REQUEST[id]";
                                                    
    $result = mysql_query($sql) or die(mysql_error());

    header("location:dashboard.php");	

    mysql_close();
?>