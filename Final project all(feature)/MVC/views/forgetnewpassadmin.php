<?php
session_start(); 
require_once('../models/modelAdmin.php');

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../assets/js/forgetNewPassword.js" defer></script>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>
<header>
           
           <table width="100%">
               <tr >
                   <td align="left"width="10%" >
                        <a href="../views/forgetpassadmin.php">
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

    <table align="center" width="100%" height="420">
        <tr>
            <td>
                <table align='center' width="30%">
                    <tr>
                        <td>
                            <main>
                                <form action="../controllers/forgetNewPassAdminCheck.php" method="post" onsubmit="return Form()" enctype="multipart/form-data">
                                <fieldset>
                                        <legend align="center"><h1>Reset Password</h1></legend>

                                        New Password:
                                        <input type="password" id="NewPassword"name="NewPassword" value="" /><br><br>
                                        <hr>

                                        Retype New Password:
                                        <input type="password" id="RePassword" name="RePassword" value="" /><br><br>
                                        <hr>
                                        <input type="submit" name="Submit" value="Submit"/>
                                    </fieldset>
                                </form>
                            </main>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>

<?php
include_once('../views/Footer.html');
?>
