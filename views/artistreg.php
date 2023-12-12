<?php
require_once('../models/model_emailCheck.php');
?>

<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="../CSS/regtration.css">
</head>
<body>
<header>
           
           <table width="100%">
               <tr >
                   <td align="left"width="10%" >
                        <a href="../views/artistreg.php">
                        <img src="../assets/logo.png"alt="company logo" width="200" height="50"> 
                       </a>
                   </td>
                   <td align="left">
                   <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                   </td>
                   <td align="right">
                       <a href="../views/public_home.html">Home </a>  | &nbsp;
                       <a href="../views/Login.php">Login</a>  |&nbsp;
                   </td>
           
               </tr>
           </table>
   </header> 

<div id="background">
    
<h3>Artist Registration</h3>
    <div class="container">
        <div  id="form-container">
        <form method="post" action="../controllers/uaregcheck.php" enctype="multipart/form-data" name="Reg" onsubmit="return Form()">    
                    <input type="hidden" id="userRole" class="input_box" name="userRole" value="Artist">
                    <input type="hidden" id="Status" name="Status" value="Active">
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

                    <input type="checkbox" id="terms" name="terms" /> I accept the <a href="../views/Terms&ConditionArtist.html">Terms and Conditions</a><br><br>

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
    xhr.open("GET", "../controllers/emailCheckUser_Artist.php?email_=" + email_input, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("emailAvailability").innerHTML = xhr.responseText;
        }
    };

    xhr.send();
}

function validName(name) {
    
    if (name === "") {
        alert('Name is required!');
        return false;
    }
    if (name.split(' ').length >2) {
        alert("Name must contain at least two words");
        return false;
    }
 
    for (let i = 0; i < name.split(' ').length; i++) 
    {
        let char = name[i];
        if (!(char >= 'a' && char <= 'z') && !(char >= 'A' && char <= 'Z')) {
            alert("Invalid Name");
            return false;
        }
    }
    return true;
}

function validatePassword(password) {
    if (password === "") {
        alert('Fill the password Properly');
        return false;
    }


    if (password.length<=8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }

    let specialCharacters = ['@', '#', '$', '%'];
    let containsSpecialChar = false;

    for (let char of specialCharacters) {
        if (password.includes(char)) {
            containsSpecialChar = true;
            break;
        }
    }

    if (!containsSpecialChar) {
        alert("Password must contain at least one of the special characters (@, #, $, %).");
        return false;
    }

    return true;
}


function confirmpass(pass, cpass) {
    if (cpass === "") {
        alert("Confirm Password required");
        return false;
    } else if (pass !== cpass) {
        alert("Confirm password doesn't match ");
        return false;
    }

    return true;
}

function email(email) {
    if (email === "") {
        alert('Please provide your valid email');
        return false;
    }

    return true;
}

function validateDate(dateInput) {
    if (!dateInput) {
        alert("Date cannot be empty");
        return false;
    }

    let dateObject = new Date(dateInput);
    let day = dateObject.getDate();
    let month = dateObject.getMonth() + 1;
    let year = dateObject.getFullYear();

    if (day < 1 || day > 31 || month < 1 || month > 12 || year < 1900 || year > 2023) {
        alert("Invalid date format or out of range.");
        return false;
    }

    return true;
}

function joingdob(dateInput) 
{
    if (!dateInput) {
        alert("Date cannot be empty");
        return false;
    }

    if (!dateInput) {
        alert("Please Select Today Date");
        return false;
    }

    return true;
}

function Phone(phone) {
    
   
    if (phone.trim() === "") {
        alert("Phone number is required");
        return false;
    } else if (phone.length !== 11 || isNaN(phone)) {
        alert("Phone number must be 11 digits");
        return false;
    }

    return true;
}

function validimage(image) {

    if (!image) {
        alert("Please Provide image");
        return false;
    }


    if (image && image.size > 4000000) 
    {
        alert("Image Size Is Too Large");
        return false;
    }

    return true;
}

function validateUserName(name) {
    if (name.trim() === "") {
        alert("User name can't be empty");
        return false;
    }

    if (name.split(' ').length>2) {
        alert("User Name must contain at least two words");
        return false;
    }

    let firstChar = name[0];
    if (!(firstChar >= 'A' && firstChar <= 'Z') && !(firstChar >= 'a' && firstChar <= 'z')) {
        alert("UserName must start with a letter");
        return false;
    }

    for (let i = 0; i < name.length; i++) {
        let char = name[i];
        if (!((char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z') || char === '.' || char === '_')) {
            alert("Invalid character in the Username contain alpha period nad dash");
            return false;
        }
    }

    return true;
}

function validateGender(genderInputs) {
    let selectedGender = false;

    for (let i = 0; i < genderInputs.length; i++) {
        if (genderInputs[i].checked) {
            selectedGender = true;
            break;
        }
    }

    if (!selectedGender) {
        alert("Please select a gender");
        return false;
    }
    return true;
}

function show() 
{
    let emailInput = document.getElementById("i");
    emailInput.innerHTML = "anything@example.com";
}

function out() {
    let emailInput = document.getElementById("i");
    emailInput.innerHTML = "i";
}




function Form() {
    let firstName = document.getElementById('firstName').value;
    let lastName = document.getElementById('lastName').value;
    let userName = document.getElementById('userName').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;
    let emailInput = document.getElementById('email').value;
    let genderInputs = document.getElementsByName('Gender');
    let dob = document.getElementById('dob').value;
    let joiningDob = document.getElementById('joiningDob').value;
    let phone = document.getElementById('phone').value;

    let image = document.getElementById('image').files[0];

    if (!validName(firstName) ||
         !validName(lastName) ||
        !email(emailInput) ||
        !validateUserName(userName) ||
        !validatePassword(password) ||
        !confirmpass(password, confirmPassword) ||
        !validateDate(dob) ||
        !validateGender(genderInputs)||
        !Phone(phone) ||
        !joingdob(joiningDob) ||
        !validimage(image) 
       
    ) 
    {
        return false;
    }

    return true;
}


</script>




<footer>
    <hr>
    <p align="center"> Copyright&copy; 2023</p>
</footer>
    
    
</body>
</html>
