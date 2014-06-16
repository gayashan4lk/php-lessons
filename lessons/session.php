<?php
          session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>session</title>
</head>
<body>
<?php

      $_SESSION['f_name'] = 'Eranga' ;
      $_SESSION['chan_name'] = 'chandima' ;
     
     
      $name1 = "my first name is :".$_SESSION['f_name']."<br>  my last name is : ".$_SESSION['l_name'].
      "<br>  chan's name is : ". $_SESSION['chan_name']."<br> previously stored name is : ".$_SESSION['name']."<br><hr/>" ;
      
     
      echo $name1 ;
      //php has memory of $_SESSION array.it store values that i assign to the $_SESSION in various indexes.
      
     
      $_SESSION['name'] = "Eranga Gayashan";
      $_SESSION['l_name'] = "gayashan";
      
      $name2 = "my first name is :".$_SESSION['f_name']."<br>  my last name is : ".$_SESSION['l_name'].
      "<br>  chan's name is : ". $_SESSION['chan_name']."<br> previously stored name is : ".$_SESSION['name'] ;

     echo $name2 ;
?>

</body>
</body>
</html>