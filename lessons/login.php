
<html>

<?php

session_start();

if(isset($_POST['submit']))
     {
	     $username = $_POST['username'];	
		$password = $_POST['password'];	

          $query = "	SELECT * FROM members WHERE username = '$username' AND password = '$password'" ;
          $result = mysql_query($query);
	 	
		if(mysql_num_rows($result)>0)
               {
                    $_SESSION['user'] = $username;
               }
		else
               {
                    echo "<br> user name or password is incorrect";
               }
	}
	
//********* END if  ******


?>



<form name="login-form" action="" method="post">
<table>
<tr><td>user name :</td><td><input type="text" name="username"></td></tr>
<tr><td>password :</td><td><input type="password" name="password" ></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="login" ></td></tr>
</table>

<?php
	if(!empty ($_SESSION['user']))
	{
		echo '<p><strong>hello </strong>'.$_SESSION['user'] . "!<br></p>";
		echo '<a href="login.php?id=logout" ><strong>logout</strong></a>';
		}


//***** creating logout
	if(isset($_GET['id']) && $_GET['id']== 'logout' )
	{
		$_SESSION['user'] = '';
		}

?>

</html>
