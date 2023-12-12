<?php
require_once('../models/modelAdmin.php');
?>

<html>
<head>
    <title>Registration</title>
    <script src="../javascript/AdminReg.js" defer></script>
     <link rel="stylesheet" href="../CSS/regtration.css">
</head>
<body>
<header>
           
           <table width="100%">
               <tr >
                   <td align="left"width="10%" >
                        <a href="../views/artist_dashboard.php">
                        <img src="../assets/logo.png"alt="company logo" width="200" height="50"> 
                       </a>
                   </td>
                   <td align="left">
                   <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                   </td>
                   <td align="right">
                       <a href="../views/public_home.html">Home </a>  | &nbsp;
                       <a href="../views/Login_Admin.php">Login</a>  |&nbsp;
                   </td>
           
               </tr>
           </table>
   </header> 

<div id="background">
    
<h3>Admin Registration</h3>
    <div class="container">
        <div  id="form-container">
        <form method="post" action="../controllers/AdminRegCheck.php" enctype="multipart/form-data" name="Reg" onsubmit="return Form()">    
                    <input type="hidden" id="userRole" class="input_box" name="userRole" value="Admin">
                    First Name:
                    <input type="text" id="firstName" class="input_box" name="FirstName" placeholder="Enter your first name" /><br><br>
                    <b id="firstNameError"></b>

                    Last Name:
                    <input type="text" id="lastName" class="input_box" name="LastName" placeholder="Enter your last name" /><br><br>
                    <b id="lastNameError"></b>

                    E-mail:
                    <input type="text" id="email" class="input_box" name="Email" onblur="checkEmailAvailability(this.value)" placeholder="Enter your email" >
                    <span id="i" onmouseover="show()" onmouseout="out()">i</span><br><br> <div id="emailAvailability"></div> 

                    User Name:
                    <input type="text" id="userName" class="input_box" name="UserName" placeholder="Enter your username" /><br><br>
                    <b id="userNameError"></b>

                    Password:
                    <input type="password" id="password" class="input_box" name="Password" placeholder="Enter your password" /><br><br>
                    <b id="passwordError"></b>

                    Confirm Password:
                    <input type="password" id="confirmPassword" class="input_box" name="confirmPassword" placeholder="Confirm your password" /><br><br>
                    <b id="confirmPasswordError"></b>

                    Date of Birth:
                    <input type="date" id="dob" class="input_box" name="Dob" placeholder="Select your date of birth"><br><br>
                    <b id="dobError"></b>

                    Gender:
                    <input type="radio" id="male" name="Gender" value="male">Male
                    <input type="radio" id="female" name="Gender" value="female">Female
                    <input type="radio" id="other" name="Gender" value="other">Other <br><br>
                    <b id="genderError"></b>

                    PhoneNumber:
                    <input type="text" id="phone" class="input_box" name="Phone" placeholder="Enter your phone number" /><br><br>
                    <b id="phoneError"></b>

                    Joining Date:
                    <input type="date" id="joiningDob" class="input_box" name="JoiningDob" placeholder="Select your joining date"><br><br>
                    <b id="joiningDobError"></b>

                    Upload Profile Picture:
                    <input type="file" id="image" name="image" /> <br><br>
                    <b id="imageError"></b>

                    <input type="submit" class="submit" id="submitBtn" name="Submit" value="Submit"/> 
          
                </form>
           
        </div>
    </div>
</div>

<script>
    function checkEmailAvailability(email) 
{
    let xhr = new XMLHttpRequest();
    let email_input = encodeURIComponent(email);
    xhr.open("GET", "../controllers/emailCheck_Admin.php?email_=" + email_input, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("emailAvailability").innerHTML = xhr.responseText;
        }
    };

    xhr.send();
}


</script>




<footer>
    <hr>
    <p align="center"> Copyright&copy; 2023</p>
</footer>
    
    
</body>
</html>
