<?php
require_once('../Controller/SessionCheck.php');
//require_once('../Controller/CookieCheck.php');
require_once("../Model/modelApproveArtist_User.php");
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
    <script src="../javascript/Artist_verification_ap.js"></script>
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

    <div id="ShowApprovalNotice"> 
</div>

    <button onclick="checkNotifications()">Show Approval Request </button>
   
    </main>


    <footer>
        <hr>
        <p align="center">Copyright&copy; 2023</p>
    </footer>


    

</body>
</html>

