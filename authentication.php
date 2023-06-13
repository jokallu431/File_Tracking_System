<?php
 session_start();

 if(isset($_SESSION['auth'])){
  $_SESSION['auth_status'] = " logging to access dashboard";
  header('Location:index(1).php');
    exit(0);
 } 
 else
 {
    if($_SESSION['auth']== "1")
    {
        
    }
    else
    {
        $_SESSION['status'] = " you are not authorized as ADMIN";
        header('Location:index(1).php');
    }
 }
?>