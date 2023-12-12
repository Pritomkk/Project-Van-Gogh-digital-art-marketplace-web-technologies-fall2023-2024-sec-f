<?php

require_once('db.php');

function verification_Artist($UserName, $destinationPath )
{
    $con = getConnection();
    $result = mysqli_query($con, "SELECT * FROM userartist WHERE UserName  = '$UserName'");

    if ($result && mysqli_num_rows($result) > 0) 
    {
        mysqli_query($con, "UPDATE userartist SET varification_doc = '$destinationPath ' WHERE UserName= '$UserName'");
        
        ApprovalNoticeAdmin_artist("Artist $UserName has updated their verification document.",$UserName);
       

        return true; 
    } else {
        return false; 
    }
}

function ApprovalNoticeAdmin_Artist($message, $UserName) 
{
    $con = getConnection();
    $message = mysqli_real_escape_string($con, $message);
 
    $existingRecordQuery = "SELECT * FROM showapprovaladmin WHERE UserName = '$UserName'";
    $existingRecordResult = mysqli_query($con, $existingRecordQuery);

    if ($existingRecordResult && mysqli_num_rows($existingRecordResult) > 0) {
        $updateQuery = "UPDATE showapprovaladmin SET message = '$message' WHERE UserName = '$UserName'";
        if (mysqli_query($con, $updateQuery)) {
            return true;
        } else {
            return false;
        }
    } else {
        $insertQuery = "INSERT INTO showapprovaladmin (UserName, message) VALUES ('$UserName', '$message')";
        if (mysqli_query($con, $insertQuery)) {
            return true;
        } else {
            return false;
        }
    }
}

function ApprovalNewNotice_Artist() 
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


function ApprovalNewNotice_User() 
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


function verification_User($UserName, $destinationPath )
{
    $con = getConnection();
    $result = mysqli_query($con, "SELECT * FROM userartist WHERE UserName  = '$UserName'");

    if ($result && mysqli_num_rows($result) > 0) 
    {
        mysqli_query($con, "UPDATE userartist SET varification_doc = '$destinationPath ' WHERE UserName= '$UserName'");
        
        ApprovalNoticeAdmin_User("User $UserName has updated their verification document.",$UserName);
       

        return true; 
    } else {
        return false; 
    }
}

function ApprovalNoticeAdmin_User($message, $UserName) 
{
    $con = getConnection();
    $message = mysqli_real_escape_string($con, $message);
 
    $existingRecordQuery = "SELECT * FROM showapprovaluser WHERE UserName = '$UserName'";
    $existingRecordResult = mysqli_query($con, $existingRecordQuery);

    if ($existingRecordResult && mysqli_num_rows($existingRecordResult) > 0) {
        $updateQuery = "UPDATE showapprovaluser SET message = '$message' WHERE UserName = '$UserName'";
        if (mysqli_query($con, $updateQuery)) {
            return true;
        } else {
            return false;
        }
    } else {
        $insertQuery = "INSERT INTO showapprovaluser (UserName, message) VALUES ('$UserName', '$message')";
        if (mysqli_query($con, $insertQuery)) {
            return true;
        } else {
            return false;
        }
    }
}

function Update_Approval_Status_User($status, $UserName)
{
    $con = getConnection();
    $status = mysqli_real_escape_string($con, $status);
    $UserName = mysqli_real_escape_string($con, $UserName);

    $query = "UPDATE showapprovaluser SET Status = '$status' WHERE UserName = '$UserName'";

    if (mysqli_query($con, $query)) {
        return true;
    } else {
        return false;  
    }
}


function Update_Approval_Status_Artist($status, $UserName)
{
    $con = getConnection();
    $status = mysqli_real_escape_string($con, $status);
    $UserName = mysqli_real_escape_string($con, $UserName);

    $query = "UPDATE showapprovaladmin SET Status = '$status' WHERE UserName = '$UserName'";

    if (mysqli_query($con, $query)) {
        return true;
    } else {
        return false;  
    }
}

function Show_Verification_Status_Artist($UserName)
{
    $con = getConnection();

    $query = "SELECT * FROM showapprovaladmin WHERE UserName = '$UserName'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row && isset($row['Status'])) {
            return $row['Status'];
        }
    }

    return "Account Status:Not Verified";
}

function Show_Verification_Status_User($UserName)
{
    $con = getConnection();

    $query = "SELECT * FROM showapprovaluser WHERE UserName = '$UserName'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row && isset($row['Status'])) {
            return $row['Status'];
        }
    }
 
}







function ($UserName, $destinationPath )
{
    $con = getConnection();
    $result = mysqli_query($con, "SELECT * FROM userartist WHERE UserName  = '$UserName'");

    if ($result && mysqli_num_rows($result) > 0) 
    {
        mysqli_query($con, "UPDATE userartist SET varification_doc = '$destinationPath ' WHERE UserName= '$UserName'");
        
        ApprovalNoticeAdmin("Artist $UserName has updated their verification document.",$UserName);
       

        return true; 
    } else {
        return false; 
    }
}






?>