<?php
require_once('../models/modelAdmin.php');
require_once('../controllers/SessionCheck.php');

$UserName = $_SESSION['UserName'];
$FirstName = $_SESSION['FirstName'];
$LastName = $_SESSION['LastName'];
$usertype = "Artist";
$users = displayUserInformation($usertype);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
</head>
<body>

<header>

    <table width="100%">
        <tr>
            <td align="left" width="10%">
                <a href="../views/Admin_dashBoard.php">
                    <img src="../assets/logo.png" alt="company logo" width="200" height="50">
                </a>
            </td>
            <td align="left">
                <h2>&nbsp; &nbsp;Van Gogh digital art marketplace</h2>
            </td>
            <td align="right">
                <a href="../views/Show_AdminProfile.php"><b>Welcome Admin ,<?php echo $FirstName . ' ' . $LastName; ?></b></a> | &nbsp;
                <a href="../views/Admin_dashBoard.php">Home </a> | &nbsp;
                <a href="../views/About.php">About </a> |&nbsp;
                <a href=" # ">Contact</a> |&nbsp;
                <a href=" # ">FAQ</a> |&nbsp;
                <a href="../controllers/LogoutAdmin.php">Logout</a>
            </td>
        </tr>
    </table>
</header>
<hr>

<table width="100%" height="75%">
    <tr>
        <td>
            <main>

                <?php
                echo "<center><h3><u> Artist informatiom</u></h3></center><hr>";

                if (!empty($users)) {
                    echo "<table width='100%' >
                            <tr>
                                <th>Full Name</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Phone Number</th>
                                <th>Joining Date</th>
                                <th>Date of Birth</th>
                                <th>Profile Picture</th>
                                <th>Verification_Document</th>
                            <tr>
                                <td colspan='9'><hr></td>
                            </tr>;

                            </tr>";
                    foreach ($users as $user) {
                        echo "<tr>
                                <td align='center'><strong>" . $user["FirstName"] . " " . $user["LastName"] . "</strong></td>
                                <td align='center'><strong>" . $user["UserName"] . "</strong></td>
                                <td align='center'><strong>" . $user["Email"] . "</strong></td>
                                <td align='center'><strong>" . $user["Gender"] . "</strong></td>
                                <td align='center'><strong>" . $user["PhoneNumber"] . "</strong></td>
                                <td align='center'><strong>" . $user["JoiningDate"] . "</strong></td>
                                <td align='center'><strong>" . $user["DateofBirth"] . "</strong></td>
                                <td align='center'><strong><img src='" . $user["ProfilePicture"] . "' width='170' height='170'/></strong></td>
                                <td align='center'><strong><img src='" . $user["varification_doc"] . "' width='170' height='170'/></strong></td>
                            </tr>
                            <tr>
                                <td colspan='9'><hr></td>
                            </tr>";
                    }

                    echo "</table>";
                } else {
                    echo "No users found.";
                }

                ?>

            </main>

        </td>
    </tr>
</table>


<footer>
    <hr>

    <p align="center"> Copyright&copy; 2023</p>

</footer>

</body>
</html>
