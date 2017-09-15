<?php

$webserver='localhost';
$user='rmulholland15';
$password='tqmn8p7yf1wzj286';
$database='rmulholland15';
mysql_connect($webserver,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");

?>