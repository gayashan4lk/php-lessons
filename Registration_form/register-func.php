<html>
<head></head>
<title>registrer function</title>
<?php

     
     include("db-connection.php");
     
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $confpassword = $_POST['confpassword'];
     
  if(isset($_POST['submit']))
   {
     echo "<br>submit button is ok! ";
          
     if(!($password == $confpassword))
     {
         echo "<p><strong>passwords are not matched ! Re-Enter passwords.</strong></p>";
          exit;
     }
     
     else
     {
          echo "<br>mysql query is about to run!";
          
          $password = md5($password);
          mysql_query("INSERT INTO users(fname,lname,email,username,password)
                       VALUES('$firstname','$lastname','$email','$username','$password')",$connection);
          mysql_close($connection);
          echo "<br/>connection was closed!";
     }
   }

    
?>
</html>