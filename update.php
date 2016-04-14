 <?php
 session_start();
 include("connectdb.php");

    $sql="SELECT * FROM annotaion WHERE anno_id = '".$_GET["anno_id"]."'";
?>
	<form class="url_video"  method="post" onSubmit="return check();" name="reg" action="video.php" >
   	    <input type="text" class="form_video" name="comment" required placeholder="comment" 
   	   value="<?php echo $row['$comment'];?>">
       <button type="summit" class="btn btn-warning" name="add_url" value="Submit" id="add_url">Submit</button>
       <button type="summit" class="btn btn-default" data-dismiss="modal">Close</button>
       </form>

	<?php

	$sql="update annotaion set comment='$comment' where anno_id=$anno_id";
	$result = mysql_query($sql) or die(mysql_error());

    header("location:video.php");	

    mysql_close();
?>