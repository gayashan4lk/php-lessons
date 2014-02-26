<?php
/*==============================================================	
	establishing the connection	
==============================================================*/

$con = mysqli_connect("localhost" , "root" ,"" ,"synap_prototype_db");

if(mysqli_connect_errno()){
	printf("connecting failed  : %s \n", mysqli_connect_error());
	exit();
}
else{
	printf("Host information : %s \n ", mysqli_get_host_info($con) );
	mysqli_close($con);
}


?>