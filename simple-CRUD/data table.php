<!DOCTYPE html>
<html>
	<head>
		<title>Data input form</title>
	</head>

	<body>
	<table border="1" >
	<tr>
		<td>id</td>
		<td>username</td>
	</tr>
	
		
		
<?php
/*==============================================================	
	drawing a table	
==============================================================*/

$con = mysqli_connect("localhost" , "root" ,"" ,"synap_prototype_db");

if(mysqli_connect_errno()){
	printf("connecting failed  : %s \n", mysqli_connect_error());
	exit();
}
else{
	$sql = "SELECT * FROM users";
	$res = mysqli_query($con, $sql);
	
	if($res){
		while ($res_array = mysqli_fetch_array($res, MYSQLI_ASSOC) ) {
			$id = $res_array['id'];
			$username = $res_array['username'];
			echo "<tr><td>". $id." </td> <td> ".$username."</td></tr>" ;
		}
	}

	mysqli_free_result($res);
	mysqli_close($con);
}

?>


</body>
</html>