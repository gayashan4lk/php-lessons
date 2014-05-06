<?php 
include("includes/db_connection.php");

if(isset($_POST['submit'])){
	if(($_POST['password'] == $_POST['confpassword'])){
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$bday = $_POST['bday'];
		$email = $_POST['email'];
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		
		$password = md5($password);
		$query = "INSERT INTO users(firstname ,
									 lastname,
									 birthday,
									 email,
									 username,
									 password)";
		$query .= "VALUES ('$firstname',
										'$lastname',
										'$bday',
										'$email',
										'$uname',
										'$password')";
		mysql_query($query,$connection);
		mysql_close($connection);
		echo "kkkkkkkkkkkkk";
	
	}
	
}

?>