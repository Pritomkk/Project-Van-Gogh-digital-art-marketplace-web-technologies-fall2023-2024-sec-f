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
                    <a href="../Controller/LogoutAdmin.php">Logout</a>
                </td>
            </tr>
        </table>
    </header>
    <hr>
    <main>
       <center> <h1>Admin Control Panel</h1></center><hr>
        <table width="100%" height="60%">
            <tr>
                <td>
                    <ul>
                        <li><button onclick="show()">Manage Accounts</button></li> <br>
                        <ul>
                            
                            <div id="manage" style="display: none;"></div>
                                                      
                        </ul>
                    </ul>

                    <ul>

                        <li>
                        
                        <button onclick="show2()">Suspend User</button>
                        </li> <br>
                                           
                    </ul>


                    <ul>

                        <li>
                        
                        <button onclick="show3()">Artist Verification Approval</button>
                        </li> <br>
                                           
                    </ul>


                    <ul>

                        <li>

                        <button onclick="show4()">User Verification Approval</button>
                        </li> <br>
                                        
                        </ul>



                </td>

                <td>
                <ul>
                        <li><button onclick="show5()">Communication and Support</button></li><br>
                    <ul>
                        <div id="Communication" style="display: none;"></div>
                           
                    </ul>
                </ul>

                <ul>

                    <li>

                    <button onclick="show6()">Show Feedback</button>
                    </li> <br>
                                    
                    </ul>

                </ul>

                <ul>

                        <li>

                        <button onclick="show7()">ChangeAdminPassword</button>
                        </li> <br>
                                        
                </ul>


                <ul>

                        <li>

                        <button onclick="show7()">Logout</button>
                        </li> <br>
                                        
                        </ul>

                </td>
            </tr>
        </table>
    </main>

    <footer>
        <hr>
        <p align="center">Copyright&copy; 2023</p>
    </footer>


    

</body>
</html>


<script>

function show() {
    let showmanage = document.getElementById('manage');

    if (showmanage.style.display === "none" || showmanage.style.display === "") {
        showmanage.innerHTML = '<li><a href="../View/AllUser_information.php">User Information</a></li><br>' +
            '<li><a href="../View/Delete_Userinfo.php">Delete User Information</a></li><br>' +
            '<li><a href="../View/AllArtist_information.php">Artist Information</a></li><br>' +
            '<li><a href="../View/Delete_Artistinfo.php">Delete Artist Information</a></li><br>';
            
            

        showmanage.style.display = "block";
    } else {
        showmanage.style.display = "none";
    }
}

function show2() {

    window.location.href="../View/Suspend_User.php";
     
}

function show3() {

    window.location.href="../View/Artist_verification_approval.php";
     
}
function show4() {
    window.location.href="../View/User_verification_approval.php";
}

function show5(){
    let Communication = document.getElementById('Communication');

    if (Communication.style.display === "none" || Communication.style.display === "") 
    {
        Communication.innerHTML = '<li><a href="../View/Support_System.php">Support System</a></li><br>';
                                  

        Communication.style.display = "block";
    } else {
        Communication.style.display = "none";
    }
}



function show7() {

    window.location.href="../View/ChangePassAdmin.php"
     
}

function show8() {

window.location.href="../Controller/LogoutAdmin.php";
 
}


</script>