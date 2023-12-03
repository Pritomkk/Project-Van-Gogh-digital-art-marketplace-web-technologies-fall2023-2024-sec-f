<?php
require_once('../Controller/SessionCheck.php');
require_once('../Controller/CookieCheck.php');
?>

<?php
    $FirstName=$_SESSION['FirstName'];
    $LastName=$_SESSION['LastName'];
    $UserType=$_SESSION['UserType'];
    $UserName=$_SESSION['UserName'];
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../javascript/Artist_dashBoard.js"></script>
</head>
<body>
    <body>

        <header>
           
                <table width="100%">
                    <tr >
                        <td align="left"width="10%" >
                             <a href="../View/Artist_dashboard.php">
                             <img src="../Asset/logo.png"alt="company logo" width="200" height="50"> 
                            </a>
                        </td>
                        <td align="left">
                        <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                        </td>
                        
                        <td align="right">
                            <a href="../View/Show_<?php echo $UserType; ?>Profile.php">
                            <b>Welcome <?php echo $UserType; ?>, <?php echo $FirstName . ' ' . $LastName; ?></b>
                            </a> | &nbsp;
                            <a href="../View/<?php echo $UserType; ?>_dashboard.php">Home</a> | &nbsp;
                            <a href="../View/About.php">About </a>  |&nbsp;
                            <a href="../Controller/Logout.php">Logout</a> 
                            
                        </td>
                
                    </tr>
                    <tr>
                    <td align="right" colspan="3">
                    <button onclick="show2()">Show Account Status </button><div id="Show_verification_message" style="display: none;"></div>
                    
                    </td>
                    </tr>

                </table>
        </header> 
        <hr>

        <table width="100%" height="75%">
            <tr>
                <td>
                <div id="Show_verification_message"></div>
                                    
                </td>

            </tr>
            <tr>
                <td>
                <main>
                   
                   <ul type="square">

                               <li> <h2>Artist Menu<h2> </li>
                                   <ul type="square"> 

                                    <li><button onclick="show1()">Artist Profile Varification</li><br>
                                    
                                    <li><button onclick="show3()">ChangePassword</li><br>
                                    <li><button onclick="show5()">Need Support</li><br>
                                    <li><button onclick="show4()">Logout</li>                                                   
                                       
                               

                               
                                   <ul>
                                   
                               </li> 
                       </ul>
               </main>
                    
                </td>
            </tr>
        </table>
               

        <footer>
                <hr>

                <p align="center"> Copyright&copy;  2023</p>


        </footer>
    </body>
      
</body>
</html>