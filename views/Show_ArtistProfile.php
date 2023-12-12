<?php
require_once('../models/model.php');
require_once('../controllers/SessionCheck.php');

$UserName = $_SESSION['UserName'];
$FirstName = $_SESSION['FirstName'];
$LastName = $_SESSION['LastName'];
$UserType = $_SESSION['UserType'];
$show = displayUserData($UserName);
$image = $show['ProfilePicture'];
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
</head>
<body>
    <body>

        <header>
           
                <table width="100%">
                    <tr >
                        <td align="left"width="10%" >
                             <a href="../views/Artist_dashboard.php">
                             <img src="../assets/logo.png" alt="company logo" width="200" height="50"> 
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
                            <a href=" # ">Contact</a>  |&nbsp;
                            <a href=" # ">FAQ</a>  |&nbsp;
                            <a href="../controllers/Logout.php">Logout</a> 
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
                      
                      if ($show) {
                          echo "<center><h3><u>Admin Information</u></h3></center><hr>";
                      
                          echo "<table>";
                          
                          echo "<tr>";
                          echo "<td width='100%'>";
                          echo "<h3>User Name: " . $show["UserName"] . "</h3><hr>"
                              . "<h3>Full Name: " . $show["FirstName"] . " " . $show["LastName"] . "</h3><hr>";
                          echo "</td>";
                          
                          echo "<td>";
                          echo "<img src='" . $image . "' width='170' height='170'/> <hr>";
                          echo "</td>";
                          echo "</tr>";
                          echo "<td colspan='2'width='100%'>";
                          echo "<h3>E-mail: " . $show["Email"] . "</h3><hr>"
                              . "<h3>Joining Date: " . $show["JoiningDate"] . "</h3><hr>"
                              . "<h3>Gender: " . $show["Gender"] . "</h3><hr>"
                              . "<h3>Phone Number: " . $show["PhoneNumber"] . "</h3><hr>"
                              . "<h3>Date of Birth: " . $show["DateofBirth"] . "</h3>";
                          echo "</td>";
                          
                          echo "</tr>";
                      
                          echo "</table>";
                      } else {
                          echo "User not found.";
                      }
                                             
                      ?>;
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
