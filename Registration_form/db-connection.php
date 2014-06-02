<?php

     $connection = mysql_connect("127.0.0.1","root","");
          
          if(!$connection)
          {
               die("Database connection failed : " .mysql_error());
               echo "<h3>Database connection failed :</h3";
          }
          
          
     $db_select = mysql_select_db("foo-db",$connection);
          
          if(!$db_select)
          {
               die("Database selection failed : ".mysql_error());
               echo "<h3>Database selection failed :</h3";
          }
     
     echo 'db-connection.php included .<br/>';
     echo "its working .";
?>