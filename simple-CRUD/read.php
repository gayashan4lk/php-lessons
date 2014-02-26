<?php
/*==============================================================	
	reading database	
==============================================================*/

$con = mysqli_connect("localhost" , "root" ,"" ,"synap_prototype_db");

if(mysqli_connect_errno()){
	printf("connecting failed  : %s \n", mysqli_connect_error());
	exit();
}
else{
	$sql = "SELECT * FROM users";
	$res = mysqli_query($con, $sql);
	if ($res) {
		$numberofrows = mysqli_num_rows($res);
		printf("Result set has %d rows.\n" , $numberofrows);
	}
	else{
		printf("could not retrieve any record: %s \n" , mysqli_error($con));
	}

	mysqli_free_result($res);
	mysqli_close($con);
}


?>