<?php
require_once('db.php');

function login($email, $password) {
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        return $row; 
    }

    return null;
}

function checkEmailAvailabilityInDatabase($email) {
    $con = getConnection(); 
    $sql = "SELECT email FROM users WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        return true; 
    } else {
        return false; 
    }
}

function signup($firstName, $lastName, $userName, $email, $password, $dob, $gender, $phone, 
                    $joiningDob, $userType, $profilePicture ,$status)
{
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE userName ='$userName' OR email = '$email'";
    $checkResult = mysqli_query($con, $sql);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<b><center>Email or username already exists</center></b>";
        return false;
    } 
    else 
    {   
        $insertQuery = "INSERT INTO users (firstName, lastName, userName, email, password,
                             dateOfBirth, gender, phoneNumber, joiningDate, type, profilePicture, status) 
                        
                        VALUES ('$firstName', '$lastName', '$userName', '$email', '$password', '$dob',
                         '$gender', '$phone', '$joiningDob', '$userType', '$profilePicture','$status')";

        $insertResult = mysqli_query($con, $insertQuery);

        if ($insertResult) {
            return true;
        } else {
            return false;
        }
    }
}

function Check($email, $userName) {
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE email='$email' AND userName='$userName'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        return $row; 
    }

    return null;
}

function updatepassword($email, $userName, $password)
{
    $con = getConnection();
    $sql = "UPDATE users SET password='$password' WHERE email='$email' AND userName='$userName'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function displayUserData($userName) 
{
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE userName='$userName'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo "User not found.";
    }
}

function checkCurrentPass($currentPass, $userName) {
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE password='$currentPass' AND userName='$userName'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        return $row; 
    }

    return null;
}

function CurrentPassUpdate($updatePass, $userName) {
    $con = getConnection();
    $sql = "UPDATE users SET password='$updatePass' WHERE userName='$userName'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

?>
