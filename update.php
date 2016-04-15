 <?php
 session_start();
 include("connectdb.php");

  $sql="SELECT * FROM annotation WHERE anno_id = '".$_REQUEST["anno_id"]."'";
  
  $comment = $_REQUEST["comment"];

	$sql="update annotation set comment='$comment' where anno_id = $_REQUEST[anno_id]";
	$result = mysql_query($sql) or die(mysql_error());

    header("location:video.php");	

    mysql_close();
?>