<?php
    session_start();
    // unset($_SESSION['staff_id']);
    // unset($_SESSION['password']);
    session_unset();
    header("location:../index(1).php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Out</title>
</head>
<body>
    <H1>thank you for Signing Out</H1>
</body>
</html>