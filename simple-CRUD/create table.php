<?php
/*==============================================================	
	creat a table	
==============================================================*/

$con = mysqli_connect("localhost" , "root" ,"" ,"synap_prototype_db");

if(mysqli_connect_errno()){
	printf("connecting failed  : %s \n", mysqli_connect_error());
	exit();
}
else{
	$sql = "CREATE TABLE users (
							id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
							username VARCHAR(24))";

	$res = mysqli_query($con,$sql);

	if($res== true){
		echo "our table has been created . ";
	}
	else{
		printf("our table has not been created :  %s\n", mysqli_error($con));
	}
}


?>