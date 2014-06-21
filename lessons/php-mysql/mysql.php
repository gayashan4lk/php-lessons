<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css"  href="  "  />

<title>  using mysql  </title> 

</head>

<body>

<?php
	
	$con = mysql_connect("localhost","root","");
	$db = mysql_select_db("mylogin_db",$con);

	/*
	$q = "	INSERT INTO users 
				(id,first_name , last_name , birthday , email , password ) 
	 	VALUES 
	 			(null,'nimesh' ,'madhushanka','1990.5.12','nimesh@gmail.com','1234567890')";
	mysql_query($q);
	*/

	$q = 'SELECT * FROM users WHERE id=1 ';

	$result = mysql_query($q);
	//$res = array();
	$res = mysql_fetch_array($result);

	echo "first name : ". $res['first_name'] ."<br>";
	echo "last name : ". $res['first_name'] ."<br>";
	echo "birthday : ". $res['birthday']."<br>";
	echo "email : ". $res['email']."<br>";
	echo "password : ". $res['password']."<br>";



	echo "************************************" ."<br>";
	echo "print the array in foreach loop !" ."<br>";
	
	foreach( $res as $key => $value){

		echo $key . " :  ". $value . "<br>" ;
	}
	



?>


</body>

</html>