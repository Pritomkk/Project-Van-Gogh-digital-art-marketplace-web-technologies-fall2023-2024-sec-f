<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../assets/js/forgetpass.js" defer></script>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>
<header>
           
           <table width="100%">
               <tr >
                   <td align="left"width="10%" >
                        <a href="../views/artist_dashboard.php">
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
    <table align="center" width="100%" height="420">
        <tr>
            <td >
                <table align='center'width="30%">
                    <tr>
                        <td>
                        <main>
                        <form method="post" action="../controllers/forgetpassadmincheck.php" onsubmit="return Form()" enctype="">
                        <fieldset>
                        <center>
                        <legend align="center"><h3>Admin Forget Password</h3></legend><hr>
                        Enter Your Email:
                        <br><input type="email"name="Email" id="email" value="" />
                        <span id="i" onmouseover="show()" onmouseout="out()"> i </span><br> <br><r>
                        Enter Your Username:
                        <br> <input type="text"name="UserName" id='UserName' value="" /> <br><br>
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

include_once('../views/Footer.html');

?>
