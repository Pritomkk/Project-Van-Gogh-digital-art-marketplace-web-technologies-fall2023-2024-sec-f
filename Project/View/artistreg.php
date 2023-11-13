<?php
include_once('Header.html');
require_once('../Model/model.php');
require_once('../Controller/FunctionCheck.php');

?>

<html>
<head>
    <title>Registration</title>
</head>
<body>

<?php

session_start();

$Fn = $Ln = $e = $u = $p = $c = $g = $d = $jd = $ph = $tr = $im="";
$FirstName = $LastName = $Email = $UserName = $Password = $confirmPassword = $Dob = $JoiningDob = $Gender = $Phone = $terms =$destinationPath="";
$allFieldsFilled = false;

if (isset($_POST['Submit'])) {
    $Usertype = $_POST['userRole'];

    if (empty($_POST["FirstName"])) {
        $Fn = "Name is required";
    } else {
        $FirstName = $_POST["FirstName"];
        if (validName($FirstName)) {
            $Fn = "Meets the requirements.";
        } else {
            $Fn = "Please enter only alphabetical characters.";
        }
    }

    if (empty($_POST["LastName"])) {
        $Ln = "Name is required";
    } else {
        $LastName = $_POST["LastName"];
        if (validName($LastName)) {
            $Ln = "Meets the requirements.";
        } else {
            $Ln = "Please enter only alphabetical characters.";
        }
    }

    if (empty($_POST["UserName"])) {
        $u = "UserName is required";
    } else {
        $UserName = $_POST["UserName"];
        if (isValidUsername($UserName)) {
            $u = "Meets the requirements";
        } else {
            $u = "Invalid username. Please follow the rules: alphanumeric characters, period, dash, or underscore, and at least two characters.";
        }
    }

    if (empty($_POST["Password"])) {
        $p = "Password is required";
    } else {
        $Password = $_POST["Password"];
        if (strlen($Password) >= 8) {
            $specialCharacters = ['@', '#', '$', '%'];
            $containsSpecialChar = false;

            foreach ($specialCharacters as $char) {
                if (strpos($Password, $char) !== false) {
                    $containsSpecialChar = true;
                    break;
                }
            }

            if ($containsSpecialChar) {
                $p = "Password meets the requirements.";
            } else {
                $p = "Password must contain at least one of the special characters (@, #, $, %).";
            }
        } else {
            $p = "Password must be at least 8 characters long.";
        }
    }

    if (empty($_POST["confirmPassword"])) {
        $c = "ConfirmPassword is required";
    } else {
        $confirmPassword = $_POST["confirmPassword"];

        if ($confirmPassword !== $Password) {
            $c = "ConfirmPassword must match the password";
        }
    }

    if (empty($_POST["Email"])) {
        $e = "Email is required";
    } else {
        $Email = $_POST["Email"];
    }

    if (empty($_POST["Gender"])) {
        $g = "Gender is required";
    } else {
        $Gender = $_POST["Gender"];
    }

    if (empty($_POST["Dob"])) {
        $d = "Date is required";
    } else {
        $Dob = $_POST["Dob"];
    }

    if (empty($_POST["JoiningDob"])) {
        $jd = "Date is required";
    } else {
        $JoiningDob = $_POST["JoiningDob"];
    }

if (empty($_POST["Phone"]))
     {
        $ph = "Phone number is required";
    } 
else 
{
        $Phone = $_POST["Phone"];

        if (strlen($Phone) !== 11) {
            $ph = "Phone Number must be 11 digits";
        }
    }

    if (isset($_FILES['image']['name'])) {
        $image= $_FILES["image"];
        $imageName=$image["name"];
        $imageSize = $image["size"];
        $tmpName = $image["tmp_name"];
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));
    
        if (!in_array($imageExtension, $validImageExtension)) {
            $im = "Invalid Image Extension";
        } elseif ($imageSize > 4000000) {
            $im = 'Image Size Is Too Large';
        } 
        else 
        {
            $destinationPath = '../Asset/' . $imageName;
    
            move_uploaded_file($tmpName, $destinationPath);
            
            
        }
       
    }
    
    
if (empty($_POST['terms'])) {
        $tr = "You must accept the Terms and Conditions for Registration <br>";
 
    } else {
        $terms = $_POST['terms'];
    }

    $allFieldsFilled = !empty($FirstName) && !empty($LastName) && !empty($Email) && !empty($UserName) && !empty($Dob) && !empty($Password) && !empty($confirmPassword) && !empty($Gender) && !empty($Phone) && !empty($JoiningDob) && !empty($Usertype) &&!empty($terms) &&!empty($destinationPath);

    if ($allFieldsFilled) {
        if (signup($FirstName, $LastName, $UserName, $Email, $Password, $Dob, $Gender, $Phone, $JoiningDob, $Usertype, $destinationPath)) {
            echo "Registration Sucessfull ";
           
            exit(); 
        } else {
            echo "<center>Registration failed.</center>";
        }
    }
}

?>

   
   <table width="100%" height="550" align="center">
        <tr>
            <td >
                <table align="center"width="50%">
                    <tr>
                        <td>
                            <main>
                            <form method="post" action=" " enctype="multipart/form-data">
                            <fieldset>
                            <legend><h2>Artist Regestration</h2></legend>

                            <input type="hidden" name="userRole" value="Artist">
                            First Name:
                            <input type="text" name="FirstName" value="<?php echo $FirstName; ?>" /> <br> <br>
                            <b><?php echo $Fn; ?></b><hr>
                            Last Name:
                            <input type="text" name="LastName" value="<?php echo $LastName; ?>" /> <br> <br>
                            <b><?php echo $Ln; ?></b><hr>
                            
                            E-mail:
                            <input type="text" name="Email" value="<?php echo $Email; ?>" /><br><br>
                            <b><?php echo $e; ?></b> <hr>
                            
                            User Name:
                            <input type="text" name="UserName" value="<?php echo $UserName; ?>" /><br><br>
                            <b><?php echo $u; ?></b> <hr>
                            
                            Password:
                            <input type="password" name="Password" value="<?php echo $Password; ?>" /><br><br>
                            <b><?php echo $p; ?> </b><hr>
                            
                            Confirm Password:
                            <input type="password" name="confirmPassword" value="<?php echo $confirmPassword; ?>" /><br><br>
                            <b><?php echo $c; ?> </b> <hr>
                            
                            Date of Birth:
                            <input type="date" name="Dob" value="<?php echo $Dob;?>"><br><br>
                            <b><?php echo $d;?></b><hr>                   
                            Gender:
                                <input type="radio" id="male" name="Gender" <?php if ($Gender === "male") echo "checked"; ?> value="male">
                                Male
                                <input type="radio" id="female" name="Gender" <?php if ($Gender === "female") echo "checked"; ?> value="female">
                                Female
                                <input type="radio" id="other" name="Gender" <?php if ($Gender === "other") echo "checked"; ?> value="other">
                                Other <br><br>
                                <b><?php echo $g; ?></b><hr>
    
                            
                            PhoneNumber:
                            <input type="text" name="Phone" value="<?php echo $Phone; ?>" /><br><br>
                            <b><?php echo $ph; ?></b><hr>

                            
                            Joining Date:
                            <input type="date" name="JoiningDob" value="<?php echo $JoiningDob;?>"><br><br>
                            <b><?php echo $jd;?></b><hr>

                            Upload Profile Picture:
                            <input type="file" name="image" value=" " > <br> 
                            <b><?php echo $im;?></b><hr>


                            <input type="checkbox" name="terms" <?php if (isset($terms) && $terms=="terms") echo "checked";?> value="terms"> 
                            I accept the <a href="../View/Terms&ConditionAdmin.html">Terms and Conditions</a><br><br>
                            <?php echo $tr;?><br>


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

include_once('Footer.Html');

?>
