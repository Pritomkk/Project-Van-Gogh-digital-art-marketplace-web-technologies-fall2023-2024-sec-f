<?php
require_once('../models/modelAdmin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <table width="100%">
            <tr >
                <td align="left"width="10%" >
                    <a href="../views/public_home.html">
                        <img src="../assets/logo.png" alt="company logo" width="200" height="50"> 
                    </a>
                </td>
                <td align="left">
                    <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                </td>
                <td align="right">
                    <a href="../views/public_home.html">Home </a>  | &nbsp;
                    <a href="../views/Login_Admin.php">Login</a>  |&nbsp;
                </td>
            </tr>
        </table>
    </header> 
    <hr>
    
    <?php
    session_start();

    if (isset($_POST['Submit'])) 
    {
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $Admin=loginadmin($email,$password);

        if ($email == "" || $password == "") {
            echo "<center><H3>Please FillUp Email or password Properly!</H3></center>";
        } 
        
        elseif($Admin)
        {
            $_SESSION['FirstName'] = $Admin['firstName'];
            $_SESSION['LastName'] =  $Admin['lastName'];
            $_SESSION['UserType'] =  $Admin['type'];
            $_SESSION['UserName']=   $Admin['userName'];
            $Email = $Admin['email'];

            if (isset($_POST['StayLogin'])) 
            {
                setcookie('email', $Email, time() + 604800, '/');
            }

            header('location:../views/Admin_dashboard.php');
        }
        else 
        {
            echo "<center><h3>Login failed. Incorrect email or password.</center></h3>";
        }
    }
    else 
    {
        header('location:../views/Login_Admin.php');
    }
    ?>
</body>
</html>
