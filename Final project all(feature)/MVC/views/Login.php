<?php
include_once('../views/Header.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/css/Login.css">
</head>
<body>

<div id="backround">
<div class="container">
        <div class="img">
            <img src="../assets/login.jpg" class="img">
        </div>
                <div class="Login">
                <h1>Welcome to Van Gogh</h1>
                <form method="post" action="../controllers/LoginCheck.php" onsubmit="return Form()">         
                    Email:
                    <input type="email" name="Email" class="input_box" id="email" value="" /><div id="emailresponse"> </div>
                    <span id="i" onmouseover="show()" onmouseout="out()"> i </span><br> <br>

                    Password:
                    <input type="password" name="Password" class="input_box" id="password" value="" /><div id="Pass_response"> </div> <br><br>

                    <a href="../views/ForgetPassword.php">Forgot Password?</a><br><br>

                    <input type="submit" id="submitBtn" class="Login_Btn" name="Submit" value="Login"/> <br>

                    <input type="checkbox" name="StayLogin" value=" ">Stay logged in<br>

                    <p><i>Don't have an account </i>
                        <a href="../views/from.php">Sign Up</a></p>
                </form>
            </div>

</div>
</div>

<script>

function validatePassword(password) {
    if (password === "") 
    {
        let password_r= document.getElementById('Pass_response');
        password_r.innerHTML="Fill the password Properly"
        return false;
    }

    return true;
}

function email(email) {
    if (email === "") {
        let email_r= document.getElementById('emailresponse');
        email_r.innerHTML="Please provide your valid email";
        return false;
    }

    return true;
}

function show() 
{
    let emailInput = document.getElementById("i");
    emailInput.innerHTML = "YourRegister@example.com";
}

function out() {
    let emailInput = document.getElementById("i");
    emailInput.innerHTML = "i";
}



function Form() {
   
    let password = document.getElementById('password').value;
    let emailInput = document.getElementById('email').value;

    if (
        !email(emailInput) ||
        !validatePassword(password)
       
    ) 
    {
        return false;
    }

    return true;
}


</script>

</body>
</html>

<?php
include_once('../views/Footer.html');
?>
