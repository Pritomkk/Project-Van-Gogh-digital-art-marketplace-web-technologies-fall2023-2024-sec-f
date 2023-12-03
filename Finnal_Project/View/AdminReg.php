<?php
require_once('../Model/modelAdmin.php');    
?>

<html>
<head>
    <title>Registration</title>
    <script src="../javascript/AdminReg.js" defer></script>
</head>
<body>
<header>
           
           <table width="100%">
               <tr >
                   <td align="left"width="10%" >
                        <a href="../View/artist_dashboard.php">
                        <img src="../Asset/logo.png"alt="company logo" width="200" height="50"> 
                       </a>
                   </td>
                   <td align="left">
                   <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                   </td>
                   <td align="right">
                       <a href="../View/public_home.html">Home </a>  | &nbsp;
                       <a href="../View/Login_Admin.php">Login</a>  |&nbsp;
                   </td>
           
               </tr>
           </table>
   </header> 
   <hr>
   <table width="100%" height="550" align="center">
        <tr>
            <td>
                <table align="center" width="50%">
                    <tr>
                        <td>
                            <main>
                                <form method="post" action="../Controller/AdminRegCheck.php" enctype="multipart/form-data" name="Reg" onsubmit="return Form()">
                                    <fieldset>
                                        <legend><h2>Admin Registration</h2></legend>

                                        <input type="hidden" id="userRole" name="userRole" value="Admin">


                                        First Name:
                                        <input type="text" id="firstName" name="FirstName" placeholder="Enter your first name" /><br><br>
                                        <b id="firstNameError"></b><hr>

                                        Last Name:
                                        <input type="text" id="lastName" name="LastName" placeholder="Enter your last name" /><br><br>
                                        <b id="lastNameError"></b><hr>

                                        E-mail:
                                        <input type="text" id="email" name="Email" placeholder="Enter your email" />
                                        <span id="i" onmouseover="show()" onmouseout="out()"> i </span><br><hr>

                                        User Name:
                                        <input type="text" id="userName" name="UserName" placeholder="Enter your username" /><br><br>
                                        <b id="userNameError"></b><hr>

                                        Password:
                                        <input type="password" id="password" name="Password" placeholder="Enter your password" /><br><br>
                                        <b id="passwordError"></b><hr>

                                        Confirm Password:
                                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" /><br><br>
                                        <b id="confirmPasswordError"></b><hr>

                                        Date of Birth:
                                        <input type="date" id="dob" name="Dob" placeholder="Select your date of birth"><br><br>
                                        <b id="dobError"></b><hr>

                                        Gender:
                                        <input type="radio" id="male" name="Gender" value="male">
                                        Male
                                        <input type="radio" id="female" name="Gender" value="female">
                                        Female
                                        <input type="radio" id="other" name="Gender" value="other">
                                        Other <br><br>
                                        <b id="genderError"></b><hr>

                                        PhoneNumber:
                                        <input type="text" id="phone" name="Phone" placeholder="Enter your phone number" /><br><br>
                                        <b id="phoneError"></b><hr>

                                        Joining Date:
                                        <input type="date" id="joiningDob" name="JoiningDob" placeholder="Select your joining date"><br><br>
                                        <b id="joiningDobError"></b><hr>

                                        Upload Profile Picture:
                                        <input type="file" id="image" name="image" /> <br>
                                        <b id="imageError"></b><hr>

    
                                        <input type="submit" id="submitBtn" name="Submit" value="Submit"/>
                                    </fieldset>
                                </form>
                            </main>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


    <footer>
        <hr>

        <p align="center"> Copyright&copy;  2023</p>
        
        
    </p>
    


</footer>
    
</body>
</html>

