<?php
include("db_constants.php");

$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD);

if(!$connection){	
	die("database connecting failed !".mysql_error());
}


$db_select = mysql_select_db(DB_NAME,$connection);

if(!$db_select){
	die("database selecting failed !".mysql_error());
}



?>