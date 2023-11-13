<?php
session_start(); 

include_once('../View/Header.html');
require_once('../Model/model.php');


$Np = $Rp = "";
$NewPassword = $RePassword = "";
if (isset($_SESSION['Email']) && isset($_SESSION['UserName'])) {
    $email = $_SESSION['Email'];
    $UserName = $_SESSION['UserName'];
}

if (isset($_POST['Submit'])) {
    if (empty($_POST["NewPassword"])) {
        $Np = "Password is required";
    } else {
        $NewPassword = $_POST["NewPassword"];
        if (strlen($NewPassword) >= 8) {
            $specialCharacters = ['@', '#', '$', '%'];
            $containsSpecialChar = false;

            foreach ($specialCharacters as $char) {
                if (strpos($NewPassword, $char) !== false) {
                    $containsSpecialChar = true;
                    break;
                }
            }

            if ($containsSpecialChar) {
                $Np = "Password meets the requirements.";
            } else {
                $Np = "Password must contain at least one of the special characters (@, #, $, %).";
            }
        } else {
            $Np = "Password must be at least 8 characters long.";
        }
    }

    if (empty($_POST["RePassword"])) {
        $Rp = "Retype Password is required";
    } else {
        $RePassword = $_POST["RePassword"];

        if ($RePassword !== $NewPassword) {
            $Rp = "Retype Password must match New Password";
        }
    }

    if (!empty($NewPassword) && !empty($RePassword) && $RePassword === $NewPassword) {
        if (updatepassword($email, $UserName, $NewPassword)) {
            echo "Successfully Reset your Password";
            exit();
        } else {
            echo "<center>Failed.</center>";
        }
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" width="100%" height="420">
        <tr>
            <td>
                <table align='center' width="30%">
                    <tr>
                        <td>
                            <main>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <legend align="center"><h1>Reset Password</h1></legend>

                                        New Password:
                                        <input type="password" name="NewPassword" value="<?php echo $NewPassword; ?>" /><br><br>
                                        <b><?php echo $Np; ?> </b><hr>

                                        Retype New Password:
                                        <input type="password" name="RePassword" value="<?php echo $RePassword; ?>" /><br><br>
                                        <b><?php echo $Rp; ?> </b><hr>
                                        <input type="submit" name="Submit" value="Submit"/>
                                    </fieldset>
                                </form>
                            </main>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>

<?php
include_once('../View/Footer.html');
?>
