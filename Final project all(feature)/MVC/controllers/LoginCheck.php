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
    {  if($Status['status']!=='suspended')
        {
            if ($Status['type'] =='User' || $Status['type'] =='Artist') 
        {
            $_SESSION['FirstName'] = $Status['firstName'];
            $_SESSION['LastName'] = $Status['lastName'];
            $_SESSION['UserType'] = $Status['type'];
            $_SESSION['UserName']=  $Status['userName'];
            $_SESSION['Email'] = $Status['email'];
            $_SESSION['currentUserName']=  $Status['userName'];

            if (isset($_POST['StayLogin']))
             {
                setcookie('email',$_SESSION['email'], time() + 604800, '/');
                setcookie('UserType',$_SESSION['type'],time() + 604800, '/');
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
