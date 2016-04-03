<?php
session_start();
include("../connectdb.php");

$json_result = array('status'=> false);

	$vdo_id = (int)$_POST['vdo_id'];
	$type   = $_POST['type'];
	$value  = $_POST['value'];
	$comment  = $_POST['comment'];
	$time   = $_POST['time'];

	$sql = "INSERT INTO annotation
	(vdo_id, type, value, comment, pos_x, pos_y, time) VALUES (".$vdo_id.", '".$type."', '".$value."', '".$comment."',7,7,SEC_TO_TIME('".$time."'))";
	if(mysql_query($sql)) {
		$json_result['status'] = true;
	}


	echo json_encode($json_result);
	// echo "<script>alert('tests');</script>";

	mysql_close();
?>