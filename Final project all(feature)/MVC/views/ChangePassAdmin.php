<?php
require_once('../controllers/SessionCheck.php');
//require_once('../controllers/CookieCheck.php');
?>
<?php
    $FirstName=$_SESSION['FirstName'];
    $LastName=$_SESSION['LastName'];
    $UserType=$_SESSION['UserType'];
?>


<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../assets/changePassword.js" defer></script>
    <style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color:rgb(83, 65, 241);
            color: white;
            padding: 10px;
        }

        header h2 {
            margin: 0;
            color: #fff;
        }
         a {
            margin: 0;
            color: #fff;
        }


        main {
            padding: 20px;
        }

        form {
            width: 100%;
        }

        fieldset {
            border: 2px solid #333;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 30px;
            font-size: large;
        }
    </style>
</head>
<body>

<header>
           
           <table width="100%">
               <tr >
                   <td align="left"width="10%" >
                        <a href="../views/Admin_dashBoard.php">
                        <img src="../assets/logo.png" alt="company logo" width="200" height="50"> 
                       </a>
                   </td>
                   <td align="left">
                   <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                   </td>
                   <td align="right">
                       <a href="../views/Show_<?php echo $UserType; ?>Profile.php">
                       <b>Welcome <?php echo $UserType; ?>, <?php echo $FirstName . ' ' . $LastName; ?></b>
                       </a> | &nbsp;
                       <a href="../views/<?php echo $UserType; ?>_dashboard.php">Home</a> | &nbsp;
                       <a href="../views/About.php">About </a>  |&nbsp;
                       <a href="../controllers/LogoutAdmin.php">Logout</a> 
                   </td>
           
               </tr>
           </table>
   </header> 
   <hr>
<main>
<table align="center" width="100%" height="420">
    <tr>
        <td>
            <table align='center' width="30%">
                <tr>
                    <td>
                        <main>
                        <center><h2>ChangeAdminPassword</h2></center>
                            <form action="../controllers/ChangepassAdminCheck.php" method="post"  onsubmit="return Form()"  enctype="">
                            <fieldset>
                                    <legend align="center"><h1>VAN GOGH</h1></legend>
                                    Current Password:
                                    <input type="password" name="CurrentPass" id="CurrentPassword" value="" /> <br><br>
                                    New Password:
                                    <input type="password" name="NewPassword" id="NewPassword" value="" /> <br><br>
                                    Retype New Password:
                                    <input type="password" name="RenewPassword" id="Repassword" value="" /> <br><br>
                                    </hr>
                                    <input type="submit" name="Submit" value="Submit" />
                                </fieldset>
                            </form>
                        </main>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</main>

    <footer>
                <hr>

                <p align="center"> Copyright&copy;  2023</p>


    </footer>
      
</body>
</html>
