<?php
 require_once('db.php');

function checkEmailAvailabilityAdmin($email) {
    $con = getConnection(); 
    $sql = "SELECT Email FROM admin WHERE Email='$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        return true; 
    } else {
        return false; 
    }
}

function checkEmailAvailabilityUser($email) {
    $con = getConnection(); 
    $sql = "SELECT Email FROM userartist WHERE Email='$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        return true; 
    } else {
        return false; 
    }
}

?>