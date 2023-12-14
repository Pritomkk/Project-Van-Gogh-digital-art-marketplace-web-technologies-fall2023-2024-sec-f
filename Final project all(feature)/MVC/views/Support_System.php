<?php
require_once('../controllers/SessionCheck.php');
require_once('../controllers/CookieCheck.php');
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
    <script src="../assets/js/Support_System.js"></script>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>

    <header>
        <table width="100%">
            <tr>
                <td align="left" width="10%">
                    <a href="../views/<?php echo $UserType; ?>_dashboard.php">
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
                    <a href="../views/About.php">About</a> | &nbsp;
                    <a href="../views/ChangePassAdmin.php">ChangeAdminPassword</a>&nbsp;
                    <a href="../controllers/LogoutAdmin.php">Logout</a>
                </td>
            </tr>
        </table>
    </header>
    <hr>
    <main>
       <center> <h1>Admin Support</h1></center><hr>
       <div id="messageContainer"></div>
    </main>

    <footer>
        <hr>
        <p align="center">Copyright&copy; 2023</p>
    </footer>


    

</body>
</html>
