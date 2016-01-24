  <?php
    include("connectdb.php");

    $sql = "SELECT * FROM annotation";
                                                    
    $result = mysql_query($sql) or die(mysql_error());
    while($row = mysql_fetch_array($result))
        {
        	echo "$row[comment] $row[time]<br /><br /> ";
        }

    mysql_close();
?>