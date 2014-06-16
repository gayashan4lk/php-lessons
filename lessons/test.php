<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
</head>
<body>
<?php

     $pass = 0;
     
     echo $pass."<br>";
     
     $pass = get_cfg_var("mysql.default_password <br>");
     
     echo "mysql.default_password : ".$pass ;

     echo get_cfg_var("<br>mysql.default_password");
  

?>

</body>
</body>
</html>