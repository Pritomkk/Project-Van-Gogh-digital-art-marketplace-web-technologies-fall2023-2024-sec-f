<?php
require_once('../controllers/SessionCheck.php');
require_once('../controllers/CookieCheck.php');
?>

<?php
    $FirstName=$_SESSION['FirstName'];
    $LastName=$_SESSION['LastName'];
    $UserType=$_SESSION['UserType'];
    $UserName=$_SESSION['UserName'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../assets/js/Support_System.js"></script>
    <script src="../assets/js/Artist_dashBoard.js"></script>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    
</head>
<body>
    <body>

        <header>
           
                <table width="100%">
                    <tr >
                        <td align="left"width="10%" >
                             <a href="../views/Artist_dashboard.php">
                             <img src="../assets/logo.png"alt="company logo" width="200" height="50"> 
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
                            <a href="../controllers/Logout.php">Logout</a> 
                            
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
        
        <center><h1>Do you Need Support Send Message Admin</h1></center>

        <table width="100%" height="75%">
            <tr>
                <td>
                <div id="Show_verification_message"></div>
                                    
                </td>

            </tr>
            <tr>
                <td>
                <main>
                    <div id="MessagedeliverNotice"></div>
                    <h2>Admin Response: </h2>
                    <hr>
                    <div id="Show_Admin_Massege"></div>
                    <hr>
        
                    <form id="messageForm">
                    <h3>Send Message Admin<h3> 
                    <textarea id="message" name="message" required></textarea> <br><br>
                    <button type="button" onclick="sendMessageAdmin()">Send Message</button><br><br>
                    </form>
                  
               </main>
                    
                </td>
            </tr>
        </table>
               

        <footer>
                <hr>

                <p align="center"> Copyright&copy;  2023</p>


        </footer>
    </body>

    <script>
             document.addEventListener("DOMContentLoaded", function () {
                Show_Admin_Massege('<?php echo $UserName; ?>');
                    });

                    function Show_Admin_Massege(UserName) {
                        let encodedUserName = encodeURIComponent(UserName);
                        let messageContainer = document.getElementById('Show_Admin_Massege');
                        let xhr = new XMLHttpRequest();
                        xhr.open('GET', '../controllers/load_Admin_Message.php?UserName=' + encodedUserName, true);

                        xhr.onreadystatechange = function () {
                            if (xhr.readyState == 4 && xhr.status == 200) {
                                messageContainer.innerHTML = xhr.responseText;
                            }
                        };

                        xhr.send();
                    }
</script>

      
</body>
</html>
