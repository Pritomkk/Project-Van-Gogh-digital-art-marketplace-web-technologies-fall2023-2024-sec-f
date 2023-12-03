<?php
require_once('../Model/modelAdmin.php');
require_once('../Controller/SessionCheck.php');

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
    <script src="../javascript/suspandUser.js"></script>
</head>
<body>
    
        <header>
           
                <table width="100%">
                    <tr >
                        <td align="left"width="10%" >
                             <a href="../View/Admin_dashBoard.php">
                             <img src="../Asset/logo.png"alt="company logo" width="200" height="50"> 
                            </a>
                        </td>
                        <td align="left">
                        <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                        </td>
                        <td align="right">
                            <a href="../View/Show_AdminProfile.php"><b>Welcome Admin ,<?php echo $FirstName . ' ' . $LastName; ?></b></a>  | &nbsp;
                            <a href="../View/Admin_dashBoard.php">Home </a>  | &nbsp;
                            <a href=" ../View/About.php ">About </a>  |&nbsp;
                            <a href=" # ">Contact</a>  |&nbsp;
                            <a href=" # ">FAQ</a>  |&nbsp;
                            <a href="../Controller/LogoutAdmin.php">Logout</a> 
                        </td>
                
                    </tr>
                </table>
        </header> 
        <hr>

        <main>
        <table width="100%" height="75%">
        <tr>
            <td >
                <h2>Search suspend Users</h2>
                <input type="text" id="violationSearch" oninput="searchUsers()">
                
                <div id="searchResults"></div>
            </td>
        

        
            <td>
                <h2>If you want to Suspend User Click Here</h2>
                <button onclick="show()">Suspend User </button>
                <div id="suspend"> </div>
                <div id="suspendclick"> </div>
                <div id="showmsg"> </div>
                
            </td>

           
        </tr>



    </table>

        
        </table>



    </main>

       



   <footer>
                <hr>

                <p align="center"> Copyright&copy;  2023</p>


        </footer>
    </body>


  

      
</body>
</html>



