<?php
require_once('../models/modelAdmin.php');
require_once('../controllers/SessionCheck.php');

$UserName=$_SESSION['UserName'];
$FirstName=$_SESSION['FirstName'];
$LastName=$_SESSION['LastName'];
$usertype = "User"; 
$users = displayUserInformation($usertype);

?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../javascript/activeUser.js"></script>
    <link rel="stylesheet" href="../CSS/dashboard.css">
        
</head>
<body>
    
        <header>
           
                <table width="100%">
                    <tr >
                        <td align="left"width="10%" >
                             <a href="../views/Admin_dashBoard.php">
                             <img src="../assets/logo.png"alt="company logo" width="200" height="50"> 
                            </a>
                        </td>
                        <td align="left">
                        <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                        </td>
                        <td align="right">
                            <a href="../views/Show_AdminProfile.php"><b>Welcome Admin ,<?php echo $FirstName . ' ' . $LastName; ?></b></a>  | &nbsp;
                            <a href="../views/Admin_dashBoard.php">Home </a>  | &nbsp;
                            <a href="../views/About.php ">About </a>  |&nbsp;
                            <a href=" # ">Contact</a>  |&nbsp;
                            <a href=" # ">FAQ</a>  |&nbsp;
                            <a href="../controllers/LogoutAdmin.php">Logout</a> 
                        </td>
                
                    </tr>
                </table>
        </header> 
        <hr>
        <main>
        <table width="100%" height="75%">
        <tr>
            
            <td > 
                <h2>Active User Profile</h2>
                <button class="button" onclick="show()">Active User </button>
                <div id="Active"> </div>
                <div id="Activeclick"> </div>
                <div id="showmsg"> </div>
                
            </td>

           
        </tr>

    </table>

    </main>

  



   <footer>
                <hr>

                <p align="center"> Copyright&copy;  2023</p>


        </footer>
    </body>


  

      
</body>
</html>
