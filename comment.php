  <?php
    include("connectdb.php");

    $sql = "SELECT * FROM annotation";
                                                    
    $result = mysql_query($sql) or die(mysql_error());
    while($row = mysql_fetch_array($result))
        {
        	echo "<a href='#' class='jump' data-time='$row[time]'>$row[comment] $row[time]</a><br /><br /> ";
        }

    mysql_close();
?>