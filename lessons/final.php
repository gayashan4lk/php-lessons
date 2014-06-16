<html>
<body>

your first name is : <?php echo $_POST["name1"];   ?> <br>
your last name is  : <?php echo $_POST["name2"];  ?>

<?php
		$host = "localhost";
		$username = "root";
		$password = "";
		$db_name = "dblesson";
		$tb_name = "names";
		$fname = $_POST['name1'];
		$lname = $_POST['name2'];
		
		mysql_connect("$host","$username","$password") or die ("NO connection");
		mysql_select_db("$db_name") or die ("cannot select database");
		
		$query = "INSERT INTO $tb_name VALUES('$fname','$lname')";
		$result = mysql_query($query);
		if($result != 1)
			{
				echo "Failed..";
			}

			
		else 
			{
				$query2 = "	SELECT * FROM $tb_name";
				$result1 = mysql_query($query2);
			}
			
		while($newArray = mysql_fetch_array($result1))
			{
				$f_name = $newArray['first_name'];
				$l_name = $newArray['last_name'];
				
				echo '<br>'.$f_name;
				echo'<br>';
				echo $l_name;
			}
	
		
			
?>

</body>
</html>