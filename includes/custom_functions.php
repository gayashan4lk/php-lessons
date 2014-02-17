<?php   

function user_registraion(){
		global $connection;
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$bday = $_POST['bday'];
		$email = $_POST['email'];
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		
		$password = md5($password);
		$query = "INSERT INTO users( firstname ,
									 lastname,
									 birthday,
									 email,
									 username,
									 password)";
		$query .= "VALUES (   		'$firstname',
									'$lastname',
									'$bday',
									'$email',
									'$uname',
									'$password')";

		mysql_query($query,$connection);
		mysql_close($connection);
		header('Location:http://127.0.0.1/brain/index.php');
}

function user_login(){
	global $connection;
	if(isset($_POST['submit'])){

			$email = $_POST['email'];
			$password =  md5($_POST['password']);

			$query = "SELECT * FROM users ";
			$query .= "WHERE email = '{$email}' " ;

			$result = mysql_query($query , $connection);

	if($result){

			$dataset = mysql_fetch_array($result);
			$email = $dataset['email'] ;
			$password1 = ($dataset['password']);

			if($password == $password1){
				$username = $dataset['username'];
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header("Location:http://127.0.0.1/brain/index.php");
			}
			else 
				header("Location:http://127.0.0.1/brain/login.php");
			//end if-else
		}
	else 
			die("database query 2 failed !".mysql_error());
	//end if-else
		}//end if-else
	mysql_close($connection);
}

function check_user(){

}


		



?>