<?php
/*==============================================================	
	inserting values
==============================================================*/

$con = mysqli_connect("localhost" , "root" ,"" ,"synap_prototype_db");

if(mysqli_connect_errno()){
	printf("connecting failed  : %s \n", mysqli_connect_error());
	exit();
}
else{
	$cleantext = mysqli_real_escape_string($con,$_POST['username']) ;
	$sql = "INSERT INTO users (username) VALUES ('".$cleantext."') ";
	$res = mysqli_query($con,$sql);

	if($res == true){
		echo "the record has been created";
	}
	else{
		printf("could not creat a record : $s\n" , mysqli_error($con));
	}
	mysqli_close($con);
}


?>