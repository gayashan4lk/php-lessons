<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>including</title>
</head>

<body>

<?php

     //require ("noexistfile.php");
     
    include ("included_func.php");
     
     hello("mr.president","rose paradise");
     echo "<br>";
     
     hello("gayashan, you are about to win","rose paradise");
     echo "<br>";
    
    
    /*$var = 10;
    if($var == 10)
    {
          echo "<p><strong>if function is running</strong></p>";
    } 
     */
     
/*NOTE:   IF server couldn'y able to find the file that is needed to execute require command, 
               require ("noexistfile.php");
          
          there is fetal error!! php file doesnt execute anymore!!
          
          but, even server couldnt able to find the file that need to run include command,
               include ("noexistfile.php");
               
          there is error saying "failed to open file"..BUT php file executes ! 
          

*/
     
?>

</body>
</body>
</html>