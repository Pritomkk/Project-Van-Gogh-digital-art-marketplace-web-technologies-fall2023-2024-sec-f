<?php
include_once('../View/Header.html');
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" width="100%" height="420">
        <tr>
            <td >
                <table align='center'width="30%">
                    <tr>
                        <td>
                        <main>
                        <form method="post" action="../controller/LoginCheck.php" enctype="">
                        <fieldset>
                        <center>
                        
                        <h3>Welcome to Van Gogh</h3><hr>   
                        
                        Email:
                        <br><input type="email"name="Email" value="" /><br><br>
                        Password:
                        <br> <input type="Password"name="Password" value="" /> <br><br>
                        </hr>
                        <a href="../View/ForgetPassword.php">Forget Password?</a><br><br>
                        <input type="submit"name="Submit"value="Login"/>
                        <input type="checkbox" name="StayLogin" value=" ">Stay login<br>
                        
                        <p><i>Don,t Have an Account </i> 
                        <a href="../View/from.php">Sign Up</a></p>
                        
                        </center> 
                        </fieldset>
                        </from>
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

include_once('../View/Footer.html');

?>