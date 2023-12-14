<?php
require_once('../controllers/SessionCheck.php');
require_once('../controllers/CookieCheck.php');
?>

<?php
    $FirstName = $_SESSION['FirstName'];
    $LastName = $_SESSION['LastName'];
    $UserType = $_SESSION['UserType'];
    $UserName = $_SESSION['UserName'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../assets/js/Artist_dashBoard.js"></script>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>

<header>
    <table width="100%">
        <tr>
            <td align="left" width="10%">
                <a href="../views/Artist_dashboard.php">
                    <img src="../assets/logo.png" alt="company logo" width="200" height="50">
                </a>
            </td>
            <td align="left">
                <h2>&nbsp; &nbsp;Van Gogh digital art marketplace</h2>
            </td>
            <td align="right">
                <a href="../views/Show_<?php echo $UserType; ?>Profile.php">
                    <b>Welcome <?php echo $UserType; ?>, <?php echo $FirstName . ' ' . $LastName; ?></b>
                </a> | &nbsp;
                <a href="../views/<?php echo $UserType; ?>_dashboard.php">Home</a> | &nbsp;
                <a href="../views/About.php">About </a> |&nbsp;
                <a href="../controllers/Logout.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td align="right" colspan="3">
               <div id="Show_verification_message" style="display: none; color:#ffff"></div>
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
                        <li><button onclick="show1()">Artist Profile Verification</button></li><br>
                        <li><button onclick="show2()">Show Account Status </button></li> <br>
                        <li><button onclick="show3()">Change Password</button></li><br>
                        <li><button onclick="show5()">Need Support</button></li><br>
                        <li><button onclick="show4()">Logout</button></li>
                    </ul>
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
</html>
