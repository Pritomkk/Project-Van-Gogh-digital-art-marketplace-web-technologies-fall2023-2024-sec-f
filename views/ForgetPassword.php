<?php
include_once('../views/Header.html');
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../javascript/forgetpass.js" defer></script>
    <link rel="stylesheet" href="../CSS/dashboard.css">
</head>
<body>
    <table align="center" width="100%" height="420">
        <tr>
            <td >
                <table align='center'width="30%">
                    <tr>
                        <td>
                        <main>
                        <form method="post" action="../controllers/ForgetPassCheck.php" onsubmit="return Form()" enctype="">
                        <fieldset>
                        <center>
                        <legend align="center"><h3>Forget Password</h3></legend><hr>
                        Enter Your Email:
                        <br><input type="email"name="Email" id="email" value="" />
                        <span id="i" onmouseover="show()" onmouseout="out()"> i </span><br> <br><r>
                        Enter Your Username:
                        <br> <input type="text"name="UserName" id='UserName' value="" /> <br><br>
                        </hr>
                        <input type="submit"name="Submit"value="Submit"/>
                        </center>
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
