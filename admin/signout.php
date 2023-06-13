<?php
    session_start();
    // unset($_SESSION['staff_id']);
    // unset($_SESSION['password']);
    session_unset();
    header("location:../index.php");
    
?>