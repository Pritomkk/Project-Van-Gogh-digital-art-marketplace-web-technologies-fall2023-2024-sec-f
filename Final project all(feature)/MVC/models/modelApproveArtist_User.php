<?php
require_once('db.php');

function verificationArtist($userName, $destinationPath)
{
    $con = getConnection();
    $result = mysqli_query($con, "SELECT * FROM users WHERE userName  = '$userName'");

    if ($result && mysqli_num_rows($result) > 0) 
    {
        mysqli_query($con, "UPDATE users SET verification_doc = '$destinationPath ' WHERE userName= '$userName'");
        
        ApprovalNoticeAdminArtist("Artist $userName has updated their verification document.", $userName);
       
        return true; 
    } else {
        return false; 
    }
}

function ApprovalNoticeAdminArtist($message, $userName) 
{
    $con = getConnection();
    $message = mysqli_real_escape_string($con, $message);
 
    $existingRecordQuery = "SELECT * FROM showapprovaladmin WHERE userName = '$userName'";
    $existingRecordResult = mysqli_query($con, $existingRecordQuery);

    if ($existingRecordResult && mysqli_num_rows($existingRecordResult) > 0) {
        $updateQuery = "UPDATE showapprovaladmin SET message = '$message' WHERE userName = '$userName'";
        if (mysqli_query($con, $updateQuery)) {
            return true;
        } else {
            return false;
        }
    } else {
        $insertQuery = "INSERT INTO showapprovaladmin (userName, message) VALUES ('$userName', '$message')";
        if (mysqli_query($con, $insertQuery)) {
            return true;
        } else {
            return false;
        }
    }
}

function ApprovalNewNoticeArtist() 
{
    $con = getConnection();
    $result = mysqli_query($con, "SELECT * FROM showapprovaladmin");

    $notice = array();
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $notice[] = $row;
    }

    return $notice;
}

function ApprovalNewNoticeUser() 
{
    $con = getConnection();
    $result = mysqli_query($con, "SELECT * FROM showapprovaluser");

    $notice = array();
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $notice[] = $row;
    }

    return $notice;
}

function verificationUser($userName, $destinationPath)
{
    $con = getConnection();
    $result = mysqli_query($con, "SELECT * FROM users WHERE userName  = '$userName'");

    if ($result && mysqli_num_rows($result) > 0) 
    {
        mysqli_query($con, "UPDATE users SET verification_doc = '$destinationPath ' WHERE userName= '$userName'");
        
        ApprovalNoticeAdminUser("User $userName has updated their verification document.", $userName);
       
        return true; 
    } else {
        return false; 
    }
}

function ApprovalNoticeAdminUser($message, $userName) 
{
    $con = getConnection();
    $message = mysqli_real_escape_string($con, $message);
 
    $existingRecordQuery = "SELECT * FROM showapprovaluser WHERE userName = '$userName'";
    $existingRecordResult = mysqli_query($con, $existingRecordQuery);

    if ($existingRecordResult && mysqli_num_rows($existingRecordResult) > 0) {
        $updateQuery = "UPDATE showapprovaluser SET message = '$message' WHERE userName = '$userName'";
        if (mysqli_query($con, $updateQuery)) {
            return true;
        } else {
            return false;
        }
    } else {
        $insertQuery = "INSERT INTO showapprovaluser (userName, message) VALUES ('$userName', '$message')";
        if (mysqli_query($con, $insertQuery)) {
            return true;
        } else {
            return false;
        }
    }
}

function UpdateApprovalStatusUser($status, $userName)
{
    $con = getConnection();
    $status = mysqli_real_escape_string($con, $status);
    $userName = mysqli_real_escape_string($con, $userName);

    $query = "UPDATE showapprovaluser SET status = '$status' WHERE userName = '$userName'";

    if (mysqli_query($con, $query)) {
        return true;
    } else {
        return false;  
    }
}

function UpdateApprovalStatusArtist($status, $userName)
{
    $con = getConnection();
    $status = mysqli_real_escape_string($con, $status);
    $userName = mysqli_real_escape_string($con, $userName);

    $query = "UPDATE showapprovaladmin SET status = '$status' WHERE userName = '$userName'";

    if (mysqli_query($con, $query)) {
        return true;
    } else {
        return false;  
    }
}

function ShowVerificationStatusArtist($userName)
{
    $con = getConnection();

    $query = "SELECT * FROM showapprovaladmin WHERE userName = '$userName'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row && isset($row['status'])) {
            return $row['status'];
        }
    }

    return "Account Status: Please upload ID or Passport!";
}

function Show_Verification_Status_User($userName)
{
    $con = getConnection();

    $query = "SELECT * FROM showapprovaluser WHERE userName = '$userName'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row && isset($row['status'])) {
            return $row['status'];
        }
    }

    return "Account Status: Please upload ID or Passport!";
}
?>
