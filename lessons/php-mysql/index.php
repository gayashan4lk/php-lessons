
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css"  href="  "  />

<title> using PDO    </title> 

</head>

<body>

<?php
//===============	MAKE A CONNECTION	========================

$dsn = 'mysql:host=localhost ; dbname = mylogin_db';
$user = 'root';
$password = '';

try{
	$db = new PDO($dsn , $user , $password);
}
catch(PDOException $e){
	$error_msg = $e->getMessage();
	echo $e;
}

if($db){
	echo "connection maked succussfully<br>";
}
else{
	echo "connection making is failed<br>";
}


//===============	INSERT VALUES INTO DATABASE	========================

$q = "	INSERT INTO users 
				(id,first_name , last_name , birthday , email , password ) 
	 	VALUES 
	 			(null,'nimesh' ,'madhushanka','1990.5.12','nimesh@gmail.com','1234567890')";


	$stat = $db->prepare($q);
	$stat->execute();	


//===============	READ VALUES FROM DATABASE	========================

$q2 = 'SELECT * FROM users WHERE id=1 ';

	$stat2 = $db->prepare($q2);
	$stat2->execute();	
	//$result_set = array();
	//$result_set['1'] = "Eranga"; 
	$result_set = $stat2->fetch();
	//$result_set['1'] = "Eranga";

	if(empty($result_set)){

			echo "result_set is empty !" ."<br>";
			
	}
	else{
		//$result = array();
		//$result['1'] = "Eranga";
		//$result['2'] = "gayashan";
		$result = $result_set->fetch();
			if(!empty($result)){
				echo " first name is ". $result['1'] ."<br>" ;
				echo " last name is ". $result['2'] ."<br>" ;
			}
			else{
				echo "resulting array is empty !" ."<br>" ;
			}
	}


?>



</body>

</html>
