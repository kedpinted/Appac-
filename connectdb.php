<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
mysql_connect('127.0.0.1', 'root', '') or die(mysql_error());
mysql_select_db('appac') or die(mysql_error());
date_default_timezone_set('Asia/Bangkok');
date("H:i:s");
mysql_query("SET NAMES UTF8");
?>