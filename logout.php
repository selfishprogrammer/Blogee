<?php



session_start();
session_unset();

session_destroy();
 
    $_SESSION['loggedin']  =true;
    $_SESSION['username'] =$username;
               

  header("location: index.php");

    
?>