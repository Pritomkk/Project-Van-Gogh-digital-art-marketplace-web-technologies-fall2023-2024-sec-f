<?php
require_once('db.php');

function loginAdmin($email, $password) {
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

function signupAdmin($firstName, $lastName, $userName, $email, $password, $dob, $gender, $phone, $joiningDob, $userType, $status, $profilePicture)
{
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE userName ='$userName' OR email = '$email'";
    $checkResult = mysqli_query($con, $sql);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<b><center>Email or username already exists</center></b>";
        return false;
    } else 
    {   
        $insertQuery = "INSERT INTO users (firstName, lastName, userName, email, password, dateOfBirth, gender, phoneNumber, joiningDate, type,status, profilePicture) 
                        VALUES ('$firstName', '$lastName', '$userName', '$email', '$password', '$dob', '$gender', '$phone', '$joiningDob', '$userType','$status', '$profilePicture')";

        $insertResult = mysqli_query($con, $insertQuery);

        if ($insertResult) {
            return true;
        } else {
            return false;
        }
    }
}

function CheckAdmin($email, $userName) {
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

function updatepasswordAdmin($email, $userName, $password)
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

function displayUserDataAdmin($userName) 
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

function displayUserInformation($userType) 
{
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE type='$userType'";
    $result = mysqli_query($con, $sql);

    $rows = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;  
    }

    return $rows;
}

function deleteUserArtist($userName) 
{   
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE userName = '$userName'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $deleteUserQuery = "DELETE FROM users WHERE userName = '$userName'";
        $Delete = mysqli_query($con, $deleteUserQuery);

        if ($Delete) 
        {
            return true;
        } 
        else 
        {
            return false;
        }
    } 
    else 
    {
        echo "<b><center>No Data</center></b>";
        return false;
    }
}

function checkAdminCurrentPass($currentPass, $userName) {
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

function CurrentAdminPassUpdate($updatePass, $userName) {
    $con = getConnection();
    $sql = "UPDATE users SET password='$updatePass' WHERE  userName='$userName'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}
?>
