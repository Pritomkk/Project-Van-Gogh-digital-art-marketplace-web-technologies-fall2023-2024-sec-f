<?php
 require_once('db.php');

function checkEmailAvailabilityAdmin($email) {
    $con = getConnection(); 
    $sql = "SELECT email FROM users WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        return true; 
    } else {
        return false; 
    }
}

function checkEmailAvailabilityUser($email) {
    $con = getConnection(); 
    $sql = "SELECT email FROM users WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        return true; 
    } else {
        return false; 
    }
}

?>