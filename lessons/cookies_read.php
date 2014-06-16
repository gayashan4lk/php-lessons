<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cookies read</title>
</head>
<body>
<?php

     
          
     if(isset($_COOKIE['cooker']))
          {
               $cook = $_COOKIE['cooker'];
               echo 'cooker cookie from cookies page : '. $cook . '<br>';
          }
          else
          {
               echo ' cookie is not set !  <br>';
          }     
          
     if(isset($_COOKIE['pma_collation_connection']))
          {
               $cook2 = $_COOKIE['pma_collation_connection'];
               echo 'pma_collation_connection cookie from localhost : '. $cook2 . '<br>';
          }
          else
          {
               echo ' pma_collation_connection cookie is not set !  <br>';
          }
          
      if(isset($_COOKIE['visitorID']))
          {
               $cook2 = $_COOKIE['visitorID'];
               echo 'visitorID from babylon.com : ' . $cook3 .'<br>';
          }
          else
          {
               echo ' visitorID cookie is not set ! ' ;
          }

     setcookie('cooker',0,time()-(60*60));
	 
	 		        
     
     
    

?>

</body>
</body>
</html>