<?php 
    session_start();
    if(!isset($_SESSION['FirstName']) && !isset($_SESSION['LastName']))
    {
        header('location:../views/Login.php');
    }
?>