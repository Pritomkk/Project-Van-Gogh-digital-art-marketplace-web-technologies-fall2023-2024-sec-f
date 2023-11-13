<?php
include_once('Header.Html');
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
                        <form method="post" action="../controller/ForgetPassCheck.php" enctype="">
                        <fieldset>
                        <center>
                        <legend align="center"><h3>Forget Password</h3></legend><hr>
                        Enter Your Email:
                        <br><input type="email"name="Email" value="" /> <br><br>
                        Enter Your UserName:
                        <br><input type="text"name="UserName" value="" /> <br><br>
                        </hr>
                        <input type="submit"name="Submit"value="Submit"/>
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

include_once('Footer.Html');

?>