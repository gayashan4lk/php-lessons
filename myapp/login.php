<?php   session_start();  ?>
<?php include("includes/header.php"); ?>


<!--========================================================== 
		page-content
	========================================================== -->
<div id="page-wrapper" class="wrapper">
<div  id="page" class="container">

<!--========================================================== 
		USER-login
	========================================================== -->
<div id="sign-in-wrapper" class="content"  >			
<div id="sign-in-content"  >
	<form action="login.php"  method="POST" >
		<table id="sign-in-content" >
			<tr><td class="sign-in-lable" >E-mail</td><td> 
			<input class="sign-in-input"  type="text" name="email" size="35" value="" > 
			</td></tr>
			<tr><td class="sign-in-lable" >Password</td><td> 
			<input class="sign-in-input" type="password" name="password" size="35" value="" ></td></tr>
		</table>
			<div id="sign-in-button" >	
			<input id="sign-in-button" type="submit" name="submit" value="sign in">
			</div>
	</form>
	<p id="forgot-password" > <a href="">forgot your password ?</a> </p>
	<p id="register" > <a href="registration.php" id="register"  > Register me ! </a></p>
</div>
</div>

<?php
	
	include("includes/db_connection.php");
	include("includes/custom_functions.php");
    
    //we use user_login function to log user , path:includes/custom_functions.php

    	user_login();
?>

	
	</div><!-- close page container-->
</div><!-- close page-wrapper-->


<?php include("includes/footer.php"); ?>

