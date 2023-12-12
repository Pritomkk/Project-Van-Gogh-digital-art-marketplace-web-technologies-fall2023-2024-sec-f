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
    <link rel="stylesheet" href="../CSS/dashboard.css">
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
                    <a href="../controllers/LogoutAdmin.php">Logout</a>
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

                    <button onclick="show9()">Active User</button>
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

                    <button onclick="show6()">Search user docment</button>
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

                        <button onclick="show8()">Logout</button>
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
        showmanage.innerHTML = '<li><a href="../views/AllUser_information.php">User Information</a></li><br>' +
            '<li><a href="../views/Delete_Userinfo.php">Delete User Information</a></li><br>' +
            '<li><a href="../views/AllArtist_information.php">Artist Information</a></li><br>' +
            '<li><a href="../views/Delete_Artistinfo.php">Delete Artist Information</a></li><br>';
            
            

        showmanage.style.display = "block";
    } else {
        showmanage.style.display = "none";
    }
}

function show2() {

    window.location.href="../views/Suspend_User.php";
     
}

function show3() {

    window.location.href="../views/Artist_verification_approval.php";
     
}
function show4() {
    window.location.href="../views/User_verification_approval.php";
}

function show5(){
    let Communication = document.getElementById('Communication');

    if (Communication.style.display === "none" || Communication.style.display === "") 
    {
        Communication.innerHTML = '<li><a href="../views/Support_System.php">Support System</a></li><br>';
                                  

        Communication.style.display = "block";
    } else {
        Communication.style.display = "none";
    }
}

function show6() {

window.location.href="../views/Search_doc.php"
 
}


function show7() {

    window.location.href="../views/ChangePassAdmin.php"
     
}

function show8() {

window.location.href="../controllers/LogoutAdmin.php";
 
}

function show9() {

window.location.href="../views/Active_User.php";
 
}


</script>
