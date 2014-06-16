<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>second page</title>
</head>

<body>
<?php
	
	 $fname = $_GET['fname_'];
	 echo 'first name : '. $fname.'<br>';
	 $lname = $_GET['lname_'];
	 echo 'second name : '.$lname;


?>
</body>
</html>