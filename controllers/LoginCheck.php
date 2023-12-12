<?php
require_once('../models/model.php');
include_once('../views/Header.Html');
session_start();

if (isset($_POST['Submit'])) 
{
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $Status = login($email, $password);

    if ($email == "" || $password == "") 
    {
        echo "<center><H3>Please FillUp Email or password Properly!</H3></center>";
    } 
    elseif ($Status) 
    {  if($Status['Status']!=='suspended')
        {
            if ($Status['UserType'] =='User' || $Status['UserType'] == 'Artist') 
        {
            $_SESSION['FirstName'] = $Status['FirstName'];
            $_SESSION['LastName'] = $Status['LastName'];
            $_SESSION['UserType'] = $Status['UserType'];
            $_SESSION['UserName']=  $Status['UserName'];
            $_SESSION['Email'] = $Status['Email'];

            if (isset($_POST['StayLogin']))
             {
                setcookie('email',$_SESSION['Email'], time() + 604800, '/');
                setcookie('UserType',$_SESSION['UserType'],time() + 604800, '/');
            }
            

            header('location:../views/'.$_SESSION['UserType'].'_dashboard.php');
        }
            
        }

    else{
        echo" user is suspended";
    }
        
    } 

    else 
    {
        echo "<center><h3>Login failed. Incorrect email or password.</center></h3>";
    }
}
 else 
 {
    header('location:../views/Login.php');
}
?>
