<?php
require_once('../Controller/SessionCheck.php');
require_once('../Controller/CookieCheck.php');
?>
<?php
    $FirstName=$_SESSION['FirstName'];
    $LastName=$_SESSION['LastName'];
    $UserType=$_SESSION['UserType'];
    $Email=$_SESSION['Email'];
    $UserName=$_SESSION['UserName'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../javascript/Varification_User.js"></script>
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
                    <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                </td>
                <td align="right">
                    <a href="../View/Show_<?php echo $UserType; ?>Profile.php">
                        <b>Welcome <?php echo $UserType; ?>, <?php echo $FirstName . ' ' . $LastName; ?></b>
                    </a> | &nbsp;
                    <a href="../View/<?php echo $UserType; ?>_dashboard.php">Home</a> | &nbsp;
                    <a href="../View/About.php">About </a> |&nbsp;
                    <a href="../View/ChangePassAdmin.php">ChangeAdminPassword</a>&nbsp;
                    <a href="../Controller/LogoutAdmin.php">Logout</a>
                </td>
            </tr>
        </table>
    </header>
    <hr>
    <main>
        <table width="100%" height="75%">
            <tr>
                <td>
              
                    <form id="artistForm" enctype="multipart/form-data" method="post">
                        <fieldset>
                            <legend><h2>User Verification</h2></legend>

                            UserName:
                            <input type="text" id="UserName" name="UserName" value="<?php echo $UserName; ?>"> <br> <br>

                            Upload_Document:
                            <input type="file" id="image" name="image" /> <br><br>
                           
                            <button type="button" name="Submit" onclick="varification_User()">Submit</button>

                            <div id="Showmsg"><div>
                        </fieldset>
                    </form>
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
