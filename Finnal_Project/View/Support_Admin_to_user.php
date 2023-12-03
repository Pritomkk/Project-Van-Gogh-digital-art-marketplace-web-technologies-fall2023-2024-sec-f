<?php
require_once('../Controller/SessionCheck.php');
require_once('../Controller/CookieCheck.php');
?>

<?php
$FirstName = $_SESSION['FirstName'];
$LastName = $_SESSION['LastName'];
$UserType = $_SESSION['UserType'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../javascript/Support_System.js"></script>
</head>
<body>

    <header>
        <table width="100%">
            <tr>
                <td align="left" width="10%">
                    <a href="../View/<?php echo $UserType; ?>_dashboard.php">
                        <img src="../Asset/logo.png" alt="company logo" width="200" height="50">
                    </a>
                </td>
                <td align="left">
                    <h2>&nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                </td>
                <td align="right">
                    <a href="../View/Show_<?php echo $UserType; ?>Profile.php">
                        <b>Welcome <?php echo $UserType; ?>, <?php echo $FirstName . ' ' . $LastName; ?></b>
                    </a> | &nbsp;
                    <a href="../View/<?php echo $UserType; ?>_dashboard.php">Home</a> | &nbsp;
                    <a href="../View/About.php">About</a> | &nbsp;
                    <a href="#">Contact</a> | &nbsp;
                    <a href="#">FAQ</a> | &nbsp;
                    <a href="../View/ChangePassAdmin.php">ChangeAdminPassword</a>&nbsp;
                    <a href="../Controller/LogoutAdmin.php">Logout</a>
                </td>
            </tr>
        </table>
    </header>
    <hr>
    <main>
    <center><h1>Admin-User Support</h1> </center>
    <hr>
    <?php
             if (isset($_GET['Userindentity'])) 
             {
            $Userindentity = $_GET['Userindentity'];
            }
            ?>
    <center>
    <table width="100%" height="60%">
        <tr>

            <td>
                <h4> Chat With <?php echo $Userindentity; ?></h4><br>
                <div id="Show_User_Message"></div>
                <form >
                <textarea id="message" name="message" required></textarea>
                <button type="button" onclick="sendMessageUser('<?php echo $Userindentity; ?>')">Send Message</button>
            </form>
           
            
            </td>

           
        </tr>

        <tr>
            <td>
            <div id="MessagedeleivryNotice"><div>
            
            </td>

        </tr>


</table>
    </main>

    <footer>
        <hr>
        <p align="center">Copyright&copy; 2023</p>
    </footer>

<script>
             document.addEventListener("DOMContentLoaded", function () {
                        Show_User_Message('<?php echo $Userindentity; ?>');
                    });

                    function Show_User_Message(UserName) {
                        let encodedUserName = encodeURIComponent(UserName);
                        let messageContainer = document.getElementById('Show_User_Message');
                        let xhr = new XMLHttpRequest();
                        xhr.open('GET', '../Controller/load_User_Message.php?UserName=' + encodedUserName, true);

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
