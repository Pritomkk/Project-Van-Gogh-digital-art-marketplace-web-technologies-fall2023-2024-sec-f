<?php
require_once('../models/model.php');
include_once('../views/Header.Html');
?>
<?php
session_start();

if (isset($_POST['Submit'])) {
    $email = $_POST['Email'];
    $UserName= $_POST['UserName'];
    $Forget= Check($email, $UserName);


    if ($Forget) 
    {
            $_SESSION['Email']=$Forget['Email'];
            $_SESSION['UserName']=$Forget['UserName'];
          
            header('location:../views/ForgetNewPass.Php');
    } 
        
    else {
        echo "<center><h3>Login failed. Incorrect email or password.</center></h3>";
    }
}
?>
