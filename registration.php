<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css"  href="stylesheets/base.css"  />
<link rel="stylesheet" type="text/css"  href="stylesheets/index-page-container.css"  />
<link rel="stylesheet" type="text/css"  href="stylesheets/self-learning-pages.css"  />
<title>Brain</title> 
</head>

<body>
<div id="header-wrapper" >
	<div  id="title-wrapper" class="wrapper">
		<div  id="title" class="container">
			<h1 id="title-brain" > <a href="index.php" id="title-brain"> Brain <span id="title-brain" >.com</span></a> </h1>

		</div>
	</div>
	<div id ="menu-wrapper" class="wrapper">
		<div id="menu" class="container">
			<ul id=" menu-table">



				<li class="menu-items"><a href="index.php"> Home</a></li>
				<li class="menu-items"><a href="self-learning.php"> Self Learning</a></li>
				<li class="menu-items"><a href="">Online Tests</a></li>
				<li class="menu-items"><a href="">Need Tution?</a></li>
				<li class="menu-items"><a href="">Downloads</a></li>
				<li class="menu-items"><a href="">Help</a></li>
				<li class="menu-items"><a href="">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<!--<div id ="sub-menu-wrapper" class="wrapper">
		<div id="sub-menu" class="container" ></div>
	</div>-->
</div>


<!--========================================================== 
		page-content
	========================================================== -->

<div id="page-wrapper" class="wrapper">
<div  id="page" class="container">

<!--========================================================== 
		USER-REGISTRATION
	========================================================== -->

<div id="reg-wrapper" class="content"  >			
<div id="reg-content"  >
	<form action="registration.php"  method="POST" >
		<table id="reg-content" >
			<tr><td width="98" class="reg-lable" >First Name </td><td width="294"> 
			<input class="reg-input"  type="text" name="fname" size="35" value="" > 
			</td></tr>
			<tr><td class="reg-lable" >Last Name </td><td> 
			<input class="reg-input" type="text" name="lname" size="35" value="" >
			</td></tr>
			<tr><td class="reg-lable" >Birth day </td><td> 
			<input class="reg-input"  type="text" name="bday" size="35" value="" > 
			</td></tr>
			<tr><td class="reg-lable" >E-mail </td><td> 
			<input class="reg-input"  type="text" name="email" size="35" value="" > 
			</td></tr>
			<tr><td class="reg-lable" >User name </td><td> 
			<input class="reg-input"  type="text" name="uname" size="35" value="" > 
			</td></tr>
			<tr><td class="reg-lable" >Password </td><td> 
			<input class="reg-input"  type="password" name="password" size="35" value="" > 
			</td></tr>
			<tr><td class="reg-lable" >Retype Password </td><td> 
			<input class="reg-input"  type="password" name="confpassword" size="35" value="" > 
			</td></tr>
		</table>
			<div id="reg-button" >
			<input id="reg-button" type="submit" name="submit" value="Register me">
			</div>
	</form>
	<p id="reg-content" > 

	<?php 
	if(isset($_POST['submit'])){
		if($_POST['password'] != $_POST['confpassword']){
			echo "Retype password correctly !";
		}
	}
	 ?>
	 </p>

<?php 

include("includes/db_connection.php");
include("includes/custom_functions.php");

if(isset($_POST['submit'])){

	if(($_POST['password'] == $_POST['confpassword'])){
		// we use a function to registration
  		user_registraion();  
  	}

 }

?>

</div>
</div>

	
	</div>
</div>

<?php include("includes/footer.php"); ?>



<!--========================================================== 
		php-script
	========================================================== -->

